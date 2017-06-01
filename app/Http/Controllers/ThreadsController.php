<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use App\Thread;
use Auth;

class ThreadsController extends Controller
{


    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $name, Thread $thread)
    {
        $board = Board::where('name', $name)->first();
        $user_id = Auth::id();
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = $user_id;
        $thread->board_id = $board->id;
        $thread->save();
        $id = $thread->id;
        $name = $thread->board->name;
       // Two parametres need to be passed here 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name, $id)
    {   
        $thread = Thread::where('id', $id)->first();
        return view('threads.show', compact('thread'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // This would be better to use middleware here 

    public function edit($name, $id)
    {
        $thread = Thread::where('id', $id)->first();
        
        if(Auth::id() == $thread->user_id){
            return view('threads.edit', compact('thread'));
        } else {
            return $request->session()->flash('status', 'You do not have permission to do that');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $name, $id)
    {
        $thread = Thread::where('id', $id)->first();
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->save();
        return redirect()->back()->with('message', 'Thread updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
