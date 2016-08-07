<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'businessName' => "Twilio",
            'preferredFName' => "Twilio",
            'preferredLName' => "Falkenham",
            'phoneNumber' => "902-555-1243",
            'address' => "52 stoneridge court",
            'email' => "gregpmillr@gmail.com",
            'password' => "secret",
        ]);
    }
}
