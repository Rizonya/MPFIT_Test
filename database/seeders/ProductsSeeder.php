<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        Product::create([
            'ProductName' => 'Паралон',
            'CategoryId' => $categories[0]->id,
            'Description' => 'Наполнитель для мягких игрушек',
            'Price' => 9999,
        ]);

        Product::create([
            'ProductName' => 'Хрустальная ваза',
            'CategoryId' => $categories[1]->id,
            'Description' => 'Хрупкий товар, аккуратное обращение',
            'Price' => 149999,
        ]);

        Product::create([
            'ProductName' => 'Гантеля',
            'CategoryId' => $categories[2]->id,
            'Description' => 'Тяжелый спортивный инвентарь',
            'Price' => 199999,
        ]);
    }
}
