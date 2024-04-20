<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\User::create([
            'name' => 'admin',
            'address' => 'jakarta',
            'driving_license_number' => '0',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'is_admin' => true
        ]);
    }
}
