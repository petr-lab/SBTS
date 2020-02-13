<?php

namespace App\Http\Controllers\Parent;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/parent/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('parent.auth:parent');
    }

    /**
     * Show the Parent dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('parent.home');
    }

}