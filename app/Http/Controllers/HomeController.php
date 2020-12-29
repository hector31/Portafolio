<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Mail\ContactaMeMailable;
use Illuminate\Support\Facades\Mail;

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
        $projects= Project::paginate(5);
        return view('components.home.home-projects',['projects'=>$projects]); 
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
        $projects= Project::paginate(5);
        return view('components.home.portfolio-projects',['projects'=>$projects]);
    }
    public function show_contact()
    {
        return view('components.home.contact-projects');
    }
    public function send_email(Request $request){

        $request->validate([
            'name'=> 'required',
            'correo'=>'required|email',
            'asunto'=>'required',
            'mensaje'=>'required'

        ]);

        $correo=new ContactaMeMailable($request->all());
        Mail::to('inghectornarvaezdesarrollos@gmail.com')->send($correo);
        return redirect()->route('contact')->with('info','Mensaje Enviado');
    }
}
