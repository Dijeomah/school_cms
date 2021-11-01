<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admission;
use App\Models\SchoolBranding;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p['title'] = 'Admin::Admission';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Admission::all();
        return view('admin.admission.index',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::Admission - Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.admission.create',$p);
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
            'admission_title'   => 'required',
            'admission_text'   => 'required',
        ]);

        Admission::create([
            'admission_title' => $request->input('admission_title'),
            'admission_text' => $request->input('admission_text'),
        ]);

        // return redirect('admin/admission');
        return redirect()->route('admission.index');
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
        $p['title'] = 'Admin::Admission - Edit';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Admission::find($id)->first();
        return view('admin.admission.edit',$p);
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
            'admission_title'   => 'required',
            'admission_text'   => 'required',
        ]);

        Admission::where('id',$id)->update(
            [
            'admission_title' => $request->input('admission_title'),
            'admission_text' => $request->input('admission_text'),
        ]);

        // return redirect('admin/admission');
        return redirect()->route('admission.index');

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
