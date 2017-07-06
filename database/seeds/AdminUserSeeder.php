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
                    "name" => "Morten Scheel",
                    "email" => "ms@findforsikring.dk",
                    "password" => bcrypt(env('ADMIN_PWD', 'password'))]
            );
            $role = \App\Models\Role::whereName('admin');
            if ($role->count()){
                $role = $role->get()->first();
                $user->roles()->save($role);
            }
        } catch (\Illuminate\Database\QueryException $exception) {

        }
    }
}