<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

// Membuat role admin
$adminRole = new Role();
$adminRole->name = "admin";
$adminRole->display_name = "Admin";
$adminRole->save();
// Membuat role member
$memberRole = new Role();
$memberRole->name = "pegawai";
$memberRole->display_name = "Pegawai";
$memberRole->save();
// Membuat sample admin
$admin = new User();
$admin->name = 'Admin ';
$admin->email = 'admin@gmail.com';
$admin->password = bcrypt('rahasia');
$admin->permission = 'admin';
$admin->save();
$admin->attachRole($adminRole);
    }
}
