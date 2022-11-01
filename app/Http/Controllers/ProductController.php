<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use App\Utils\UploadImage;
use Illuminate\Http\Request;
use mysql_xdevapi\Expression;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $product = Product::all();
        return view('products.index', compact('product'));
    }


    public function create()
    {
        $product = Product::all();
        $client = Client::all();
//        dd($client);
        $category = Category::all();
        return view('products.create', compact('product', 'client', 'category'));
    }


    public function store(ProductRequest $request)
    {
//       dd($request->image);
        if (isset($request['image'])) {
            $request['image'] = UploadImage::uploadImage($request['image'], 100, 100, 'imagesProduct/');
        }
        Product::create($request->post());
        return redirect()->route('products.index')->with('success', 'Successfully added');
    }


    public function show($id)
    {
        $product = Product::find($id);
        return view('products.delete', compact('product'));
    }


    public function edit($id)
    {
        $product = Product::find($id);
        $client = Client::all();
        $category = Category::all();
        return view('products.edit', compact('product', 'client', 'category'));
    }


    public function update(ProductRequest $request,$id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->validated());
        if (isset($request['image'])) {
            $product->image = UploadImage::uploadImage($request['image'], 100, 100, 'imagesProduct/');
        }
        $product->update();
        return redirect()->route('products.index')->with('success', 'Successfully updated');
    }


    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Successfully deleted');
    }
}
