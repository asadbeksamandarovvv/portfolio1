<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfoliosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('portfolios')->insert([
            [
                'title' => 'Senior Developer',
                'description' => 'Experienced in full-stack development',
                'image' => 'path/to/image1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior Developer',
                'description' => 'Skilled in front-end technologies',
                'image' => 'path/to/image2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Qo'shimcha yozuvlar qo'shishingiz mumkin
        ]);
    }
}
