<?php

declare(strict_types=1);

namespace AdminKit\Pages\UI\API\Controllers;

use AdminKit\Pages\Models\Page;

class PageController extends Controller
{
    public function index()
    {
        return Page::all();
    }

    public function show(int $id)
    {
        return Page::findOrFail($id);
    }
}
