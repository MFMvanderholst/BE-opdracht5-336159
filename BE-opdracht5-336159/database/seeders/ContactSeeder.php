<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->command->info('Filling Contacts ...');

        Contact::create([ 
            "street" => "Van Gilslaan", 
            "streetnumber" => 34, 
            "zip" => "1045CB",
            "city" => "Hilvarenbeek",
        ]);

        Contact::create([ 
            "street" => "Den Dolderpad", 
            "streetnumber" => 2, 
            "zip" => "1067RC",
            "city" => "Utrecht",
        ]);

        Contact::create([ 
            "street" => "Fredo Raalteweg", 
            "streetnumber" => 257, 
            "zip" => "1236OP",
            "city" => "Nijmegen",
        ]);

        Contact::create([ 
            "street" => "bertrand Russellhof", 
            "streetnumber" => 21, 
            "zip" => "2034AP",
            "city" => "Den Haag",
        ]);

        Contact::create([ 
            "street" => "Leon van Bonstraat", 
            "streetnumber" => 213, 
            "zip" => "145XC",
            "city" => "Lunteren",
        ]);

        Contact::create([ 
            "street" => "Bea van lingenlaan", 
            "streetnumber" => 234, 
            "zip" => "2197FG",
            "city" => "Sint Pancras",
        ]);

        $this->command->info('Contacts is filled');
    }
}
