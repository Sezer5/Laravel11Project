<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //echo "Index Function!";
        $sliderdata_active=Product::limit(1)->get();
        $sliderdata=Product::skip(1)->take(3)->get();;
        return view('home.index',[
            'sliderdata_active'=>$sliderdata_active,
            'sliderdata'=>$sliderdata,
        ]);
    }

    public function test()
    {
        //
        return view('home.test');
    }

    public function param($id,$id2)
    {
        //
        //echo "parameter 1 is:",$id;
        //echo "<br>";
        //echo "parameter 2 is:",$id2;
        return view('home.test2',[
            'id'=>$id,
            'id2'=>$id2
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
}
