<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseInstructorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Teacher::factory()->create([
            'name'=> 'Onik',
            'email'=> 'onik@gmail.com',
            'password'=> '12345',
        ]);
    }
}
