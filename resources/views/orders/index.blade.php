@extends('layouts.app')

@section('title', 'Список заказов')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3" >
        <h1>Список заказов</h1>
        <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3">Добавить заказ</a>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Дата</th>
            <th>Покупатель</th>
            <th>Статус</th>
            <th>Сумма</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td><a href="{{route('orders.show', $order)}}">{{ $order->id }}</a> </td>
                <td>{{ $order->CreateDate }}</td>
                <td>{{ $order->BuyerName }}</td>
                <td>{{ $order->OrderStatus }}</td>
                <td>{{ $order->TotalPriceRub }} ₽</td>
                <td>
                    <a href="{{ route('orders.edit', $order) }}" class="btn btn-sm btn-primary">Редактировать️</a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Удалить?')">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
