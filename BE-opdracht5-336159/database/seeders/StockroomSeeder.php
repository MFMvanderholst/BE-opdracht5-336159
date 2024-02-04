<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stockroom;

class StockroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Filling Stockroom ...');

        Stockroom::create([ 
            "product_id" => 1, 
            "packaging_unit" => 5, 
            "number_present" => 453
        ]);

        Stockroom::create([ 
            "product_id" => 2, 
            "packaging_unit" => 2.5, 
            "number_present" => 400
        ]);

        Stockroom::create([ 
            "product_id" => 3, 
            "packaging_unit" => 5, 
            "number_present" => 1
        ]);

        Stockroom::create([ 
            "product_id" => 4, 
            "packaging_unit" => 1, 
            "number_present" => 800
        ]);

        Stockroom::create([ 
            "product_id" => 5, 
            "packaging_unit" => 3, 
            "number_present" => 234
        ]);

        Stockroom::create([ 
            "product_id" => 6, 
            "packaging_unit" => 2, 
            "number_present" => 345
        ]);

        Stockroom::create([ 
            "product_id" => 7, 
            "packaging_unit" => 1, 
            "number_present" => 795
        ]);

        Stockroom::create([ 
            "product_id" => 8, 
            "packaging_unit" => 10, 
            "number_present" => 233
        ]);

        Stockroom::create([ 
            "product_id" => 9, 
            "packaging_unit" => 2.5, 
            "number_present" => 123
        ]);

        Stockroom::create([ 
            "product_id" => 10, 
            "packaging_unit" => 3, 
            "number_present" => null
        ]);

        Stockroom::create([ 
            "product_id" => 11, 
            "packaging_unit" => 2, 
            "number_present" => 367
        ]);

        Stockroom::create([ 
            "product_id" => 12, 
            "packaging_unit" => 1, 
            "number_present" => 467
        ]);

        Stockroom::create([ 
            "product_id" => 13, 
            "packaging_unit" => 5, 
            "number_present" => 20
        ]);

        $this->command->info('Stockroom is filled');
    }
}
