<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

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
        return view('uploadbeasiswa', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->file('image')->store('post-image');
        // ddd($request);
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'image' => ['image', 'file', 'max:2048', 'required'],
            'katamu' => ['required'],
            
        ]);

        // if($request->file('image')){
        //     $post['image'] = $request->file('image')->store('post-images');
        // }

        $post = new post();
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->excerpt = Str::limit($request->katamu, 100);
        $post->slug = \Str::slug($request->title);
            $file       = $request->file('image');
            $fileName   = $file->getClientOriginalName();
            $request->file('image')->move("image/", $fileName);
            $post->image = $fileName;
        
        $post->category_id = $request->category_id;
        $post->katamu = $request->katamu;
        $post->save();

        return redirect('/postingan');
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
    public function edit($post)
    {
        // $post   = Post::whereId($id)->first();
        // return view('edit')->with('post', $post);
        // return view('edit');

        // $post = DB::table('posts')->where('slug', $slug)->first();
        // return view ('edit', [
        //     'post' => $post,
        //     'categories' => Category::all()
        // ]);
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
    public function destroy(Post $post)
    {
        // Post::destroy($post->id);

        // return('/postingan')->with('success', 'Post has been deleted!');
    }

    public function delete($id)
    {
        $post = Post::where('id', $id)
          ->delete();
        return view ('dashboard');
    }
}
