<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'author_name',
        'book_name',
    ];

    public function shairs()
    {
        return $this->hasMany(Shair::class,'book_id','id');
    }
}
