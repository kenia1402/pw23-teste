<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
        'name' => 'Camiseta',
        'price' => 59.9,
        'quantity' => 20,
       ],
       [
        'name' => 'Boné',
        'price' => 25,
        'quantity' => 42,
       ]);
    }
}
