<?php

namespace Database\Seeders;

use App\Models\Proyectos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Proyectos::factory()->count(20)->create();
    }
}
