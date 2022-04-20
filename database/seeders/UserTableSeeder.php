<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Daniel', 
            'email' => 'daniel@gmail.com',
            'address' => 'ndjili kinshasa',
            'phone_number' => '+243814063056',
            'password' => Hash::make('password')
        ]);
    }
}
