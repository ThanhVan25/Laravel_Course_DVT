<?php

namespace Database\Seeders;

use App\Models\Mf;
use Illuminate\Database\Seeder;

class MfSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mf::factory()->count(50)->create();
    }
}
