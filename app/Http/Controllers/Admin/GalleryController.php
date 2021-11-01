<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\SchoolBranding;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p['title'] = 'Admin::Gallery';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Gallery::all();
        return view('admin.gallery.index',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::Gallery - Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.gallery.create',$p);
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
            'gallery_title'   => 'required',
            'gallery_img'   => 'required|mimes:png,jpg,jpeg',
        ]);

        $newImageName = time().'-'.$request->gallery_title.'.'.$request->gallery_img->extension();
        
        $request->gallery_img->move(public_path('gallery_images'),$newImageName);


        Gallery::create([
            'gallery_title' => $request->input('gallery_title'),
            'gallery_img' => $newImageName,
        ]);

        return redirect()->route('admin.gallery');
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
        $p['title'] = 'Admin::Gallery - Edit';
        $p['data'] = Gallery::find($id);
        $p['site_branding']= SchoolBranding::all();
        return view('admin.gallery.edit',$p);
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
            'gallery_title'   => 'required',
            'gallery_img'   => 'required|mimes:png,jpg,jpeg',
        ]);

        $newImageName = time().'-'.$request->gallery_title.'.'.$request->gallery_img->extension();
        
        $request->gallery_img->move(public_path('gallery_images'),$newImageName);

        Gallery::where('id',$id)->update(
            [
            'gallery_title' => $request->input('gallery_title'),
            'gallery_img' => $newImageName,
        ]);

        return redirect()->route('gallery.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Gallery::find($id);

        $slider->delete();

        return redirect()->route('gallery.index');
    }
}
