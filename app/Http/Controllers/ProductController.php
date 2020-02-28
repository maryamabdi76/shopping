<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kala;
use App\Models\Category;
use App\Models\Review;
use App\Models\Tags;
use App\Models\Images;
use App\Models\Users;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('Role');
    }
    public function product()
    {
        $product = Kala::with('Category')->get();
        $data = array(
            'category' => Category::all(),
            'tag' => Tags::all(),
            'product' => $product,
            'catid' => 0,
            'tagid' => 0,
        );
        return view('products/products')->with($data);
    }


    public function productinfo($id)
    {
        $product = Kala::findOrFail($id);
        $reviews = Review::where('kalaid', $product->id)->orderBy('created_at')->get();
        $data = array(
            'product' => $product,
            'reviews' => $reviews
        );
        return view('products/productinfo')->with($data);
    }


    public function filterCategory($id)
    {
        if ($id == 0) {
            $product = Kala::with('Category')->get();
            $catid = 0;
        } else {
            $category = Category::findOrFail($id);
            $product = Kala::where('categoryid', $category->id)->get();
            $catid = $id;
        }
        $data = array(
            'product' => $product,
            'category' => Category::all(),
            'tag' => Tags::all(),
            'catid' => $catid,
            'tagid' => 0
        );
        return view('products/products')->with($data);
    }


    public function filterTag($id)
    {
        if ($id == 0) {
            $tags = Tags::all();
            $tagid = 0;
            $product = Kala::with('Category')->get();
        } else {
            $tags = Tags::findOrFail($id);
            $product = $tags->Kala;
            $tagid = $id;
        }
        $data = array(
            'product' => $product,
            'category' => Category::all(),
            'tag' => Tags::all(),
            'catid' => 0,
            'tagid' => $tagid
        );

        return view('products/products')->with($data);
    }
}
