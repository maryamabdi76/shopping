<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kala;
use App\Models\Image;
use App\Models\Category;
use App\Models\Review;
use App\Models\Users;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('Role');
    }
    public function product(){
        $data=array(
            'category'=>Category::all(),
            'product'=>Kala::with('Category')->get()
        );
        return view('products/products')->with($data);
    }
    public function productinfo($id){
        $data=array(
            'product'=>Kala::findOrFail($id),
            // 'review'=>Review::all(),
            // 'review'=>Kala::findOrFail($id)->Review()->get(),
        );
        $product=Kala::findOrFail($id);
        return view('products/productinfo')->with('product',$product);
    }
}


