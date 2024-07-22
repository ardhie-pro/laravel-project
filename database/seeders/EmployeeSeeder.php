<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nama' => 'Ardhie Nurdianto',
            'jeniskelamin' => 'laki-laki',
            'nomertelephone' => '085745418424',
        ]);
    }
}
