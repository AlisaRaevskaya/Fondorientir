<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $adminRole=Role::where('name', 'admin')->first();
        $authorRole=Role::where('name', 'author')->first();

        $admin= User::create([
            'name'=>'Admin',
            'email'=>'vindicta90@mail.ru',
            'password'=>Hash::make('12345678')
        ]);
        $author = User::create([
            'name'=>'Author',
            'email'=>'author@yandex.ru',
            'password'=>Hash::make('password')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
    }
}
