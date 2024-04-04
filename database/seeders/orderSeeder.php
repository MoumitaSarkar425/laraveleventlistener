<?php

namespace Database\Seeders;
use App\Models\Order;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class orderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::create([
            'customerName' => 'John doe',
            'customerEmail' => 'john@gmail.com',
            'customerId' => 4,
            'orderId' => 1,
            'total' => 100,
            'productID' => 2,
            'orderStatus' => 0

        ]);
    }
}
