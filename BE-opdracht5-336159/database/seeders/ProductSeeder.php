<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Filling Product ...');

        Product::create([ 
            "name" => "Mintnopjes", 
            "barcode" => 8719587231278, 
            
        ]);

        Product::create([ 
            "name" => "Schoolkrijt", 
            "barcode" => 8719587326713, 
        ]);

        Product::create([ 
            "name" => "Honingdrop", 
            "barcode" => 8719587327836, 
                   ]);

        Product::create([ 
            "name" => "Zure Beren", 
            "barcode" => 8719587321441, 
        ]);

        Product::create([ 
            "name" => "Cola Flesjes", 
            "barcode" => 8719587321237, 
        ]);

        Product::create([ 
            "name" => "Turtles", 
            "barcode" => 8719587322245, 
        ]);

        Product::create([ 
            "name" => "Witte Muizen", 
            "barcode" => 8719587328256, 
        ]);

        Product::create([ 
            "name" => "Reuzen Slangen", 
            "barcode" => 8719587325641, 
        ]);

        Product::create([ 
            "name" => "Zoute Rijen", 
            "barcode" => 8719587322739, 
        ]);

        Product::create([ 
            "name" => "Winegums", 
            "barcode" => 8719587327527, 
        ]);

        Product::create([ 
            "name" => "Drop Munten", 
            "barcode" => 8719587322345, 
            
        ]);

        Product::create([ 
            "name" => "Kruis Drop", 
            "barcode" => 8719587322265, 
        ]);

        Product::create([ 
            "name" => "Zoute Ruitjes", 
            "barcode" => 8719587323256, 
        ]);

        $this->command->info('Product is filled');
    }
}
