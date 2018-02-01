<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role;
        $role_admin->id = '1';
        $role_admin->name = 'Admin';
        $role_admin->description = 'Acesso Total';
        $role_admin->save();

        $role_medic = new Role;
        $role_medic->id = '2';
        $role_medic->name = 'Medic';
        $role_medic->description = 'Acesso ao sistema';
        $role_medic->save();

        $role_user = new Role;
        $role_user->id = '3';
        $role_user->name = 'User';
        $role_user->description = 'Acesso aos meios de pagamento';
        $role_user->save();

    }
}