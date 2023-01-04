<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name'     => 'Fernanda Nogueira',
                    'email'    => 'fernanda.nogueira96@hotmail.com',
                    'password'    => 'bcrypt("a123456")',
                    'remember_token'    => 'senha padrao',
                    'created_at' => '2022-12-30 20:37:39',
                    'updated_at' => '2022-12-30 20:37:39'
                ]
            ]
        );
    }
}
