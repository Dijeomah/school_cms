<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\SchoolBranding;
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
        $p['title'] = 'Admin::About';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = About::all();
        return view('admin.about_us.index',$p);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::About - Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.about_us.create');
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
            'about_title'   => 'required',
            'about_message'   => 'required',
        ]);

        About::create([
            'about_title' => $request->input('about_title'),
            'about_message' => $request->input('about_message'),
        ]);

        return redirect('admin/about');
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
        $p['title'] = 'Admin::About - Edit';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = About::find($id)->first();
        
        return view('admin.about_us.edit',$p);
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
            'about_title'   => 'required',
            'about_message'   => 'required',
        ]);
        
        About::where('id',$id)->update(
            [
                'about_title' => $request->input('about_title'),
            'about_message' => $request->input('about_message'),
        ]);

        return redirect('admin/about');

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
