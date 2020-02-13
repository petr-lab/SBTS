<?php

namespace App\Http\Controllers\Family;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    protected $redirectTo = '/family/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('family.auth:family');
    }

    /**
     * Show the Family dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('family.home');
    }

}