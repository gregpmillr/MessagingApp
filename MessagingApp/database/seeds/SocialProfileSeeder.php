<?php

use Illuminate\Database\Seeder;
use App\Social_Profile;

class SocialProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('social_profiles')->insert([
            'user_id' => '1',
            'twitter' => "gregpmillr",
            'facebook' => "gregpmiller@facebook.com",
            'googleplus' => "gplusgregpmillr",
        ]);
    }
}
