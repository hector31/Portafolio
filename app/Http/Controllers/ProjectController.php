<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    //
    public function index(){
        $projects=Project::paginate(5);
        // $proejcts=$projects->paginate(5);
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
        // session()->flash('post-created-message','Post with title was created '. $inputs['post_image']);//session se puede utiliza como un metodo estatico no se necesita llamarlo
        Session::flash('project-created-message','El post del proyecto con titulo '.$inputs['title'].' fue creado');

        return redirect()->route('project.index');
    }

    public function edit(Project $project){
        return view('admin.projects.edit',['project'=>$project]);
    }

    public function destroy(Project $project){
        $project->delete();
        Session::flash('message','El post del proyecto fue eliminado');
        return back();
    }

    public function update(Project $project){
        $inputs=request()->validate([
            'title'=>'required|min:8|max:255',
            'category'=>'required',
            // 'project_image'=>'mimems:jpeg,bmp,png',//si se quiere solo cierto tipo de documentos a subir
            'post_image'=>'file',//admite todos los documentos pdf imagenes etc
            'body'=>'required'
        ]);
        if(request('post_image')){
            $inputs['post_image']=request('post_image')->store('images');
            $project->post_image=$inputs['post_image'];
        }
        $project->title=$inputs['title'];
        $project->category=$inputs['category'];
        $project->body=$inputs['body'];

        // $this->authorize('update',$project);
        $project->update();
        session()->flash('project-updated-message','El proyecto con titulo fue actualizado '. $inputs['title']);//session se puede utiliza como un metodo estatico no se necesita llamarlo

        return redirect()->route('project.index');
    }

}
