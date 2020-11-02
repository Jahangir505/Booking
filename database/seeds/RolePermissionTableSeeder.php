<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::insert([
            ['guard_name' => 'admin', 'name' => 'superadmin'],
        ]);
   
        //add permissions
        Permission::insert([
            ['guard_name' => 'admin', 'name' => 'add hotels'],
            ['guard_name' => 'admin', 'name' => 'add tours'],
            ['guard_name' => 'admin', 'name' => 'add cars'],
            ['guard_name' => 'admin', 'name' => 'add bookings'],
            ['guard_name' => 'admin', 'name' => 'add locations'],
            ['guard_name' => 'admin', 'name' => 'add staffs'],
            ['guard_name' => 'admin', 'name' => 'add customers'],
            ['guard_name' => 'admin', 'name' => 'add roles'],
        ]);
        // //edit permissions
        Permission::insert([
            ['guard_name' => 'admin', 'name' => 'edit hotels'],
            ['guard_name' => 'admin', 'name' => 'edit tours'],
            ['guard_name' => 'admin', 'name' => 'edit cars'],
            ['guard_name' => 'admin', 'name' => 'edit bookings'],
            ['guard_name' => 'admin', 'name' => 'edit locations'],
            ['guard_name' => 'admin', 'name' => 'edit staffs'],
            ['guard_name' => 'admin', 'name' => 'edit customers'],
            ['guard_name' => 'admin', 'name' => 'edit roles'],
        ]);

        //delete permissions
        Permission::insert([
            ['guard_name' => 'admin', 'name' => 'remove hotels'],
            ['guard_name' => 'admin', 'name' => 'remove tours'],
            ['guard_name' => 'admin', 'name' => 'remove cars'],
            ['guard_name' => 'admin', 'name' => 'remove bookings'],
            ['guard_name' => 'admin', 'name' => 'remove locations'],
            ['guard_name' => 'admin', 'name' => 'remove staffs'],
            ['guard_name' => 'admin', 'name' => 'remove customers'],
            ['guard_name' => 'admin', 'name' => 'remove roles'],
        ]);
    }
}
