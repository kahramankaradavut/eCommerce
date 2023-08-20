<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
 

class Category extends Model
{
    use Sluggable;
    protected $fillable = ['image', 'thumbnail', 'name', 'slug', 'content', 'cat_usr', 'status'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
}
