<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'blog_image',
        'is_featured',
        'meta_title',
        'meta_description',
        'post_date',
        'status'

    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'post_date' => 'date',
        ];
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
