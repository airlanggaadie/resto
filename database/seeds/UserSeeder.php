<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administratorRole = new Role();
        $administratorRole->name = 'administrator';
        $administratorRole->display_name = 'Administrator';
        $administratorRole->description = 'All Permission';
        $administratorRole->save();

        $ownerRole = new Role();
        $ownerRole->name = 'owner';
        $ownerRole->display_name = 'Owner';
        $ownerRole->description = 'Restaurants access';
        $ownerRole->save();

        $customerRole = new Role();
        $customerRole->name = 'customer';
        $customerRole->display_name = 'Customer';
        $customerRole->description = 'Customer access';
        $customerRole->save();

        $administrator = new User();
        $administrator->name = 'Administrator';
        $administrator->phonenumber = '021';
        $administrator->gender = 'L';
        $administrator->email = 'administrator@email.com';
        $administrator->password = bcrypt('12345');
        $administrator->save();
        $administrator->attachRole($administratorRole);

        $owner = new User();
        $owner->name = 'Owner';
        $owner->phonenumber = '021';
        $owner->gender = 'L';
        $owner->email = 'owner@email.com';
        $owner->password = bcrypt('23456');
        $owner->save();
        $owner->attachRole($ownerRole);
        
        $customer = new User();
        $customer->name = 'Customer';
        $customer->phonenumber = '021';
        $customer->gender = 'W';
        $customer->email = 'customer@email.com';
        $customer->password = bcrypt('34567');
        $customer->save();
        $customer->attachRole($customerRole);
    }
}
