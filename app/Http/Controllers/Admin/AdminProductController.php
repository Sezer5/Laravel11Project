<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class AdminProductController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

     public static  function  getParentsTree($category,$title){
         if($category->parent_Id == 0){
             return $title;
         }
         $parent = Category::find($category->parent_Id);
         $title = $parent->title . ' > ' .$title;
         return  AdminProductController::getParentsTree($parent,$title);
     }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Product::all();
        return view("admin.product.index",[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data=Category::all();
        return view("admin.product.create",[
            'data' => $data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data=new Product();
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->minquantity = $request->minquantity;
        $data->tax = $request->tax;
        if($request->file('image')){
            $data->image=$request->file('image')->store('public/images');
        };
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data=Product::find($id);
        return view("admin.product.show",[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data=Product::find($id);
        $datalist=Category::all();
        return view("admin.product.edit ",[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=Product::find($id);
        $data->category_id = $request->category_id;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->quantity = $request->quantity;
        $data->minquantity = $request->minquantity;
        $data->tax = $request->tax;
        if($request->file('image')){
            $data->image=$request->file('image')->store('public/images');
        };
        $data->save();
        return redirect('admin/product');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=Product::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/product');
    }
}
