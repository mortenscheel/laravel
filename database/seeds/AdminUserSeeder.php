<?php

use Illuminate\Database\Seeder;

/**
 * Class AdminUserSeeder
 */
class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            /** @var \App\Models\User $user */
            $user = factory(App\Models\User::class)->create([
                    "name" => env('ADMIN_NAME', 'Administrator'),
                    "email" => env('ADMIN_EMAIL', 'admin@admin.com'),
                    "password" => bcrypt(env('ADMIN_PASSWORD', 'password'))]
            );
            $role = \App\Models\Role::whereName('admin');
            if ($role->count()){
                $role = $role->get()->first();
                $user->roles()->save($role);
            }
            $this->command->info("Seeded admin user");
        } catch (\Illuminate\Database\QueryException $exception) {

        }
    }
}