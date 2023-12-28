<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Methode;

use Illuminate\Contracts\View\View;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';

    public function methods()
    {
        return $this->hasMany(Method::class, 'category_id');
    }


}