<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        //  'name' => 'admin',
        //  'email' => 'trrongson1999@gmail.com',
        //  'password' => bcrypt('123456'),
        // ]);

        $user = User::firstOrCreate(
            ['email' => 'trrongson1999@gmail.com'],
            [
                'name' => 'admin',
                'password' => bcrypt('123456'),
            ]
        );
        // factory(App\User::class, 5)->create();

    }

}
