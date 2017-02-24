<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// <option value="SuperAdmin">SuperAdmin</option>
// <option value="Admin">Admin</option>
// <option value="Keuangan">Keuangan</option>
// <option value="Pegawai">Pegawai</option>

        User::create([
        	'name'=>'Super ADMIN',
        	'email'=>'superadmin@gaji.bayu',
        	'permission'=>'SuperAdmin',
        	'password'=>bcrypt('superadmin1234#'),
        	]);
        User::create([
        	'name'=>'ADMIN',
        	'email'=>'admin@gaji.bayu',
        	'permission'=>'Admin',
        	'password'=>bcrypt('admin1234#'),
        	]);
    }
}
