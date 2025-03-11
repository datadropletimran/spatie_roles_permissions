<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@malik.com',
            'password' => bcrypt('password'),
        ])->assignRole('admin');

        // create publisher
        User::create([
            'name'     => 'Publisher',
            'email'    => 'publisher@malik.com',
            'password' => bcrypt('password'),
        ])->assignRole('publisher');

        // create state

        User::create([
            'name'     => 'Staff',
            'email'    => 'staff@malik.com',
            'password' => bcrypt('password'),
        ])->assignRole('staff');
    }
}
