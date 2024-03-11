<?php
namespace App\Database\Seeds;

use App\Models\User;
use App\Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Leaf\Helpers\Password;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     */
    public function run()
    {
        // You can directly create db records like this 👇

        $user = new User();
        $user->username = 'zahovicS';
        $user->profile = 'images/profile/zahovicS.png';
        $user->fullname = 'Zahovic';
        $user->email = 'zahovic@leafphp.dev';
        $user->password = Password::hash('password');
        $user->save();

        // You can also use factories like this 👇
        // (new UserFactory)->create(5)->save();

        // even better, you can use them together :-)
    }
}
