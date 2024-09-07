<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    # One to many
    public function products(){
        return $this->hasMany(Product::class);
    }

    #one to many inverse
    #each children has one parent
    public function parent(){
        return $this->belongsTo(Category::class,'parent_Id');
    }

    #one to many
    #each parent has many children
    public function children(){
        return $this->hasMany(Category::class,'parent_Id');
    }
}
