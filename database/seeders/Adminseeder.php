<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'jenis_kelamin' => 'pria',
            'jurusan' => 'pplg',
            'sekolah' => '-',
            'sekolah_lainnya' => '-',
            'phone' => '083811012385',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]);
    }
}
