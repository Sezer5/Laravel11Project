<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Category;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public static function maincategorylist(){

        return Category::where('parent_id','=',0)->with('children')->get();

    }

    public function index()
    {
        //
        //echo "Index Function!";
        $sliderdata_active=Product::limit(1)->get();
        $sliderdata=Product::skip(1)->take(3)->get();
        $products=Product::all();
        $settings=Settings::first();
        return view('home.index',[
            'sliderdata_active'=>$sliderdata_active,
            'sliderdata'=>$sliderdata,
            'products'=>$products,
            'settings'=>$settings,
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

    public function product($id)
    {
        //
        //echo "Index Function!";
        $product=Product::find($id);
        $images = Image::where('product_id',$id)->get();
        return view('home.product',[
            'product'=>$product,
            'images'=>$images,
        ]);
    }

    public function categoryproducts($id)
    {
        //
        $sliderdata_active=Product::limit(1)->get();
        $sliderdata=Product::skip(1)->take(3)->get();
        $category=Category::find($id);
        $products = DB::table('products')->where('category_id',$id)->get();
        return view('home.categoryproducts',[
            'category'=>$category,
            'products'=>$products,
            'sliderdata_active'=>$sliderdata_active,
            'sliderdata'=>$sliderdata,
        ]);
    }

    public function contact()
    {
        //
        //echo "Index Function!";
        $sliderdata_active=Product::limit(1)->get();
        $sliderdata=Product::skip(1)->take(3)->get();
        $products=Product::all();
        $settings=Settings::first();
        return view('home.contact',[
            'sliderdata_active'=>$sliderdata_active,
            'sliderdata'=>$sliderdata,
            'products'=>$products,
            'settings'=>$settings,
        ]);
    }

    public function aboutus()
    {
        //
        //echo "Index Function!";
        $sliderdata_active=Product::limit(1)->get();
        $sliderdata=Product::skip(1)->take(3)->get();
        $products=Product::all();
        $settings=Settings::first();
        return view('home.aboutus',[
            'sliderdata_active'=>$sliderdata_active,
            'sliderdata'=>$sliderdata,
            'products'=>$products,
            'settings'=>$settings,
        ]);
    }

    public function storemessage(Request $request){
        // dd($request); Post edilen verileri göstermek için kullanılır.
        $data=new Message();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->subject = $request->subject;
        $data->message = $request->message;
        $data->Ip = $request->ip();
        
        $data->save();
        return redirect()->route('contact')->with('success', 'Message Sended!');   
    }
}
