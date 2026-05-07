<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;

class ViewController extends Controller
{
    /**
     * @var null
     */
    public $title = null;

    /**
     * @var null
     */
    public $description = null;

    /**
     * @param string $view
     * @param array $data
     * @return \Illuminate\View\View
     */
    public function view(string $view, array $data = []) : \Illuminate\View\View
    {
        //
        $data['locale'] = App::currentLocale();

        //
        $data['route'] = Route::currentRouteName();

        // Meta
        $data['title'] = $this->title;
        $data['description'] = $this->description;

        return view($view, $data);
    }
}
