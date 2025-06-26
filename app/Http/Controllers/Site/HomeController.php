<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function view() {
        return view('site.home');
    }
}
