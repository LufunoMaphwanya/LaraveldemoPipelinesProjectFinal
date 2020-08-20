<?php

use Illuminate\Database\Seeder;

class StagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($x = 0; $x <= 10; $x++) {
            for ($y = 0; $y <= rand(3,9); $y++) {
                DB::table('stages')->insert([
                    'name' => 'Stage '.$y,
                    'description' => 'Pipeline '.$x.' description for stage - '.$y,
                    'type' => 'general',
                    'pipeline_id' => $x,
                ]);
            }
        }
    }
}
