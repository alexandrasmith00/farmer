<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Care Recipient']);
        Role::create(['name' => 'Caregiver']);
        Role::create(['name' => 'Account Holder']);
        Role::create(['name' => 'Device Owner']);
        Role::create(['name' => 'Subscriber']);
        Role::create(['name' => 'Employee']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Waitlist']);
        Role::create(['name' => 'Contributor']);

    }
}