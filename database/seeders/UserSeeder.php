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
                'name' => 'Jovanna Mellisa',
                'division_id' => 1
            ],
            [
                'name' => 'Michelle Angela',
                'division_id' => 2
            ],
            [
                'name' => 'Wen Sen Tan',
                'division_id' => 3
            ],
        ]);
    }
}
