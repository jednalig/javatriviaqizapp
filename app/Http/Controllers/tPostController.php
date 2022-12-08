<?php

namespace App\Http\Controllers;

use App\Observers\Image;
use App\Observers\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class tPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('tview.index')->with('posts',$posts);
    }

 


}
