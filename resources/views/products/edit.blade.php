@extends('layouts.app')

@section('title', 'Редактировать товар')

@section('content')
    <h1>Редактировать товар</h1>
    @include('products._form', ['product' => $product, 'categories'=>$categories])
@endsection
