<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku_tamu')->insert([
            'nama' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
            'phone' => '085156305278',
        ]);
    }
}
