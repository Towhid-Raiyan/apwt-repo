<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Models\Student::factory()->create([
            'name'=> 'Towhid',
            'email'=> 'towhid@gmail.com',
            'phone'=> '123456789',
            'password'=> '123456789',
        ]);
    }
}
