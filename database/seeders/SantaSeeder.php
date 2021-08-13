<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SantaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('santas')->insert(['id'=>null,'name'=>'Таня','email'=>'tanya@example.com','description'=>'Хочу цветы']);
        DB::table('santas')->insert(['id'=>null,'name'=>'Ваня','email'=>'vanya@example.com','description'=>'Хочу ракету']);
        DB::table('santas')->insert(['id'=>null,'name'=>'Геннадий','email'=>'gena@example.com','description'=>'Хочу крокодила']);
        DB::table('santas')->insert(['id'=>null,'name'=>'Вася','email'=>'vasya@example.com','description'=>'Хочу домой']);
    }
}
