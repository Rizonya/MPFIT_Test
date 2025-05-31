<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'CategoryId' => 'required|exists:categories,id',
            'Description' => 'required',
            'PriceRub' => 'required|numeric|min:0',
        ]);


        $product = new Product();
        $product->ProductName = $request->input('ProductName');
        $product->CategoryId = $request->input('CategoryId');
        $product->Description = $request->input('Description');
        $product->PriceRub = $request->input('PriceRub');
        $product->save();


        return redirect()->route('products.index')->with('success', 'Товар добавлен!');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'ProductName' => 'required',
            'CategoryId' => 'required|exists:categories,id',
            'Description' => 'required',
            'PriceRub' => 'required|numeric|min:0',
        ]);

        $product->ProductName = $request->input('ProductName');
        $product->CategoryId = $request->input('CategoryId');
        $product->Description = $request->input('Description');
        $product->PriceRub = $request->input('PriceRub'); // Мутатор конвертирует в копейки
        $product->save();

        return redirect()->route('products.index')->with('success', 'Товар обновлён!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Товар удалён!');
    }
}

