<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();
        return view('admin.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=About::select('id','titel')->where('type','service2')->get();
        return view('admin.project.create',compact('services'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validate Data
         $request->validate([
            'name' => 'required',
            'client' => 'required',
            'category' => 'required',
            'website' => 'required',
            'image' => 'required',
            'about_id' => 'required',
        ]);
        $img_name=time().rand(). $request->image->getClientOriginalName();
        $request->image->move(public_path('image/project'), $img_name);
        // Create Data
        Project::create([
            'name' => $request->name,
            'client' =>$request->client ,
            'category' =>$request->category ,
            'website' =>$request->website ,
            'image' => $img_name,
            'about_id' =>$request->about_id ,
        ]);

        // Redirect
        return redirect()->route('admin.projects.index')->with('msg', 'Project added successfully')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services=About::select('id','titel')->where('type','service2')->get();
        $project=Project::find($id);
        return view('admin.project.edit',compact('project','services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project=Project::find($id);
         // Validate Data
         $request->validate([
            'name' => 'required',
            'client' => 'required',
            'category' => 'required',
            'website' => 'required',
            'about_id' => 'required',
        ]);
        $image_name=  $project->image;
        if($request->image){
             $image_name=time().rand(). $request->image->getClientOriginalName();
             $request->image->move(public_path('image/project'),  $image_name);
        }
        // Create Data
        $project->update([
            'name' => $request->name,
            'client' =>$request->client ,
            'category' =>$request->category ,
            'website' =>$request->website ,
            'image' =>  $image_name,
            'about_id' =>$request->about_id ,
        ]);
         // Redirect
         return redirect()->route('admin.projects.index')->with('msg', 'Project updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project=Project::find($id);
        $project->delete();
        File::delete(public_path('image/project/'). $project->image);
        // Redirect
        return redirect()->route('admin.projects.index')->with('msg', 'Project deleted successfully')->with('type', 'danger');
    }

    public function trach()
    {
        $projects=Project::onlyTrashed()->paginate(10);
        return view('admin.project.trach',compact('projects'));
    }

    public function restore($id)
    {
        Project::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.projects.index')->with('msg', 'Project restored successfully')->with('type', 'warning');

    }

    public function forcedelete($id)
    {
        Project::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.projects.index')->with('msg', 'Project deleted permanintly successfully')->with('type', 'danger');
    }
}
