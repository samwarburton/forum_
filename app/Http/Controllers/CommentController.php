<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Auth;

class CommentController extends Controller
{
    








	 public function store($name, $id, Comment $comment, Request $request)
    {
        
    	$comment->user_id = Auth::id();
    	$comment->thread_id = $id;
    	$comment->body = $request->body;
    	$comment->save();
    	return view('home');


    }












}
