<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert(['nombre' => 'Comida']);
        DB::table('categorias')->insert(['nombre' => 'Viaje']);
        DB::table('categorias')->insert(['nombre' => 'Musica']);
        DB::table('categorias')->insert(['nombre' => 'Teatro']);
        DB::table('categorias')->insert(['nombre' => 'Deporte']);
        DB::table('categorias')->insert(['nombre' => 'Ocio']);
        DB::table('categorias')->insert(['nombre' => 'Tecnologia']);
    }
}
