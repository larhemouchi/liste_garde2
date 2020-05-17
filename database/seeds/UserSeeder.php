<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        App\User::create([
            'name' => 'test',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456789), // password
            'remember_token' => Str::random(10),
        ]);





        factory(App\User::class, 50)->create();


    }
}
