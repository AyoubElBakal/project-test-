<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::with('category')->paginate(9);
        return view('pages.products', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.add-product', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string|unique:products',
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }



    // public function show(Product $product)
    // {
    //     $products = Product::with('category')->paginate(9);
    //     return view('pages.products', compact('products'));
    // }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('pages.edit-product', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string',
            'slug' => 'required|string|unique:products,slug,' . $product->id,
            'stock' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
    
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }

}
