<?php

namespace App\Http\Controllers\Admin;

use App\Models\Proces;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:proces-list|proces-create|proces-edit|proces-delete', ['only' => ['index','store']]);
         $this->middleware('permission:proces-create', ['only' => ['create','store']]);
         $this->middleware('permission:proces-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:proces-delete', ['only' => ['destroy']]);
    }
    public function index()
    {
        $process=Proces::all();
        return view('admin.proces.index',compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.proces.create');
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
            'image' => 'required',
            'titel' => 'required',
            'content' => 'required',
        ]);
        $img_name=time().rand().$request->image->getClientOriginalName();
        $request->image->move(public_path('image/proces'),$img_name);
        // Create Data
        Proces::create([
            'image' =>  $img_name ,
            'titel' =>$request->titel ,
            'content' =>$request->content ,
        ]);

        // Redirect
        return redirect()->route('admin.proces.index')->with('msg', 'Proces added successfully')->with('type', 'success');
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
        $proces=Proces::find($id);
        return view('admin.proces.edit',compact('proces'));
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
        $proces=Proces::find($id);
        // Validate Data
        $request->validate([
            'titel' => 'required',
            'content' => 'required',
        ]);
        $image_name=$proces->image;
        if($request->image){
            $image_name=time().rand().$request->image->getClientOriginalName();
            $request->image->move(public_path('image/proces'), $image_name);
        }
        // Update Data
        $proces->update([
            'image' => $image_name ,
            'titel' =>$request->titel ,
            'content' =>$request->content ,
        ]);

        // Redirect
        return redirect()->route('admin.proces.index')->with('msg', 'Proces updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proces=Proces::find($id);
        $proces->delete();
        File::delete(public_path('image/proces/'). $proces->image);

        // Redirect
        return redirect()->route('admin.proces.index')->with('msg', 'Proces deleted successfully')->with('type', 'danger');
    }

    public function trach()
    {
        $proces=Proces::onlyTrashed()->paginate(10);
        return view('admin.proces.trach',compact('proces'));
    }

    public function restore($id)
    {
        Proces::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.proces.index')->with('msg', 'Proces restored successfully')->with('type', 'warning');

    }

    public function forcedelete($id)
    {
        Proces::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.proces.index')->with('msg', 'Proces deleted permanintly successfully')->with('type', 'danger');
    }
}
