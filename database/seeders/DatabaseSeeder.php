<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        \App\Models\User::create([
            'name' => 'Administrador',
            'email' => 'admin@teste.com',
            'tipo' => 0,
            'password' => Hash::make('12345678'),
        ]);
        \App\Models\User::create([
            'name' => 'Fulano',
            'email' => 'fulano@teste.com',
            'tipo' => 1,
            'password' => Hash::make('12345678'),
        ]);
    }
}
