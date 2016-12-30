<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
	/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('country')->delete();
         //insert some dummy records
         DB::table('country')->insert(array(
             array('name'=>'India'),
             array('name'=>'Pak'),
             array('name'=>'Au'),
             array('name'=>'Uk'),
             array('name'=>'Chaina'),
             array('name'=>'Japan'),
             array('name'=>'Ireland'),

          ));
    }
}
