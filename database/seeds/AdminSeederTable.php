<?php

use Illuminate\Database\Seeder;

class AdminSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'name'              => 'Admin', 
            'email'             => 'admin@gmail.com',
            'password'          => bcrypt('password'),
            'is_super'          => 1,
            'remember_token'    => '', 
            'created_at'        => date('Y-m-d H:i:s'), 
            'updated_at'        => date('Y-m-d H:i:s')
        ]);
    }
}
