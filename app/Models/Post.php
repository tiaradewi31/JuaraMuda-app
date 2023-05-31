<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['title', 'slug', 'katamu'];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    // public static function all()
    // {
    //     return self::$blog_posts;
    // }
    // public static function all(){
    //     return collect(self::$postingan);
    // }

    // public static function find($slug)
    // {
    //     $posts = static::all();
    //     // $posts = [];
    //     // foreach($posts as $post){
    //     //     if($post["slug"] === $slug){
    //     //         $post = $p;
    //     //     }            
    //     // }

    //     // return $post;
    //     return $posts->firstWhere('slug', $slug);
    // }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

}

