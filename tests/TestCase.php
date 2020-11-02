<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function signIn($user = null) {
    
        $admin = \App\Admin::create([
            'name' => 'Super Admin',
            'email' => 'masterionic@gmail.com',
            'username' => 'superadmin',
            'password' => bcrypt('admin'),
             'role' => 'super'
         ]);

         $this->actingAs($admin, 'admin');

         return $this;
    }
}
