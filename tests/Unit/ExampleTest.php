<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */


    public function testBoardCreate(){

    	$response = $this->get('/board/create');
    	$response->assertStatus(200);

    }




        public function testBoardCreate(){

    	$response = $this->get('/board/create');
    	$response->assertStatus(200);

    }








}
