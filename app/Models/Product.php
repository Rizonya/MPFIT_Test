<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = ['ProductName', 'CategoryId', 'Description', 'Price'];

    public function getPriceRubAttribute()
    {
        return number_format($this->Price / 100, 2, ',', ' ');
    }

    public function setPriceRubAttribute($value)
    {
        $this->attributes['Price'] = (int) round($value * 100);
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'CategoryId');
    }

}
