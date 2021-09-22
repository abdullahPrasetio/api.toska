<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name'=>'Waluyo Ade Prasetio',
                'email'=>'temancode@gmail.com',
                'email_verified_at'=>null,
                'password'=>bcrypt('password'),
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'name'=>'Aga Prabowo',
                'email'=>'aga.prabowo@gmail.com',
                'email_verified_at'=>null,
                'password'=>bcrypt('password'),
                'created_at'=>now(),
                'updated_at'=>now()
            ]
        ])->each(fn($user)=>DB::table('users')->insert($user)); 
    }
}
