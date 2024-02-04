<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product_per_supplier;

class Product_per_supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Filling Product_per_supplier ...');

        Product_per_supplier::create([ 
            "supplier_id" => 1, 
            "product_id" => 1, 
            "date_delivery" => "2023-04-09",
            "amount" => 23,
            "first_next_delivery" => "2023-04-16"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 1, 
            "product_id" => 1, 
            "date_delivery" => "2023-04-18",
            "amount" => 21,
            "first_next_delivery" => "2023-04-25"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 1, 
            "product_id" => 2, 
            "date_delivery" => "2023-04-09",
            "amount" => 12,
            "first_next_delivery" => "2023-04-16"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 1, 
            "product_id" => 3, 
            "date_delivery" => "2023-04-10",
            "amount" => 11,
            "first_next_delivery" => "2023-04-17"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 2, 
            "product_id" => 4, 
            "date_delivery" => "2023-04-14",
            "amount" => 16,
            "first_next_delivery" => "2023-04-21"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 2, 
            "product_id" => 4, 
            "date_delivery" => "2023-04-21",
            "amount" => 23,
            "first_next_delivery" => "2023-04-28"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 2, 
            "product_id" => 5, 
            "date_delivery" => "2023-04-14",
            "amount" => 45,
            "first_next_delivery" => "2023-04-21"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 2, 
            "product_id" => 6, 
            "date_delivery" => "2023-04-14",
            "amount" => 30,
            "first_next_delivery" => "2023-04-21"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 3, 
            "product_id" => 7, 
            "date_delivery" => "2023-04-12",
            "amount" => 12,
            "first_next_delivery" => "2023-04-19"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 3, 
            "product_id" => 7, 
            "date_delivery" => "2023-04-19 ",
            "amount" => 23,
            "first_next_delivery" => "2023-04-26"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 3, 
            "product_id" => 8, 
            "date_delivery" => "2023-04-10",
            "amount" => 12,
            "first_next_delivery" => "2023-04-17"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 3, 
            "product_id" => 9, 
            "date_delivery" => "2023-04-11 ",
            "amount" => 1,
            "first_next_delivery" => "2023-04-18"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 4, 
            "product_id" => 10, 
            "date_delivery" => "2023-04-16",
            "amount" => 24,
            "first_next_delivery" => "2023-04-30"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 5, 
            "product_id" => 11, 
            "date_delivery" => "2023-04-10 ",
            "amount" => 47,
            "first_next_delivery" => "2023-04-17"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 5, 
            "product_id" => 11, 
            "date_delivery" => "2023-04-19",
            "amount" => 60,
            "first_next_delivery" => "2023-04-26"
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 5, 
            "product_id" => 12, 
            "date_delivery" => "2023-04-11",
            "amount" => 45,
            "first_next_delivery" => null
        ]);

        Product_per_supplier::create([ 
            "supplier_id" => 5, 
            "product_id" => 13, 
            "date_delivery" => "2023-04-12",
            "amount" => 23,
            "first_next_delivery" => null
        ]);

        $this->command->info('Product_per_supplier is filled');
    }
}
