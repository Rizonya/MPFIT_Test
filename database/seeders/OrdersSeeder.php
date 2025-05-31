<?php
namespace Database\Seeders;

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all(); // возьмем первый товар

        Order::create([
            'BuyerName' => 'Иван Иванов',
            'CreateDate' => now()->toDateString(),
            'ProductId' => $products[0]->id,
            'ProductQuantity' => 2,
            'OrderStatus' => OrderStatusEnum::New->value,
            'Description' => 'Доставка завтра',
        ]);

        Order::create([
            'BuyerName' => 'Мария Смирнова',
            'CreateDate' => now()->subDays(1)->toDateString(),
            'ProductId' => $products[1]->id,
            'ProductQuantity' => 1,
            'OrderStatus' => OrderStatusEnum::New->value,
            'Description' => 'Самовывоз',
        ]);

        Order::create([
            'BuyerName' => 'Алексей Кузнецов',
            'CreateDate' => now()->subDays(2)->toDateString(),
            'ProductId' => $products[2]->id,
            'ProductQuantity' => 3,
            'OrderStatus' => OrderStatusEnum::New->value,
            'Description' => '',
        ]);
    }
}


