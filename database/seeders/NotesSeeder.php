<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class NotesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('notes')->insert([
            'title' => "Hello World",
            'description' => "This is the first note",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
