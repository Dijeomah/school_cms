<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolBranding;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p['title'] = 'Admin::Testimonials';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Testimonials::all();
        return view('admin.testimonials.index',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::Testimonials - Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.testimonials.create',$p);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'   => 'required',
            'message'   => 'required',
        ]);

        Testimonials::create([
            'name' => $request->input('name'),
            'message' => $request->input('message'),
        ]);

        return redirect('admin/testimonials');
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
        $p['title'] = 'Admin::Testimonials - Edit';
        $p['data'] = Testimonials::find($id);
        $p['site_branding']= SchoolBranding::all();
        return view('admin.testimonials.edit',$p);
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
        $request->validate([
            'name'   => 'required',
            'message'   => 'required',
        ]);

        Testimonials::where('id',$id)->update(
            [
            'name' => $request->input('name'),
            'message' => $request->input('message'),
        ]);

        return redirect('admin/testimonials');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonials::find($id);

        $testimonial->delete();

        return redirect('admin/testimonials');
    }
}