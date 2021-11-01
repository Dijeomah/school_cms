<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Introduction;
use App\Models\SchoolBranding;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p['title'] = 'Admin::Introduction';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Introduction::all();
        return view('admin.introduction.index',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::Introduction Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.introduction.create',$p);
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
            'intro_title'   => 'required',
            'intro_img'   => 'required|mimes:png,jpg,jpeg',
            'intro_msg'   => 'required',
        ]);

        $newImageName = time().'-'.$request->intro_title.'.'.$request->intro_img->extension();
        
        $request->intro_img->move(public_path('intro_images'),$newImageName);


        Introduction::create([
            'intro_title' => $request->input('intro_title'),
            'intro_msg' => $request->input('intro_msg'),
            'intro_img' => $newImageName,
        ]);

        return redirect('admin/introduction');
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
        $p['title'] = 'Admin::Introduction - Edit';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Introduction::find($id)->first();
        return view('admin.introduction.edit',$p);
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
            'intro_title'   => 'required',
            'intro_img'   => 'required|mimes:png,jpg,jpeg',
            'intro_msg'   => 'required',
        ]);

        $newImageName = time().'-'.$request->intro_title.'.'.$request->intro_img->extension();
        
        $request->intro_img->move(public_path('intro_images'),$newImageName);

        Introduction::where('id',$id)->update(
            [
            'intro_title' => $request->input('intro_title'),
            'intro_msg' => $request->input('intro_msg'),
            'intro_img' => $newImageName,
        ]);

        return redirect('admin/introduction');

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