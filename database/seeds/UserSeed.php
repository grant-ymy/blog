<?php

use think\migration\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        db('users')->insert(['username'=>'ymy','nickname'=>'grant']);
        db('users')->insert(['username'=>'admin','nickname'=>'admin']);
    }
}