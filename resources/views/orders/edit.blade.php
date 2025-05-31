@extends('layouts.app')

@section('title', 'Редактирование заказа')

@section('content')
    <h1>Редактирование заказа</h1>
    @include('orders._form', ['order' => $order, 'products' => $products])
@endsection
