<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class News extends Model
{
    use HasFactory;

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';
    const STATUS_ARCHIVE = 'archive';

    protected $fillable = [
        'title',
        'content',
        'status',
        'publish_at',
    ];

    protected $dates = [
        'publish_at',
    ];

    public function scopeShouldBePublished($query)
    {
        return $query->where('status', self::STATUS_DRAFT)
                     ->whereNotNull('publish_at')
                     ->where('publish_at', '<=', Carbon::now());
    }
}
