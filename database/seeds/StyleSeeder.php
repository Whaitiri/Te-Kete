<?php

use Illuminate\Database\Seeder;

class StyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customstyles')->insert([
           'selector' => 'navbar',
           'property' => 'background-color',
           'value' => '#000'
        ]);
    }
}
