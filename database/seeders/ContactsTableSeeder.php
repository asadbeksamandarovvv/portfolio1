<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'subject' => Str::random(15),
                'message' => Str::random(50),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@example.com',
                'subject' => Str::random(15),
                'message' => Str::random(50),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Qo'shimcha yozuvlar qo'shishingiz mumkin
        ]);
    }
}
