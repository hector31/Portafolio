<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    //
    public function index(){
        $projects=Project::all();
        return view('admin.projects.index',['projects'=>$projects]);
    }

    public function show(Project $project)
    {

        return view('components.home.post-projects',['project'=>$project]);
    }
    public function create()
    {

        return view('admin.projects.create');
    }
    public function store(Request $request)
    {
        // dd($inputs);
        $inputs =request()->validate([
            'title'=>'required|min:4|max:255',
            'category'=>'required',
            'post_image'=>'file',
            'body'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('images');
        }

        $project = Project::create($inputs);
        // auth()->user()->posts()->create($inputs);
        session()->flash('post-created-message','Post with title was created '. $inputs['post_image']);//session se puede utiliza como un metodo estatico no se necesita llamarlo

        return back();
    }

}
