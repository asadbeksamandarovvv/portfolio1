<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(HomesTableSeeder::class);
        $this->call(AboutsTableSeeder::class);
        $this->call(PortfoliosTableSeeder::class);
        $this->call(ContactsTableSeeder::class);
        $this->call(ResumesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);

    }
}
