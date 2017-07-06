<?php

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Role::class)->create([
            'name' => 'admin',
            'display_name' => 'Administrator',
            'description' => 'Full access'
        ]);
    }
}
