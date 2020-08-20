<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//
        for ($x = 0; $x <= 10; $x++) {
            DB::table('pipelines')->insert([
                'name' => 'Pipeline '.$x,
                'description' => ' description for pipeline - '.$x,
            ]);
        }

        $this->call(StagesSeeder::class);
        $this->call(ColumnsSeeder::class);

    }
}
