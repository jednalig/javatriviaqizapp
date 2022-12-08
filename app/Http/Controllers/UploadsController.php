<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUploadsRequest;
use App\Http\Requests\UpdateUploadsRequest;

class UploadsController extends Controller
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

        return view('uploads.index', compact('uploads'));
    }

    /**
     * Show the form for creating new Topic.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('uploads.create');
    }

    /**
     * Store a newly created Topic in storage.
     *
     * @param  \App\Http\Requests\StoreUploadsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUploadsRequest $request)
    {
        Upload::create($request->all());

        return redirect()->route('uploads.index');
    }


    /**
     * Show the form for editing Topic.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $upload = Upload::findOrFail($id);

        return view('uploads.edit', compact('upload'));
    }

    /**
     * Update Topic in storage.
     *
     * @param  \App\Http\Requests\UpdateUploadsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUploadsRequest $request, $id)
    {
        $upload = Upload::findOrFail($id);
        $upload->update($request->all());

        return redirect()->route('uploads.index');
    }


    /**
     * Display Topic.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $upload = Upload::findOrFail($id);

        return view('uploads.show', compact('upload'));
    }


    /**
     * Remove Topic from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $upload = Upload::findOrFail($id);
        $upload->delete();

        return redirect()->route('uploads.index');
    }

    /**
     * Delete all selected Topic at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Upload::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
