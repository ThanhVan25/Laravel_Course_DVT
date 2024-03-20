<?php

namespace Database\Seeders;
use App\Models\Car;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('cars')->insert([
        //     'description' => Str::random(30),
        //     'model' => Str::random(10),
        //     'produced_on' => Carbon::parse("01-01-2024"),
        //     'image' => 'car'. rand(1,4) . '.jpg',
        // ]);
    
    Car::factory()->count(50)->create();
    
    
    }  
}
