<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;
use Illuminate\Support\Facades\Date;
class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::insert([
            ['name' => 'Technical', 'status' => 1 , 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'Leader Division', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()], 
            ['name' => 'Manager', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'PA',  'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'Comter', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => "Developer Be", 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'Developer Fe', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'HR', 'status' => 1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'IT Helpdesk', 'status' =>1, 'created_at' => Date::now(), 'updated_at' => Date::now()],
            ['name' => 'Staff', 'status' => 2, 'created_at' => Date::now(), 'updated_at' => Date::now()]
        ]);

    }
}
