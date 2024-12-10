<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computer;

class ComputerSeeder extends Seeder
{
    public function run()
    {
        Computer::factory()->count(20)->create(); // Generar 20 computadoras.
    }
}
