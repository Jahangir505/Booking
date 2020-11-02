<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        $permissions = Permission::all();
        $role = Role::where('name', 'superadmin')->first();

        $admin = \App\Admin::create([
            'firstname' => 'Super Admin',
            'email' => 'masterionic@gmail.com',
            'username' => 'superadmin',
            'password' => bcrypt('admin'),
        ]);

        $role->syncPermissions($permissions);

        $admin->assignRole($role);
    }
}
