<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Division;
use Illuminate\Support\Facades\Date;
class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Division::insert([
            ['name' => 'Hades', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'Warrior', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'Phoenix', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'Faderless',  'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'HR', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => "BO", 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'BOD', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'PQA' , 'status'=> 2, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => "SWAT", 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'PRIME', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()]
        ]);
    }
}
