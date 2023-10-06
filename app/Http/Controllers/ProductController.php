<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10',
            'price' => 'required|numeric',
            'size' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
        ]);

        $validatedData['name'] = htmlspecialchars($validatedData['name']);
        $validatedData['code'] = htmlspecialchars($validatedData['code']);
        $validatedData['size'] = htmlspecialchars($validatedData['size']);
        $validatedData['color'] = htmlspecialchars($validatedData['color']);    

        $product = Product::create($validatedData);

        return redirect('/products')->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10',
            'price' => 'required|numeric',
            'size' => 'nullable|string|max:255',
            'color' => 'nullable|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update($validatedData);

        return redirect('/products')->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/products')->with('success', 'Product deleted successfully');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $products = Product::where(function($query) use ($keyword) {
            $query->whereRaw('lower(name) like ?', ["%".strtolower($keyword)."%"])
                ->orWhere('code', 'like', "%$keyword%")
                ->orWhere('size', 'like', "%$keyword%")
                ->orWhere('color', 'like', "%$keyword%");
        })->get();

        return view('products.search', compact('products', 'keyword'));
    }

}

