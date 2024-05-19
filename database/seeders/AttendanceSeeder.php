<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attendance;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // check atten for 2 -10 check 
        Attendance::insert([
            ['user_id' => 2, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()],
            ['user_id' => 3, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()],
            ['user_id' => 4, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()],
            ['user_id' => 5, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()],
            ['user_id' => 6, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()],
            ['user_id' => 7, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()],
            ['user_id' => 8, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()],
            ['user_id' => 9, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()],
            ['user_id' => 10, 'check_date'=> now(), 'created_at' => now(), 'updated_at' => now(),'deleted_at' => now()]
        ]);
    }
}
