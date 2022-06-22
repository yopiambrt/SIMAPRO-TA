<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'is_admin' => '1',
            ],
            [
                'name' => 'Mawa',
                'email' => 'mawa@mawa.com',
                'password' => bcrypt('mawa'),
                'is_admin' => '2',
            ],
            [
                'name' => 'Mahasiswa',
                'email' => 'mhs@mhs.com',
                'password' => bcrypt('mhs'),
                'is_admin' => '3',
            ],
        ];

        foreach ($user as $key => $value) {
            \App\Models\User::create($value);
        }
    }
}
