<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts=About::paginate(10);
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'icoun' => 'required',
            'titel' => 'required',
            'content' => 'required',
            'type' => 'required',
        ]);
        // Create Data
        About::create([
            'icoun' => $request->icoun ,
            'titel' =>$request->titel ,
            'content' =>$request->content ,
            'type' =>$request->type ,
        ]);

        // Redirect
        return redirect()->route('admin.abouts.index')->with('msg', 'About added successfully')->with('type', 'success');
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
        $about=About::find($id);
        return view('admin.about.edit',compact('about'));
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
        $about=About::find($id);
        // Validate Data
        $request->validate([
            'icoun' => 'required',
            'titel' => 'required',
            'content' => 'required',
            'type' => 'required',
        ]);
        // Update Data
        $about->update([
            'icoun' => $request->icoun ,
            'titel' =>$request->titel ,
            'content' =>$request->content ,
            'type' =>$request->type ,
        ]);

        // Redirect
        return redirect()->route('admin.abouts.index')->with('msg', 'About updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about=About::find($id);
        $about->delete();

        // Redirect
        return redirect()->route('admin.abouts.index')->with('msg', 'About deleted successfully')->with('type', 'danger');
    }

    public function trach()
    {
        $abouts=About::onlyTrashed()->paginate(10);
        return view('admin.about.trach',compact('abouts'));
    }

    public function restore($id)
    {
        About::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.abouts.index')->with('msg', 'About restored successfully')->with('type', 'warning');

    }

    public function forcedelete($id)
    {
        About::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.abouts.index')->with('msg', 'About deleted permanintly successfully')->with('type', 'danger');
    }
}
