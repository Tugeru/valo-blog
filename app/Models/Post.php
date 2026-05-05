<?php

namespace App\Models;

use App\Services\MarkdownService;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'excerpt',
        'content',
        'image_path',
    ];

    /**
     * Get the rendered content as HTML.
     */
    protected function renderedContent(): Attribute
    {
        return Attribute::make(
            get: fn () => (new MarkdownService())->toHtml($this->content),
        );
    }
}
