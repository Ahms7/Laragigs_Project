<?php

namespace Database\Seeders;

use App\Models\Listing;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void

    {
        Listing::factory(6)->create();
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'Laravel, java',
        //     'company' => 'Ahmstech',
        //     'location' => 'London',
        //     'email' => 'info@ahmstech.com',
        //     'website' => 'www.ahmstech7.com',
        //     'description' => 'Review your database schema to 
        //     ensure that unique constraints are correctly applied. 
        //     If you need to add or modify unique constraints, 
        //     you can do so using migrations.',
        // ]);

        // Listing::create([
        //     'title' => 'Graphic Designer',
        //     'tags' => 'Ai, PSD',
        //     'company' => 'AMHD',
        //     'location' => 'Ghana',
        //     'email' => 'info@ahmstech.com',
        //     'website' => 'www.ahmstech7.com',
        //     'description' => 'Review your database schema to 
        //     ensure that unique constraints are correctly applied. 
        //     If you need to add or modify unique constraints, 
        //     you can do so using migrations.',
        // ]);
    

    }
}
