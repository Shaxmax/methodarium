<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Category;

class Method extends Model
{
    use HasFactory;
    protected $table = 'methods';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    
    public function scopeTitle(Builder $query, string $title): Builder
    {
        return $query-> where('title', 'LIKE', '%' . $title . '%');
    }



}