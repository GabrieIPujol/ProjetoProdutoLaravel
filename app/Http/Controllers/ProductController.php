<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;

class ProductController extends Controller
{
    public function index(){
        return view('product.index', ['products' => Product::all()]);
    }

    public function create(){
        return view('product.create');
    }

    public function store(Request $request){
        $product = Product::create($request->all());
        ProductImage::create([
            'product_id' => $product->id,
            'url' => $request['img_01'],
            'order' => 0
        ]);

        ProductImage::create([
            'product_id' => $product->id,
            'url' => $request['img_02'],
            'order' => 1
        ]);

        ProductImage::create([
            'product_id' => $product->id,
            'url' => $request['img_03'],
            'order' => 2
        ]);
        $product->Tags()->sync($request['tags_id']);
        return redirect('/product');
    }

    public function show(Product $product){
        return view('product.show', ['product'=>$product]);
    }
}
