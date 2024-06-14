<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Model\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       User::create(
    [
            'name' => 'Ryan James J. Pascual',
            'email' =>   'ryy@gmail.com',
            'password' => Hash::make('11111111'),
            ], [
            'name' => 'Diether',
            'email' =>   'diethersumido@gmail.com',
            'password' => Hash::make('@M00dlearning'),
            ],


        );
    }
}
