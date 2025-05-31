@extends('layouts.app')

@section('title', 'Список товаров')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Товары</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Добавить товар</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Название</th>
            <th>Цена</th>
            <th>Категория</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td><a href="{{ route('products.show', $product) }}">{{ $product->ProductName }}</a></td>
                <td>{{ $product->PriceRub }} ₽</td>
                <td>{{ $product->category->Name ?? '—' }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Редактировать</a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline"
                          onsubmit="return confirm('Удалить товар?')">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
