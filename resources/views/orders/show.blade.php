@extends('layouts.app')

@section('title', 'Информация о заказе')

@section('content')
    <h1>Информация о заказе #{{ $order->id }}</h1>

    <table class="table table-bordered">
        <tr>
            <th>Номер заказа</th>
            <td>{{ $order->id }}</td>
        </tr>
        <tr>
            <th>Дата создания</th>
            <td>{{ $order->CreateDate }}</td>
        </tr>
        <tr>
            <th>Покупатель</th>
            <td>{{ $order->BuyerName }}</td>
        </tr>
        <tr>
            <th>Товар</th>
            <td>{{ $order->product->ProductName ?? '—' }}</td>
        </tr>
        <tr>
            <th>Количество</th>
            <td>{{ $order->ProductQuantity }}</td>
        </tr>
        <tr>
            <th>Статус</th>
            <td>{{ $order->OrderStatus }}</td>
        </tr>
        <tr>
            <th>Описание</th>
            <td>{{ $order->Description }}</td>
        </tr>
        <tr>
            <th>Цена за 1 шт.</th>
            <td>{{ number_format($order->product->Price / 100, 2, ',', ' ') }} ₽</td>
        </tr>
        <tr>
            <th>Итоговая цена</th>
            <td><strong>{{ $order->TotalPriceRub }} ₽</strong></td>
        </tr>
    </table>

    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Назад к списку</a>
    <a href="{{ route('orders.edit', $order) }}" class="btn btn-primary">Редактировать</a>
@endsection
