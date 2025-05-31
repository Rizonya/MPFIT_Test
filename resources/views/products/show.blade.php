@extends('layouts.app')

@section('title', $product->ProductName)

@section('content')
    <h1>{{ $product->ProductName }}</h1>
    <p><strong>Категория:</strong> {{ $product->category->Name ?? '—' }}</p>
    <p><strong>Описание:</strong> {{ $product->Description }}</p>
    <p><strong>Цена:</strong> {{ $product->PriceRub }} ₽</p>

    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning">Редактировать</a>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Назад</a>
@endsection
