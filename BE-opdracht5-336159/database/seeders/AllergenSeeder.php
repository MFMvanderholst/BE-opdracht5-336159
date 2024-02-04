<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Allergen;

class AllergenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Filling Allergen ...');

        Allergen::create([ 
            "name" => "Gluten", 
            "Description" => "Dit product bevat gluten", 
            
        ]);

        Allergen::create([ 
            "name" => "Gelatine", 
            "Description" => "Dit product bevat gelatine", 
        ]);

        Allergen::create([ 
            "name" => "AZO-Kleurstof", 
            "Description" => "Dit product bevat AZO-kleurstoffen", 
                   ]);

        Allergen::create([ 
            "name" => "Lactose", 
            "Description" => "Dit product bevat lactose", 
        ]);

        Allergen::create([ 
            "name" => "Soja", 
            "Description" => "Dit product bevat soja", 
        ]);

        $this->command->info('Allergen is filled');
    }
}
