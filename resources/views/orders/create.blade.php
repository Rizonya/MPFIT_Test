@extends('layouts.app')

@section('title', 'Создание заказа')

@section('content')
    <h1>Создание заказа</h1>
    @include('orders._form', ['order' => new App\Models\Order(), 'products' => $products])
@endsection
