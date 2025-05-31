<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    public $timestamps = false;
    protected $fillable = [
        'BuyerName',
        'CreateDate',
        'ProductId',
        'ProductQuantity',
        'OrderStatus',
        'Description',
    ];

    protected $primaryKey = 'id';

    public function product(){
        return $this->belongsTo(Product::class, 'ProductId');
    }

    public function getTotalPriceRubAttribute()
    {
        return number_format(($this->ProductQuantity * $this->product->Price) / 100, 2, ',', ' ');
    }
    protected $casts = [
        'OrderStatus' => \App\Enums\OrderStatusEnum::class,
    ];

}
