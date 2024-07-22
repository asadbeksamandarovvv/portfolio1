<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ResumesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('resumes')->insert([
            [
                'title' => 'Senior Developer',
                'sub_title' => 'Lead Developer',
                'description' => 'Experienced in full-stack development',
                'year' => '2024',
                'about_me' => 'Passionate about coding and teaching',
                'address' => '123 Main Street',
                'phone' => '123-456-7890',
                'email' => 'senior@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior Developer',
                'sub_title' => 'Front-end Developer',
                'description' => 'Skilled in front-end technologies',
                'year' => '2024',
                'about_me' => 'Enjoys learning new things',
                'address' => '456 Elm Street',
                'phone' => '987-654-3210',
                'email' => 'junior@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Qo'shimcha yozuvlar qo'shishingiz mumkin
        ]);
    }
}
