<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Attraction extends Model
{
    use HasTranslations;


    protected $fillable = ['title', 'content'];
    public $translatable = ['title', 'content'];
    protected $casts = ['title', 'content'];
}
