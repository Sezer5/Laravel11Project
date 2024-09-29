<?php

namespace App\Http\Controllers\Admin;

use App\Models\Settings;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function setting()
    {
        //
        
        $data=Settings::first();
        if($data===null){
            $data=new Settings();
            $data->title='Project Title';
            $data->save();
            $data=Settings::first();
        }

        return view("admin.setting ",[
            'data' => $data,
        ]);
    }

    public function setting_update(Request $request, string $id)
    {
        $data=Settings::find($id);
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->company = $request->company;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->contact = $request->contact;
        $data->aboutus = $request->aboutus;
        $data->status = $request->status;
        if($request->file('icon')){
            $data->icon=$request->file('icon')->store('public/images');
        };
        $data->save();
        return redirect('admin/setting');
    }
}
