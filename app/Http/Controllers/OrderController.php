<?php

namespace App\Http\Controllers;

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::with('product')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'BuyerName' => 'required',
            'CreateDate' => 'required|date',
            'ProductId' => 'required|exists:products,id',
            'ProductQuantity' => 'required|integer|min:1',
            'OrderStatus' => ['required', Rule::in(OrderStatusEnum::values())],
            'Description' => 'nullable',
        ]);
        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Заказ добавлен!');
    }

    public function show(Order $order)
    {
        $order->load('product');
        return view('orders.show', compact('order'));
    }
    public function edit(Order $order)
    {
        $products = Product::all();
        return view('orders.edit', compact('order', 'products'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'BuyerName' => 'required',
            'CreateDate' => 'required|date',
            'ProductId' => 'required|exists:products,id',
            'ProductQuantity' => 'required|integer|min:1',
            'OrderStatus' => ['required', Rule::in(OrderStatusEnum::values())],
            'Description' => 'nullable',
        ]);

        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Заказ обновлён!');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Заказ удалён!');
    }
}
