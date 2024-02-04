<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product_per_allergen;

class Product_per_allergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Filling Product_per_allergen ...');

        Product_per_allergen::create([ 
            "product_id" => 1, 
            "allergen_id" => 2, 
            
        ]);

        Product_per_allergen::create([ 
            "product_id" => 1, 
            "allergen_id" => 1, 
        ]);

        Product_per_allergen::create([ 
            "product_id" => 1, 
            "allergen_id" => 3, 
                   ]);

        Product_per_allergen::create([ 
            "product_id" => 3, 
            "allergen_id" => 4, 
        ]);

        Product_per_allergen::create([ 
            "product_id" => 6, 
            "allergen_id" => 5, 
        ]);

        Product_per_allergen::create([ 
            "product_id" => 9, 
            "allergen_id" => 2, 
        ]);

        Product_per_allergen::create([ 
            "product_id" => 9, 
            "allergen_id" => 5, 
        ]);

        Product_per_allergen::create([ 
            "product_id" => 10, 
            "allergen_id" => 2, 
        ]);

        Product_per_allergen::create([ 
            "product_id" => 12, 
            "allergen_id" => 4, 
        ]);

        Product_per_allergen::create([ 
            "product_id" => 13, 
            "allergen_id" => 1, 
        ]);

        Product_per_allergen::create([ 
            "product_id" => 13, 
            "allergen_id" => 4, 
            
        ]);

        Product_per_allergen::create([ 
            "product_id" => 13, 
            "allergen_id" => 5, 
        ]);

        $this->command->info('Product_per_allergen is filled');
    }
}
