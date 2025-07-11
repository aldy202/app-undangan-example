<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        // DB::table('users')->delete();

        DB::table('users')->insert(
            [
                'id' => 3,
                'name' => 'aldy',
                'email' => 'aldy@gmail.com',
                'no_telepon' => '085720258487',
                'email_verified_at' => NULL,
                'password' => bcrypt('12345678'),
                'two_factor_secret' => NULL,
                'two_factor_recovery_codes' => NULL,
                'two_factor_confirmed_at' => NULL,
                'remember_token' => NULL,
                'current_team_id' => NULL,
                'profile_photo_path' => NULL,
                'active' => 1,
                'created_at' => NULL,
                'updated_at' => '2022-10-23 09:20:29',
            ]
        );
    }
}
