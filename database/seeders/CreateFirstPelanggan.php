<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateFirstPelanggan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'first_name' => 'teguh',
            'last_name' => 'teguh@pcr.ac.id',
            'birthday' => '2000/01/01',
            'gender' => 'male',
            'email' => 'teguh@gmail.com',
            'phone' => '1234567890',
        ]);
    }
}
