<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Request;

class Controller extends BaseController
{

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
//dd(\request('category'));
        $category=Category::all();

        $product = Product::filter(request(['search','category']))->get();
//        dd($product);
        return view('view.index',[
            'products'=>$product,
            'categories'=>$category
        ]);
    }
}
