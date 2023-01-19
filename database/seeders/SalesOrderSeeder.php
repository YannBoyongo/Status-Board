<?php

namespace Database\Seeders;

use App\Models\SalesOrder;
use Illuminate\Database\Seeder;

class SalesOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SalesOrder::create([
            'title' => "Sales Order 11",
            'status' => 'registered',
        ]);
        SalesOrder::create([
            'title' => "Sales Order 12",
            'status' => 'registered',
        ]);
        SalesOrder::create([
            'title' => "Sales Order 13",
            'status' => 'registered',
        ]);
        SalesOrder::create([
            'title' => "Sales Order 14",
            'status' => 'registered',
        ]);
        SalesOrder::create([
            'title' => "Sales Order 15",
            'status' => 'registered',
        ]);
        SalesOrder::create([
            'title' => "Sales Order 16",
            'status' => 'registered',
        ]);
        SalesOrder::create([
            'title' => "Sales Order 17",
            'status' => 'registered',
        ]);

    }
}
