<?php

namespace App\Http\Controllers;


use App\Upload;

use App\Http\Requests\StoreUploadsRequest;
use App\Http\Requests\UpdateUploadsRequest;

use App\Observers\Image;
use App\Observers\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class tPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of Topic.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uploads = Upload::all();

        return view('tview.index', compact('uploads'));
       
    }

 


}
