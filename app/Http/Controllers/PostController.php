<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $Keyword = $request->Keyword;
        $posts = Post::where('title', 'LIKE', '%' . $Keyword . '%')
                // ->orwhere('category', 'LIKE', '%' . $Keyword . '%')             
                ->paginate(6);

        return view ('posting', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post, $slug)
    {
        $title = 'Single Post';
        $post = DB::table('posts')->where('slug', $slug)->first();
        return view('katamereka', compact('title','post'));
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

    public function checkSlug(Request $request)
    {
        $slug = SlugService::checkSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
