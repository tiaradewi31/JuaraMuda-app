<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Category;
// use App\Http\Controllers\Post;
// use App\Http\Requests\StoreBeasiswaRequest;
// use App\Http\Requests\UpdateBeasiswaRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $Keyword = $request->Keyword;
        $posts = Beasiswa::where('title', 'LIKE', '%' . $Keyword . '%')
                // ->orwhere('category', 'LIKE', '%' . $Keyword . '%')             
                ->paginate(6);

        return view ('searchbeasiswa', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('beasiswa', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'slug' => ['required'],
            'image' => ['image', 'file', 'max:2048', 'required'],
            'beasiswa' => ['required'],
            
        ]);

        // if($request->file('image')){
        //     $post['image'] = $request->file('image')->store('post-images');
        // }

        $beasiswa = new Beasiswa();
        $beasiswa->user_id = Auth::user()->id;
        $beasiswa->title = $request->title;
        $beasiswa->excerpt = Str::limit($request->beasiswa, 100);
        $beasiswa->slug = \Str::slug($request->title);
            $file       = $request->file('image');
            $fileName   = $file->getClientOriginalName();
            $request->file('image')->move("image/", $fileName);
            $beasiswa->image = $fileName;
        
        // $beasiswa->category_id = $request->category_id;
        $beasiswa->beasiswa = $request->beasiswa;
        $beasiswa->save();

        return redirect('/searchbeasiswa');
    }

    /**
     * Display the specified resource.
     */
    public function show(Beasiswa $beasiswa, $slug)
    {
        $title = 'Single Post';
        $beasiswa = DB::table('beasiswas')->where('slug', $slug)->first();
        return view('detailbeasiswa', compact('title','beasiswa')); //nanti bikin blade php buat beasiswa detail
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Beasiswa $beasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeasiswaRequest $request, Beasiswa $beasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Beasiswa $beasiswa)
    {
        //
    }
}
