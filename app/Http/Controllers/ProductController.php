<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kala;
use App\Models\Image;
use App\Models\Category;
use App\Models\Review;

class ProductController extends Controller
{
    public function product(){
        $data=array(
            'category'=>Category::all(),
            'product'=>Kala::with('Category')->get()
        );
        return view('products/products')->with($data);
    }
    public function productinfo($id){
        return view('products/productinfo');
    }
}


