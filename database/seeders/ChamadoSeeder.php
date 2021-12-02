<?php

namespace Database\Seeders;

use App\Models\Chamado;
use Illuminate\Database\Seeder;

class ChamadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chamado::factory()->times(10)->create();
    }
}
