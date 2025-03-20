<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("AfficherProduct",["products"=>Product::paginate(4)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("ProductForm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        // dd($request->all());
        // $product = new Product();
        // $product->name = $request->product_name;
        // $product->label = $request->product_label;
        // $product->price = $request->product_price;
        // $product->save();

        // $formFields = $request->validate([
        //     "product_name" => "required",
        //     "product_label" => "required",
        //     "product_price" => "required|integer",
        // ],[
        //     "product_name.required" => "Name darori a sahbi",
        //     "product_label.required" => "Label darori a sahbi",
        //     "product_price.required" => "Price darori a sahbi",
        // ]);
        $formFields['product_name'] = Hash::make($request->product_name);
        // dd($formFields);
        Product::create([
            'name' => $request->product_name,
            'label' => $request->product_label,
            'price' => $request->product_price,
        ]);
        return Redirect::route("product.index")->with("success","Product Added Successfuly");
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        // $product = Product::find($product);
        return view("AfficherOneProduct",compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return Redirect::route("product.index")->with("success","Product Deleted Successfuly");
    }
}
