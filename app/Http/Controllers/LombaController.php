<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $Keyword = $request->Keyword;
        $posts = Lomba::where('title', 'LIKE', '%' . $Keyword . '%')
                // ->orwhere('category', 'LIKE', '%' . $Keyword . '%')             
                ->paginate(6);

        return view ('searchlomba', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lomba', [
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
            'lomba' => ['required'],
            
        ]);

        // if($request->file('image')){
        //     $post['image'] = $request->file('image')->store('post-images');
        // }

        $lomba = new Lomba();
        $lomba->user_id = Auth::user()->id;
        $lomba->title = $request->title;
        $lomba->excerpt = Str::limit($request->lomba, 100);
        $lomba->slug = \Str::slug($request->title);
            $file       = $request->file('image');
            $fileName   = $file->getClientOriginalName();
            $request->file('image')->move("image/", $fileName);
            $lomba->image = $fileName;
        
        // $lomba->category_id = $request->category_id;
        $lomba->lomba = $request->lomba;
        $lomba->save();

        return redirect('/searchlomba');
    }

    /**
     * Display the specified resource.
     */
    public function show(Lomba $lomba, $slug)
    {
        $title = 'Single Post';
        $lomba = DB::table('lombas')->where('slug', $slug)->first();
        return view('detaillomba', compact('title','lomba'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lomba $lomba)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLombaRequest $request, Lomba $lomba)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Lomba $lomba)
    {
        //
    }
}
