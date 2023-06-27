<?php

namespace AdminKit\Pages\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Pages\Database\Factories\PageFactory;

class Page extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_pages';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): PageFactory
    {
        return new PageFactory();
    }
}
