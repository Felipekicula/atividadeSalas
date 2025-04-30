<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sala;

class SalaSeeder extends Seeder
{
    public function run(): void
    {
        Sala::create([
            'nome' => 'Sala de Reunião 1',
            'capacidade' => 10,
        ]);

        Sala::create([
            'nome' => 'Sala de Reunião 2',
            'capacidade' => 20,
        ]);

        Sala::create([
            'nome' => 'Sala de Reunião 3',
            'capacidade' => 5,
        ]);
    }
}