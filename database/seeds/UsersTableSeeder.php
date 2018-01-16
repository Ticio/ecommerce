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
          $user = new User;
          $user->name = 'c_market';
          $user->password = bcrypt('123456');
          $user->email = 'ticioguitar@gmail.com';
          $user->state_id = 1;

          $user->save();
      });
    }
}
