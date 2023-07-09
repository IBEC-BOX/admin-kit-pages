<?php

namespace AdminKit\Pages\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Pages\Database\Factories\PageFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;

class Page extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_pages';

    protected $fillable = [
        'title',
        'content',
        'seo_title',
        'seo_description',
        'slug',
        'position',
        'site_display',
        'site_map_index',
    ];

    public array $translatable = [
        'title',
        'content',
        'seo_title',
        'seo_description',
    ];

    protected $casts = [
        //
    ];

    protected static function newFactory(): PageFactory
    {
        return new PageFactory();
    }
}
