@extends('layouts.app')

@section('title', 'Добавить товар')

@section('content')
    <h1>Добавить товар</h1>
    {{ $categories }}
    @include('products._form', ['product' => new \App\Models\Product(), 'categories'=>$categories])
@endsection
