<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'id' => 5,
                'nama' => 'citra rpo',
                'nim' => 670120008,
                'no_hp' => '089654677',
                'email' => 'citrarpo@gmail.com',
                'username' => 'citralalapo',
                'password' => bcrypt('password'),
                'cekkode' => "1",
            ],
            [
                'id' => 6,
                'nama' => 'Alvina Dini',
                'nim' => 670100023,
                'no_hp' => '02147483647',
                'email' => 'alvinadini@gmail.com',
                'username' => 'alvinadini',
                'password' => bcrypt('password'),
                'cekkode' => "1",
            ],
            [
                'id' => 8,
                'nama' => 'Raden Fachry',
                'nim' => 670120003,
                'no_hp' => '02147483647',
                'email' => 'radenfachry@gmail.com',
                'username' => 'raden123',
                'password' => bcrypt('password'),
                'cekkode' => "1",
            ],
            [
                'id' => 11,
                'nama' => 'admin lab',
                'nim' => 1111111111,
                'no_hp' => '089373888',
                'email' => 'adminlab@gmail.com',
                'username' => 'adminlab',
                'password' => bcrypt('password'),
                'cekkode' => "0",
            ],
            [
                'id' => 14,
                'nama' => 'Monica Ramadani',
                'nim' => 0,
                'no_hp' => '0896579829',
                'email' => 'monicaram@gmail.com',
                'username' => 'monica08',
                'password' => bcrypt('password'),
                'cekkode' => "0",
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}