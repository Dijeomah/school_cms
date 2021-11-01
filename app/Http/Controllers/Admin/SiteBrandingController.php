<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolBranding;
use Illuminate\Http\Request;

class SiteBrandingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p['title'] = 'Admin::Site Branding';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = SchoolBranding::all();
        return view('admin.site_branding.index',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::Site Branding - Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.site_branding.create',$p);
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
            'school_name'   => 'required',
            'school_img'   => 'required|mimes:png,jpg,jpeg',
            'school_desc'   => 'required',
            'school_footer'  => 'required',
        ]);

        $newImageName = time().'-'.$request->school_name.'.'.$request->school_img->extension();
        
        $request->school_img->move(public_path('school_images'),$newImageName);


        $branding = SchoolBranding::create([
            'school_name' => $request->input('school_name'),
            'school_desc' => $request->input('school_desc'),
            'school_footer' => $request->input('school_footer'),
            'school_img' => $newImageName,
        ]);

        return redirect('admin/site-branding');
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
        $p['title'] = 'Admin::Site Branding - Edit';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = SchoolBranding::find($id)->first();
        return view('admin.site_branding.edit',$p);
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
            'school_name'   => 'required',
            'school_img'   => 'required|mimes:png,jpg,jpeg',
            'school_desc'   => 'required',
            'school_footer'  => 'required',
        ]);

        $newImageName = time().'-'.$request->school_name.'.'.$request->school_img->extension();
        
        $request->school_img->move(public_path('school_images'),$newImageName);

        SchoolBranding::where('id',$id)->update(
            [
            'school_name' => $request->input('school_name'),
            'school_desc' => $request->input('school_desc'),
            'school_footer' => $request->input('school_footer'),
            'school_img' => $newImageName,
        ]);

        return redirect('admin/site-branding');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
