<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $new=Message::where('status','=','New')->get();
        $old=Message::where('status','=','Old')->get();
        return view('admin.messages.index',[
            'new'=>$new,
            'old'=>$old,
            
        ]);
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
        $data=Message::find($id);
        $data->status = 'Old';
        $data->save();
        return view('admin.messages.show',[
            'data'=>$data,
            
            
        ]);
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
        $data=Message::find($id);
        $data->note = $request->note;
        $data->save();
        return redirect()->back()->with('note', 'your note added!');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
