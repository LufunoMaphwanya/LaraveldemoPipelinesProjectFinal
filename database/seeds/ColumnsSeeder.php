<?php

use Illuminate\Database\Seeder;

class ColumnsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($x = 1; $x <= 100; $x++) {
            DB::table('columns')->insert([
                'var_name' => $x.') Question '.$x.'?',
                'var_type' => 'string',
                'new_var_name' => 'column_'.$x,
                'new_var_type' => 'int',
            ]);
        }

        for ($x = 1; $x <= 3; $x++) {

        }
    }
}
