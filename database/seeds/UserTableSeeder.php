<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer_role = Role::where('name', 'customer')->first();
        $manager_role  = Role::where('name', 'manager')->first();
        $root_role = Role::where('name', 'root')->first();

        $employee = new User();
        $employee->name = 'Customer Tester';
        $employee->email = 'customer@test.com';
        $employee->password = bcrypt('secret');
        $employee->save();
        $employee->roles()->attach($customer_role);

        $manager = new User();
        $manager->name = 'Manager Tester';
        $manager->email = 'manager@test.com';
        $manager->password = bcrypt('secret');
        $manager->save();
        $manager->roles()->attach($manager_role);

        $root = new User();
        $root->name = 'Root Tester';
        $root->email = 'root@test.com';
        $root->password = bcrypt('secret');
        $root->save();
        $root->roles()->attach($root_role);
    }
}
