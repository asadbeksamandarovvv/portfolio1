<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HomesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('homes')->insert([
            [
                'title' => 'Senior Developer',
                'work_experience' => '10 years',
                'description' => 'Experienced in full-stack development',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Junior Developer',
                'work_experience' => '2 years',
                'description' => 'Skilled in front-end technologies',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Qo'shimcha yozuvlar qo'shishingiz mumkin
        ]);
    }
}
