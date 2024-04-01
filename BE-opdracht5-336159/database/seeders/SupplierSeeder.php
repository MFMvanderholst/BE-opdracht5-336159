<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Filling Supplier ...');

        Supplier::create([ 
            "name" => "Venco", 
            "contact_person" => "Bert van Linge", 
            "supplier_number" => "L1029384719",
            "mobile" => "06-28493827",
            "contact_id" => 1
        ]);

        Supplier::create([ 
            "name" => "Astra Sweets", 
            "contact_person" => "Jasper del Monte", 
            "supplier_number" => "L1029284315",
            "mobile" => "06-39398734",
            "contact_id" => 2
        ]);

        Supplier::create([ 
            "name" => "Haribo", 
            "contact_person" => "Sven Stalman", 
            "supplier_number" => "L1029324748",
            "mobile" => "06-24383291",
            "contact_id" => 3
        ]);

        Supplier::create([ 
            "name" => "Basset", 
            "contact_person" => "Joyce Stelterberg", 
            "supplier_number" => "L1023845773",
            "mobile" => "06-48293823",
            "contact_id" => 4
        ]);

        Supplier::create([ 
            "name" => "De Bron", 
            "contact_person" => "Remco Veenstra", 
            "supplier_number" => "L1023857736",
            "mobile" => "06-34291234",
            "contact_id" => 5
        ]);

        Supplier::create([ 
            "name" => "Quality Street", 
            "contact_person" => "Johan Nooji", 
            "supplier_number" => "L1029234586",
            "mobile" => "06-23458456",
            "contact_id" => 6
        ]);

        $this->command->info('Supplier is filled');
    }
}
