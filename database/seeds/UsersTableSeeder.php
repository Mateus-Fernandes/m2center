<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      =>  'Claudio Mussalam',
            'email'     =>  'contato@m2center.com.br',
            'password'  =>  bcrypt('claudioadmin'),
        ]);
    }
}
