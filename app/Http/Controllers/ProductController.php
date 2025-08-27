<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(request $request)
    {
        $product = new Product();
        $product->nameProd = $request->input('nameProd');
        $product->codeProd = $request->input('codeProd');
        $product->markProd = $request->input('markProd');
        $product->colorProd = $request->input('colorProd');
        $product->statusProd = $request->input('statusProd');
        $product->availabilityProd = $request->input('availabilityProd');
        $product->priceHourProd = $request->input('priceHourProd');
        $product->imgProd = $request->input('imgProd');
        $product->pesoKgProd = $request->input('pesoKgProd');
        $product->stockProd = $request->input('stockProd');
        $product->save();

        return redirect()->route('product.index');
    }

    public function edit(Product $product)
    {
        $product = Product::findOrFail($product);
        return view('product.edit', compact('product'));
    }
}