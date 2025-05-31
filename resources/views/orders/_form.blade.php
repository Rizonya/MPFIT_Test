<form method="POST" action="{{ $order->exists ? route('orders.update', $order) : route('orders.store') }}">
    @csrf
    @if($order->exists)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label>ФИО покупателя</label>
        <input name="BuyerName" class="form-control" required value="{{ old('BuyerName', $order->BuyerName) }}">
    </div>

    <div class="mb-3">
        <label>Дата создания</label>
        <input type="date" name="CreateDate" required class="form-control" value="{{ old('CreateDate', $order->CreateDate) }}">
    </div>

    <div class="mb-3">
        <label>Товар</label>
        <select name="ProductId" required class="form-select">
            @foreach($products as $product)
                <option value="{{ $product->id }}" @selected(old('ProductId', $order->ProductId) == $product->id)>
                    {{ $product->ProductName }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Количество</label>
        <input type="number" name="ProductQuantity" required min="1" class="form-control" value="{{ old('ProductQuantity', $order->ProductQuantity) }}">
    </div>

    <div class="mb-3">
        <label>Статус</label>
        <select name="OrderStatus" required class="form-select">
            @foreach(\App\Enums\OrderStatusEnum::cases() as $status)
                <option value="{{ $status->value }}"
                    @selected(old('OrderStatus', $order->OrderStatus ?? '') === $status->value)>
                    {{ $status->label() }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Описание</label>
        <textarea name="Description" class="form-control">{{ old('Description', $order->Description) }}</textarea>
    </div>

    <button class="btn btn-success">{{ $order->exists ? 'Обновить' : 'Создать' }} заказ</button>
</form>
