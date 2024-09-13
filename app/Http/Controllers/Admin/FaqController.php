<?php

namespace App\Http\Controllers\Admin;

use App\Models\Faq;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Faq::all();
        return view('admin.faq.index',[
            'data'=>$data,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=new Faq();
        $data->answer = $request->answer;
        $data->question = $request->question;
        $data->status = $request->status;
        $data->save();
        return redirect()->route('admin.faq.create')->with('faq_added', 'Faq Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data=Faq::find($id);
        return view('admin.faq.show',[
            'data'=>$data,
            
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data=Faq::find($id);
        return view('admin.faq.edit',[
            'data'=>$data,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $data=Faq::find($id);
        $data->answer = $request->answer;
        $data->question = $request->question;
        $data->status = $request->status;
        $data->save();
        return redirect()->back()->with('faq_edited', 'Faq Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $data=Faq::find($id);
        $data->delete();
        return redirect()->back()->with('faq_deleted', 'Faq Deleted!');
    }
}
