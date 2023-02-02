<?php

namespace App\Http\Controllers\Admin;

use App\Models\Neew;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class NeewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $neews=Neew::all();
        return view('admin.neew.index',compact('neews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.neew.create');
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
            'date' => 'required',
            'titel' => 'required',
            'content' => 'required',
        ]);
        $img_name=time().rand().$request->image->getClientOriginalName();
        $request->image->move(public_path('image/neew'),$img_name);
        // Create Data
        Neew::create([
            'image' => $img_name,
            'date' =>$request->date ,
            'titel' =>$request->titel ,
            'content' =>$request->content ,
        ]);

        // Redirect
        return redirect()->route('admin.neews.index')->with('msg', 'Neew added successfully')->with('type', 'success');
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
        $neew=Neew::find($id);
        return view('admin.neew.edit',compact('neew'));
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
        $neew=Neew::find($id);
        // Validate Data
        $request->validate([
            'date' => 'required',
            'titel' => 'required',
            'content' => 'required',
        ]);
        $image_name=  $neew->image;
        if($request->image){
             $image_name=time().rand(). $request->image->getClientOriginalName();
             $request->image->move(public_path('image/neew'),  $image_name);
        }
        // Update Data
        $neew->update([
            'image' => $image_name,
            'date' =>$request->date ,
            'titel' =>$request->titel ,
            'content' =>$request->content ,
        ]);

        // Redirect
        return redirect()->route('admin.neews.index')->with('msg', 'Neew updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $neew=Neew::find($id);
        $neew->delete();
        File::delete(public_path('image/neew/'). $neew->image);

        // Redirect
        return redirect()->route('admin.neews.index')->with('msg', 'Neew deleted successfully')->with('type', 'danger');
    }

    public function trach()
    {
        $neews=Neew::onlyTrashed()->paginate(10);
        return view('admin.neew.trach',compact('neews'));
    }

    public function restore($id)
    {
        Neew::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.neews.index')->with('msg', 'Neew restored successfully')->with('type', 'warning');

    }

    public function forcedelete($id)
    {
        Neew::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.neews.index')->with('msg', 'Neew deleted permanintly successfully')->with('type', 'danger');
    }
}


