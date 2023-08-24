<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
 

class Category extends Model
{
    use Sluggable;
    protected $fillable = ['image', 'thumbnail', 'name', 'slug', 'content', 'cat_ust', 'status'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function items(){
        return $this->hasMany(Product::class, 'category_id', 'id');
    }
}
