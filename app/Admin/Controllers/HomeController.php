<?php

namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index() {
        return view('admin.home.index');
    }
}
