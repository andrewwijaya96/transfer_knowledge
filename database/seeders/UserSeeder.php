<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ABC',
                'division_id' => 1
            ],
            [
                'name' => 'CDE',
                'division_id' => 2
            ],
            [
                'name' => 'EFG',
                'division_id' => 3
            ],
        ]);
    }
}
