<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => '663380633-4',
        //     'email' => 'kai@gmail.com',
        //     'password' =>Hash::make ('wordpass'),
        // ]);
        
        $this->call([
            ProductTypesTableSeeder::class,
            ProductsTableSeeder::class,
        ]);
    }
}
