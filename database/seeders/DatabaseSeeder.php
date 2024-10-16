<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();

        \App\Models\Listing::factory(6)->create();

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Cagayan De Oro',
        //     'email' => 'email1@email.com',
        //     'website' => 'http://www.acme.com',
        //     'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, reiciendis? Iste reiciendis rem consequatur quis rerum dolores vitae quas architecto.'
        // ]);

        // Listing::create([
        //     'title' => 'Full Stack Developer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'At Home',
        //     'location' => 'Cebu City',
        //     'email' => 'email2@email.com',
        //     'website' => 'http://www.athome.com',
        //     'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, reiciendis? Iste reiciendis rem consequatur quis rerum dolores vitae quas architecto.'
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
