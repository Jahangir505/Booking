<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Admin;
use App\User;
use App\Traits\JsonParsingTrait;

class AccountController extends Controller
{
    use JsonParsingTrait;

    public function __construct() {
        $this->middleware(['role:superadmin'])->except('role_list');
    }

    public function role_list() {
        $roles = Role::where('name', '!=', 'superadmin')->get();
        return view('admin.role.list', compact('roles'));
    }

    public function role_create() {
        $add_perms = Permission::where('name', 'like', '%'.'add'.'%')->pluck('name');
        $edit_perms = Permission::where('name', 'like', '%'.'edit'.'%')->pluck('name');
        $rem_perms = Permission::where('name', 'like', '%'.'remove'.'%')->pluck('name');
        $role = null;
        return view('admin.role.add', \compact('add_perms', 'edit_perms', 'rem_perms', 'role'));
    }

    public function role_store(Request $request) {
        $validate = $request->validate([
            'name' => 'required|string|unique:roles',
            'permissions' => 'sometimes|array'
        ]);

        $role = Role::create(['guard_name' => 'admin', 'name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect(route('roles.list'));

    }

    public function role_edit(Role $role) {
        $add_perms = Permission::where('name', 'like', '%'.'add'.'%')->pluck('name');
        $edit_perms = Permission::where('name', 'like', '%'.'edit'.'%')->pluck('name');
        $rem_perms = Permission::where('name', 'like', '%'.'remove'.'%')->pluck('name');
        return view('admin.role.add', \compact('add_perms', 'edit_perms', 'rem_perms', 'role'));
    }

    public function role_update(Request $request, Role $role) {

        $validate = $request->validate([
            'name' => 'required|string',
            'permissions' => 'sometimes|array'
        ]);

        $role->update(['guard_name' => 'admin','name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect(route('roles.list'));
    }

    public function admin_list() {
        $admins = Admin::all();
        return view('admin.stuff.stuff', compact('admins'));
    }

    public function admin_create() {
        $roles = Role::where('name', '!=', 'superadmin')->get();
        $countries = $this->get_countries();
        $admin = null;
        return view('admin.stuff.add', compact('roles', 'countries', 'admin'));
    }

    public function admin_store(Request $request) {
        $data = $request->validate([
            'firstname' => 'sometimes|string',
            'lastname' => 'sometimes|string',
            'username' => 'required|string|unique:admins',
            'email' => 'required|string|email|unique:admins',
            'country' => 'sometimes|string',
            'phone' => 'sometimes|string',
            'gender' => 'sometimes|string',
            'age' => 'sometimes|numeric',
            'password' => 'required|string',
            'status' => 'sometimes|numeric'
        ]);

        $data['password'] = bcrypt($data['password']);
        
        $request->validate([
            'role' => 'required|string'
        ]);

        $admin = Admin::create($data);

        $admin->assignRole($request->role);

        return redirect(route('admins.list'));
    }

    public function admin_edit(Admin $admin) {
        $roles = Role::where('name', '!=', 'superadmin')->get();
        $countries = $this->get_countries();
        return view('admin.stuff.add', compact('roles', 'countries', 'admin'));
    }

    public function admin_update(Request $request, Admin $admin) {

        $data = $request->validate([
            'firstname' => 'sometimes|string',
            'lastname' => 'sometimes|string',
            'username' => 'required|string',
            'email' => 'required|string|email',
            'country' => 'sometimes|string',
            'phone' => 'sometimes|string',
            'gender' => 'sometimes|string',
            'age' => 'sometimes|numeric',
            'password' => 'sometimes|string',
            'status' => 'sometimes|numeric'
        ]);
        
        If($request->password) {
            $data['password'] = bcrypt($data['password']);
        }

        $admin->update($data);

        If($request->role) {
           $admin->syncRoles([$request->role]);
        }
        
        return redirect(route('admins.list'));
    }

    public function customer_list() {
        $users = User::all();
        return view('admin.user.users', compact('users'));
    }


    public function customer_create() {
        $countries = $this->get_countries();
        $user = null;
        return view('admin.user.add', compact('countries', 'user'));
    }

    public function customer_store(Request $request) {
        $data = $request->validate([
            'firstname' => 'sometimes|string',
            'lastname' => 'sometimes|string',
            'username' => 'required|string|unique:users',
            'email' => 'required|string|email|unique:users',
            'country' => 'sometimes|string',
            'phone' => 'sometimes|string',
            'gender' => 'sometimes|string',
            'age' => 'sometimes|numeric',
            'password' => 'required|string',
            'status' => 'sometimes|numeric'
        ]);

        $data['password'] = bcrypt($data['password']);
        
        $user = User::create($data);

        return redirect(route('customers.list'));
    }

    public function customer_edit(User $user) {
        $countries = $this->get_countries();
        return view('admin.user.add', compact( 'countries', 'user'));
    }

    public function customer_update(Request $request, User $user) {

        $data = $request->validate([
            'firstname' => 'sometimes|string',
            'lastname' => 'sometimes|string',
            'username' => 'required|string',
            'email' => 'required|string|email',
            'country' => 'sometimes|string',
            'phone' => 'sometimes|string',
            'gender' => 'sometimes|string',
            'age' => 'sometimes|numeric',
            'password' => 'sometimes|string',
            'status' => 'sometimes|numeric'
        ]);
        
        If($request->password) {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);
        
        return redirect(route('customers.list'));
    }
}
