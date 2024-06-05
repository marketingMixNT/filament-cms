<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Spatie\Translatable\HasTranslations;


class Offer extends Model
{
    use HasFactory;

    use HasTranslations;


    protected $fillable = ['sort'];

    
    public $translatable = ['title', 'description','nights','food'];
}
