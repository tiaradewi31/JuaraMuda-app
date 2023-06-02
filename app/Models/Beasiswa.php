<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Beasiswa extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'beasiswa'];

    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    public function excerpt()
    {
        return Str::limit($this->katamu, Post::EXCERPT_LENGTH);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
