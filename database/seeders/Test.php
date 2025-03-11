<?php

namespace Database\Seeders;

use App\Models\Test as ModelsTest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Test extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("tests")->insert([
            "name" => "test1",
            "prenom" => "test1",
            "en_couple" => true
        ]);
    }
}
