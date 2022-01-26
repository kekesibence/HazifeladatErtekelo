<?php

namespace Database\Seeders;

use App\Models\Hazifeladat;
use Illuminate\Database\Seeder;

class HazifeladatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hazifeladat::factory(10)->create();
    }
}
