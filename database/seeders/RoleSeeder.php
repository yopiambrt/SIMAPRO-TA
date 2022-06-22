<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'name' => 'Admin',
                'is_admin' => '1',
            ],
            [
                'name' => 'Mawa',
                'is_admin' => '2',
            ],
            [
                'name' => 'Mahasiswa',
                'is_admin' => '3',
            ],
        ];

        foreach ($role as $key => $value) {
            \App\Models\Role::create($value);
        }
    }
}
