<form method="POST" action="{{ $product->exists ? route('products.update', $product) : route('products.store') }}">
    @csrf
    @if($product->exists)
        @method('PUT')
    @endif

    <div class="mb-3">
        <label>Название</label>
        <input name="ProductName" class="form-control" value="{{ old('ProductName', $product->ProductName) }}">
    </div>

    <div class="mb-3">
        <label>Категория</label>
        <select name="CategoryId" class="form-select">
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}" @selected(old('CategoryId', $product->CategoryId) == $cat->id)>
                    {{ $cat->Name }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Описание</label>
        <textarea name="Description" class="form-control">{{ old('Description', $product->Description) }}</textarea>
    </div>

    <div class="mb-3">
        <label>Цена (₽)</label>
        <input type="number" step="0.01" name="PriceRub"
               value="{{ old('PriceRub', $product->PriceRub ?? '0.00') }}" class="form-control">
    </div>

    <button class="btn btn-success">{{ $product->exists ? 'Обновить' : 'Добавить' }}</button>
</form>
