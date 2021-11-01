<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Events;
use App\Models\SchoolBranding;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $p['title'] = 'Admin::Events';
        $p['site_branding']= SchoolBranding::all();
        $p['data'] = Events::all();
        return view('admin.event.index',$p);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $p['title'] = 'Admin::Events - Create';
        $p['site_branding']= SchoolBranding::all();
        return view('admin.event.create',$p);
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
            'event_title'   => 'required',
            'event_time'   => 'required',
            'event_date'   => 'required',
            'event_location'   => 'required',
            'event_detail'   => 'required',
        ]);

        Events::create([
            'event_title' => $request->input('event_title'),
            'event_time' => $request->input('event_time'),
            'event_date' => $request->input('event_date'),
            'event_location' => $request->input('event_location'),
            'event_detail' => $request->input('event_detail'),
        ]);

        return redirect('admin/events');
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
        $p['title'] = 'Admin::Events - Edit';
        $p['data'] = Events::find($id);
        $p['site_branding']= SchoolBranding::all();
        return view('admin.event.edit',$p);
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
            'event_title'   => 'required',
            'event_time'   => 'required',
            'event_date'   => 'required',
            'event_location'   => 'required',
            'event_detail'   => 'required',
        ]);

        Events::where('id',$id)->update(
            [
                'event_title' => $request->input('event_title'),
                'event_time' => $request->input('event_time'),
                'event_date' => $request->input('event_date'),
                'event_location' => $request->input('event_location'),
                'event_detail' => $request->input('event_detail'),
        ]);

        return redirect('admin/events');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Events::find($id);

        $events->delete();

        return redirect('admin/events');
    }
}
