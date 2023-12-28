<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Source extends Model
{
    use HasFactory;
    protected $table = 'sources';

    public function methods()
    {
        return $this->hasMany(Method::class, 'source_id');
    }
}
