<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    public function show(Product $product)
    {
        return response()->json($product, 200);
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'sku' => $request->get('sku'),
            'name' => $request->get('name'),
            'price' => $request->get('price'),
        ]);
        return response()->json($product, 201);
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 202);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json([], 204);
    }
}
