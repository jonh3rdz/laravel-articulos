<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Articulo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->create([
            'email' => 'jonh@admin.com',
            'password' => bcrypt('123456')
        ]);

        Articulo::factory(30)->create();
    }
}
