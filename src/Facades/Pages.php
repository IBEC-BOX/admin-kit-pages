<?php

namespace AdminKit\Pages\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Pages\Pages
 */
class Pages extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Pages\Pages::class;
    }
}
