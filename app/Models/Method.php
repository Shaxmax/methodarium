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

    public function source()
    {
        return $this->belongsTo(Source::class, 'source_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function scopeTitle(Builder $query, string $title): Builder
    {
        return $query-> where('title', 'LIKE', '%' . $title . '%');
    }

    protected $fillable = [
        'title',
        'category_id',
        'goal',
        'stage',
        'complexity',
        'duration',
        'participants',
        'social_form',
        'learning_environment',
        'explanation',
        'example',
        'obstacles',
        'tips',
        'preparation_level',
        'preparation',
        'material',
        'source_id',
        'online',
        'user_id'
    ];

}