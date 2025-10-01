<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CustomerTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('customers')->insert([
            [
                'name' => 'Jan Jansen',
                'email' => 'jan.jansen@example.com',
                'phone' => '0612345678',
                'date_of_birth' => '1985-03-15',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Marie van den Berg',
                'email' => 'marie.vandenberg@example.com',
                'phone' => '0623456789',
                'date_of_birth' => '1990-07-22',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Pieter de Vries',
                'email' => 'pieter.devries@example.com',
                'phone' => '0634567890',
                'date_of_birth' => '1988-11-30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
