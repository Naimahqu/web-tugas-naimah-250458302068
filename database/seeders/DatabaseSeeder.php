<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::create([
             'nama'     => 'Naimah',
             'email'    => 'nai@gmail.com',
             'jabatan'  => 'Admin',
             'password' => Hash::make('123123123'),
             'is_tugas' => false,
         ]);
         User::create([
             'nama'     => 'Sulis',
             'email'    => 'sulis@gmail.com',
             'jabatan'  => 'Karyawan',
             'password' => Hash::make('123123123'),
             'is_tugas' => false,
         ]);
         User::create([
             'nama'     => 'savira',
             'email'    => 'savira@gmail.com',
             'jabatan'  => 'Karyawan',
             'password' => Hash::make('123123123'),
             'is_tugas' => false,
         ]);
         User::create([
             'nama'     => 'kevin',
             'email'    => 'kevin@gmail.com',
             'jabatan'  => 'Karyawan',
             'password' => Hash::make('123123123'),
             'is_tugas' => false,
         ]);
    }
}
