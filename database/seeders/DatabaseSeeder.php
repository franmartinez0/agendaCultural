<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'rol' => 'Admin',
            'dni' => '123456789A',
            'nombre' => 'Admin',
            'apellidos' => 'Admin',
            'edad' => '33',
            'direccion' => 'Calle falsa 123',
            'ciudad' => 'Almeria',
            'telefono' => '123456789',
            'puesto' => 'administrador',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);
    }
}
