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
        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('admin');
        $admin->role_id = '1';
        $admin->save();

        $medic = new User();
        $medic->name = 'Medic';
        $medic->email = 'medic@medic.com';
        $medic->password = bcrypt('medic');
        $medic->role_id = '2';
        $medic->save();

        $user = new User();
        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->password = bcrypt('user');
        $admin->role_id = '3';
        $user->save();
    }
}
