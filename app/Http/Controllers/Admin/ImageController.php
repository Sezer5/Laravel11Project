<?php

namespace App\Http\Controllers\Admin;

use App\Models\Image;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request,string $id)
    {
        //
        $data=new Image();
        $data->title = $request->title;
        $data->product_id = $id;
        if($request->file('image')){
            $data->image=$request->file('image')->store('public/images');
        };
        $data->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $images = Image::where('product_id',$id)->get();

        return view('admin.product.image', ['images' => $images,'product_id'=>$id]);
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
        $data=Image::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect()->back();
    }
}
