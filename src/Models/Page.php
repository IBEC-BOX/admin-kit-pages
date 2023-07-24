<?php

namespace AdminKit\Pages\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use AdminKit\Pages\Database\Factories\PageFactory;
use AdminKit\SEO\Traits\HasSEO;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class Page extends AbstractModel
{
    use HasFactory;
    use HasTranslations;
    use HasSEO;
    use SoftDeletes;

    protected $table = 'admin_kit_pages';

    protected $fillable = [
        'page_title',
        'title',
        'content',
        'slug',
        'position',
        'site_display',
    ];

    public array $translatable = [
        'title',
        'content',
    ];

    protected $casts = [
        //
    ];

    protected static function newFactory(): PageFactory
    {
        return new PageFactory();
    }
}
