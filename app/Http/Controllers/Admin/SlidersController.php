<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolBranding;
use App\Models\Slider;
use Illuminate\Http\Request;

class SlidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p['title'] = 'Admin::Sliders';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Slider::all();
        return view('admin.slider.index',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::Sliders - Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.slider.create',$p);
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
            'slider_title'   => 'required',
            'slider_sub_title'   => 'required',
            'slider_img'   => 'required|mimes:png,jpg,jpeg',
        ]);

        $newImageName = time().'-'.$request->slider_title.'.'.$request->slider_img->extension();
        
        $request->slider_img->move(public_path('slider_images'),$newImageName);


        Slider::create([
            'slider_title' => $request->input('slider_title'),
            'slider_sub_title' => $request->input('slider_sub_title'),
            'slider_img' => $newImageName,
        ]);

        return redirect('admin/sliders');
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
        $p['title'] = 'Admin::Sliders - Edit';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Slider::find($id);
        return view('admin.slider.edit',$p);
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
            'slider_title'   => 'required',
            'slider_sub_title'   => 'required',
            'slider_img'   => 'required|mimes:png,jpg,jpeg',
        ]);

        $newImageName = time().'-'.$request->slider_title.'.'.$request->slider_img->extension();
        
        $request->slider_img->move(public_path('slider_images'),$newImageName);

        Slider::where('id',$id)->update(
            [
            'slider_title' => $request->input('slider_title'),
            'slider_sub_title' => $request->input('slider_sub_title'),
            'slider_img' => $newImageName,
        ]);

        return redirect('admin/sliders');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        return redirect('admin/sliders');
    }
}
