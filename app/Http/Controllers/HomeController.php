<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.a
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('components.home.home-projects');
    }
    public function show_resume()
    {
        return view('components.home.resume-projects');
    }
    public function show_services()
    {
        return view('components.home.services-projects');
    }
    public function show_portfolio()
    {
        return view('components.home.portfolio-projects');
    }
    public function show_contact()
    {
        return view('components.home.contact-projects');
    }
}
