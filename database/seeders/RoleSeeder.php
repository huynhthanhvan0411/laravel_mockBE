<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Facades\Date;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            ['name' => 'Admin','created_at' => Date::now(), 'updated_at' => Date :: now(), 'deleted_at' => Date::now()],
            ['name' => 'Employee','created_at' => Date::now(), 'updated_at' => Date::now(), 'deleted_at'=> Date::now()],
        ]);
    }
}
