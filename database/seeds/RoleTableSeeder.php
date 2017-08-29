<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = new Role();
        $role_employee->name = 'customer';
        $role_employee->description = 'Customer';
        $role_employee->save();

        $role_manager = new Role();
        $role_manager->name = 'manager';
        $role_manager->description = 'Manager';
        $role_manager->save();

        $role_manager = new Role();
        $role_manager->name = 'root';
        $role_manager->description = 'Super user';
        $role_manager->save();
    }
}
