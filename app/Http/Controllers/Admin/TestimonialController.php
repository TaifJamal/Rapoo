<?php

namespace App\Http\Controllers\Admin;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials=Testimonial::all();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'name' => 'required',
            'job' => 'required',
            'comment' => 'required',
        ]);
        $img_name=time().rand(). $request->image->getClientOriginalName();
        $request->image->move(public_path('image/testimonial'), $img_name);
        // Create Data
        Testimonial::create([
            'image' =>  $img_name,
            'name' =>$request->name ,
            'job' =>$request->job ,
            'comment' =>$request->comment ,
        ]);

        // Redirect
        return redirect()->route('admin.testimonials.index')->with('msg', 'Testimonial added successfully')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //()
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial=Testimonial::find($id);
        return view('admin.testimonial.edit',compact('testimonial'));
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
        $testimonial=Testimonial::find($id);
        // Validate Data
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'comment' => 'required',
        ]);
        $image_name=  $testimonial->image;
        if($request->image){
             $image_name=time().rand(). $request->image->getClientOriginalName();
             $request->image->move(public_path('image/testimonial'),  $image_name);
        }
        // Update Data
        $testimonial->update([
            'image' =>   $image_name,
            'name' =>$request->name ,
            'job' =>$request->job ,
            'comment' =>$request->comment ,
        ]);

        // Redirect
        return redirect()->route('admin.testimonials.index')->with('msg', 'Testimonial updated successfully')->with('type', 'info');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $testimonial=Testimonial::find($id);
        $testimonial->delete();
        File::delete(public_path('image/testimonial/'). $testimonial->image);
        // Redirect
        return redirect()->route('admin.testimonials.index')->with('msg', 'Testimonial deleted successfully')->with('type', 'danger');
    }

    public function trach()
    {
        $testimonials=Testimonial::onlyTrashed()->paginate(10);
        return view('admin.testimonial.trach',compact('testimonials'));
    }

    public function restore($id)
    {
        Testimonial::onlyTrashed()->find($id)->restore();
        return redirect()->route('admin.testimonials.index')->with('msg', 'Testimonial restored successfully')->with('type', 'warning');

    }

    public function forcedelete($id)
    {
        Testimonial::onlyTrashed()->find($id)->forcedelete();
        return redirect()->route('admin.testimonials.index')->with('msg', 'Testimonial deleted permanintly successfully')->with('type', 'danger');
    }
}

