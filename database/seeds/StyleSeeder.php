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
           'slug' => 'navBGColor',
           'title' => 'Nav Background',
           'selector' => '.customNavbar, .customAdmin',
           'property' => 'background-color',
           'value' => '#95A591'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'navFontColor',
           'title' => 'Nav Fonts',
           'selector' => '.customNavbar, .customNavbar a, .customAdmin, .customAdmin a',
           'property' => 'color',
           'value' => '#4a4a4a'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'navHoverColor',
           'title' => 'Nav Hover',
           'selector' => '.customNavbar a:hover, .customAdmin a:hover',
           'property' => 'background-color',
           'value' => '#879a83'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'navHoverFontColor',
           'title' => 'Nav Hover Font',
           'selector' => '.customNavbar a:hover, .customAdmin a:hover',
           'property' => 'color',
           'value' => '#4a4a4a'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'activeBackground',
           'title' => 'Active Nav Item BG',
           'selector' => '.is-active',
           'property' => 'background-color',
           'value' => '#7a8e75'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'activeFont',
           'title' => 'Active Nav Item Font',
           'selector' => 'a.is-active',
           'property' => 'color',
           'value' => '#eee'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'bodyBGColor',
           'title' => 'Body Background',
           'selector' => '.customBody',
           'property' => 'background-color',
           'value' => '#687779'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'cardBGColor',
           'title' => 'Content Background',
           'selector' => '.customCard, .adminTable',
           'property' => 'background-color',
           'value' => '#EEE'
        ]);

       DB::table('customstyles')->insert([
          'slug' => 'cardFontColor',
          'title' => 'Content Font',
          'selector' => '.customCard, .adminTable',
          'property' => 'color',
          'value' => '#4a4a4a'
       ]);

        DB::table('customstyles')->insert([
           'slug' => 'cardTitleColor',
           'title' => 'Content Title',
           'selector' => '.customCard .title, .adminTable th',
           'property' => 'color',
           'value' => '#4a4a4a'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'cardSubtitleColor',
           'title' => 'Content Subtitle',
           'selector' => '.customCard .subtitle',
           'property' => 'color',
           'value' => '#4a4a4a'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'footerBGColor',
           'title' => 'Footer Background',
           'selector' => '.customFooter',
           'property' => 'background-color',
           'value' => '#95A591'
        ]);

        DB::table('customstyles')->insert([
           'slug' => 'footerFontColor',
           'title' => 'Footer Font',
           'selector' => '.customFooter, .customFooter a',
           'property' => 'color',
           'value' => '#4a4a4a'
        ]);


    }
}
