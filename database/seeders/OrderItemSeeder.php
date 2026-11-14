<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;


class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders=Order::all();
        $products=Product::all();

        foreach ($orders as $order){

        $orderProducts =$products->random(3);

        foreach ($orderProducts as $orderProduct){
            OrderItem::factory()->for($order, 'order')->for($orderProduct, 'product')
            ->create([ 'product_name' => $orderProduct->name,'price' => $orderProduct->price,
    ]);


        }



        }

    }
}
