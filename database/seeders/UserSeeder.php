<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Traits\UserTrait;

class UserSeeder extends Seeder
{
    use UserTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createUser([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => 'admin',
        ]);
    }
}
