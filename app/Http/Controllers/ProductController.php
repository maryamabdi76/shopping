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
            'review'=>Kala::findOrFail($id)->Review()->with('Users'),
        );
        // $data = Kala::find($id);
        // Get all reviews that are not spam for the product and paginate them
        // $reviews = $product->reviews()->with('user')->approved()->notSpam()->orderBy('created_at','desc')->paginate(100);

        return view('products/productinfo')->with($data);
    }
}


