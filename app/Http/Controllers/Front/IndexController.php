<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\ViewController;
use Illuminate\View\View;

class IndexController extends ViewController
{
    /**
     * @return View
     */
    public function index(): View
    {
        return $this->view('front.index');
    }
}
