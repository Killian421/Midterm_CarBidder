<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiddersSeeder extends Seeder
{
    public function run()
    {
        DB::table('bidders')->insert([
            [
                'first_name' => 'Sedric Lian',
                'last_name' => 'Deloy',
                'address' => 'Sta.cruz, Calape, Bohol',
                'email' => 'liandeloy@gmail.com'
            ],
            [
                'first_name' => 'Jose Victor',
                'last_name' => 'Alampayan',
                'address' => 'Ubujan, Tubigon, Bohol',
                'email' => 'victor@gmail.com'
            ],
            [
                'first_name' => 'Harvey',
                'last_name' => 'Quibol',
                'address' => 'Bliss, Calape, Bohol',
                'email' => 'harvey@gmail.com'
            ],
            [
                'first_name' => 'Charles Ian',
                'last_name' => 'Pangan',
                'address' => 'Cabulijan, Tubigon, Bohol',
                'email' => 'Charles@gmail.com',
            ],
            [
                'first_name' => 'Dan',
                'last_name' => 'Pangan',
                'address' => 'Cabulijan, Tubigon, Bohol',
                'email' => 'Dan@gmail.com',
            ],
            [
                'first_name' => 'Rassile',
                'last_name' => 'Lofranco',
                'address' => 'Cabulijan, Tubigon, Bohol',
                'email' => 'Rassile@gmail.com',
            ],
            [
                'first_name' => 'Ivan Yuichi',
                'last_name' => 'Cervantes',
                'address' => 'Tubigon, Bohol',
                'email' => 'yach@gmail.com',
            ],
        ]);
    }
}

