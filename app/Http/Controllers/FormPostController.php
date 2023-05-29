<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FormPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('uploadbeasiswa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-image');

        $request->validate([
            'title' => ['required'],
            'katamu' => ['required'],
            'image' => ['required'],
        ]);

        $post = new post();
        // $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->katamu = $request->katamu;
        
        // $extension = $request->file("image")->getClientOriginalExtension();
        // $stringPaperFormat = str_replace(" ", "", $request->input('title'));
        // $fileName = $stringPaperFormat . "." . $extension;
        // $FileEnconded =  File::get($request->cover);
        // Storage::disk('local')->put('public/image' . $fileName, $FileEnconded);

        // $post->image = $fileName;

        $post->save();

        // $request['user_id']=auth()->user()->id;

        return redirect('/');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
