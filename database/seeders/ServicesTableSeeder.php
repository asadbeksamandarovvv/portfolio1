<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'image' => 'path/to/image1.jpg',
                'title' => 'Senior Developer',
                'description' => 'Experienced in full-stack development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'path/to/image2.jpg',
                'title' => 'Junior Developer',
                'description' => 'Skilled in front-end technologies',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Qo'shimcha yozuvlar qo'shishingiz mumkin
        ]);
    }
}
