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
           'selector' => '.customNavbar',
           'property' => 'background-color',
           'value' => '#95A591'
        ]);
        DB::table('customstyles')->insert([
           'selector' => '.customNavbar, .customNavbar a',
           'property' => 'color',
           'value' => '#000'
        ]);
        DB::table('customstyles')->insert([
           'selector' => '.customNavbar a:hover',
           'property' => 'background-color',
           'value' => '#879a83'
        ]);
        DB::table('customstyles')->insert([
           'selector' => '.customNavbar a:hover',
           'property' => 'color',
           'value' => '#000'
        ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#'
        // ]);
        //
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
        // DB::table('customstyles')->insert([
        //    'selector' => '.customNavbar',
        //    'property' => 'background-color',
        //    'value' => '#95A591'
        // ]);
    }
}
