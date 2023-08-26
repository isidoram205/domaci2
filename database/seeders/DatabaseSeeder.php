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
        
        $this->call(IndustrijaSeeder::class);
        $this->call(KremaSeeder::class);
        $this->call(ProizvodjacSeeder::class);
    }
}
