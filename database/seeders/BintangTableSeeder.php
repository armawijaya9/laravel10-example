<?php

namespace Database\Seeders;

use App\Models\Bintang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BintangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bintang::create([
            "name" => "Bintang",
        ]);
    }
}
