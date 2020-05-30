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

        $superAdmin = App\User::create([
            'id' => 1000,
            'name' => 'test SuperAdmin',
            'email' => 'test_superadmin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456789), // password
            'remember_token' => Str::random(10),
            'last_name' => 'test',
            'login' => 'test_superadmin',
            'num_detect' => 123,
            'tel'=>'(+212)666666666' ,
            'fix'=>'(+212)666666666'
        ]);

        $admin = App\User::create([
            'id' => 1001,
            'name' => 'test Admin',
            'email' => 'test_admin@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456789), // password
            'remember_token' => Str::random(10),
            'last_name' => 'test',
            'login' => 'test_admin',
            'num_detect' => 123,
            'tel'=>'(+212)666666666' ,
            'fix'=>'(+212)666666666'
        ]);

        $user = App\User::create([
            'id' => 1002,
            'name' => 'test',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make(123456789), // password
            'remember_token' => Str::random(10),
            'last_name' => 'test',
            'login' => 'test',
            'num_detect' => 123,
            'tel'=>'(+212)666666666' ,
            'fix'=>'(+212)666666666'
        ]);







        factory(App\User::class, 50)->create();


    }
}
