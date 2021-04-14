<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;

class PageController extends BaseController
{
    public function showHome()
    {
        return view('frontend::pages.home');
    }

    public function showProducts()
    {
        return view('frontend::pages.products');
    }

    public function showCategories()
    {
        return view('frontend::pages.categories');
    }
}
