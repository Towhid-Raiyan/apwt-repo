<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\CourseTable::factory()->create([
            'name'=> 'Operating System',
            'c_code'=> 'CSC304',
            't_id'=> 'Onik',
        ]);
    }
}
