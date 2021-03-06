<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'ゲストユーザー',
                'email' => 'guest@example.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => '大村 朋宏',
                'email' => 'oomura@google.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => '藤田 憲右',
                'email' => 'fujita@google.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'Ryo',
                'email' => 'ryo@google.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'suzu',
                'email' => 'suzu@google.com',
                'password' => Hash::make('password'),
            ],

            [
                'name' => 'しゅーへい',
                'email' => 'syuhei@google.com',
                'password' => Hash::make('password'),
            ],
        ]);
            
        factory(App\Models\User::class, 20)->create();
    }
}
