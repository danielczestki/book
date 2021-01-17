<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

/**
 * Class BookSeeder
 * @package Database\Seeders
 */
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i<=10; $i++) {
            DB::table('books')->insert([
                'title' => Str::random(10),
                'author' => Str::random(10) . ' ' . Str::random(10),
                'category' => Str::random(10),
            ]);
        }
    }
}
