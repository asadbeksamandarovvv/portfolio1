<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AboutsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('abouts')->insert([
            [
                'title' => 'About Me',
                'image' => 'path/to/image.jpg',
                'full_name' => 'John Doe',
                'birthday' => '1990-01-01',
                'website' => 'https://example.com',
                'phone' => '123-456-7890',
                'city' => 'New York',
                'age' => '30',
                'degree' => 'Master',
                'email' => 'john@example.com',
                'freelance' => 'Available',
                'sub_title' => 'Web Developer',
                'happy_clients' => '100',
                'projects' => '50',
                'hours_of_support' => '1000',
                'awards' => '10',
                'skils_title' => 'Skills',
                'html' => 'Advanced',
                'css' => 'Advanced',
                'javascript' => 'Advanced',
                'php' => 'Advanced',
                'laravel' => 'Advanced',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Qo'shimcha yozuvlar qo'shishingiz mumkin
        ]);
    }
}
