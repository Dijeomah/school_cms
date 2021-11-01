<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SchoolBranding;
use App\Models\Teachers;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p['title'] = 'Admin::Teachers';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Teachers::all();
        return view('admin.teachers.index',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::Teachers - Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.teachers.create',$p);
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
            'teacher_name'   => 'required',
            'teacher_position'   => 'required',
            'teacher_img'   => 'required|mimes:png,jpg,jpeg',
        ]);

        $newImageName = time().'-'.$request->teacher_name.'.'.$request->teacher_img->extension();
        
        $request->teacher_img->move(public_path('teacher_images'),$newImageName);


        Teachers::create([
            'teacher_name' => $request->input('teacher_name'),
            'teacher_position' => $request->input('teacher_position'),
            'teacher_img' => $newImageName,
        ]);

        return redirect('admin/teachers');
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
        $p['title'] = 'Admin::Teachers - Edit';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Teachers::find($id);
        return view('admin.teachers.edit',$p);
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
            'teacher_name'   => 'required',
            'teacher_position'   => 'required',
            'teacher_img'   => 'required|mimes:png,jpg,jpeg',
        ]);

        $newImageName = time().'-'.$request->teacher_name.'.'.$request->teacher_img->extension();
        
        $request->teacher_img->move(public_path('teacher_images'),$newImageName);

        Teachers::where('id',$id)->update(
            [
            'teacher_name' => $request->input('teacher_name'),
            'teacher_position' => $request->input('teacher_position'),
            'teacher_img' => $newImageName,
        ]);

        return redirect('admin/teachers');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teachers::find($id);

        $teacher->delete();

        return redirect('admin/teachers');
    }
}
