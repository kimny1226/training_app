<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LessonService;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dump(LessonService::getLesson1());
        return view('home');
    }
}
