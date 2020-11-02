<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolePermissionTableSeeder::class);
        $this->command->info('Seeded the Role and Permission!'); 
        //Seed the countries
        $this->call(AdminTableSeeder::class);
        $this->command->info('Seeded the admin!');
        $this->call('CountriesSeeder');
        $this->command->info('Seeded the countries!'); 
        $this->call(GeneralsTableSeeder::class);
        $this->command->info('Seeded the Generals!'); 
        $this->call(ContactTableSeeder::class);
        $this->command->info('Seeded the Contact!'); 
        
    }
}
