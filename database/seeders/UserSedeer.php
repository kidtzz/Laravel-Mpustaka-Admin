<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Nette\Utils\Strings;
use Illuminate\Support\Str;

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'name'=>'Admin Mpustaka',
            'email'=>'admin',
            'password'=> bcrypt('1'),
            'remember_token'=> Str::random(60),
        ]);
    }
}
