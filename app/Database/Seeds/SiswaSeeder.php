<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SiswaSeeder extends Seeder
{
   public function run()
   {
    $data = [
        [
            'nama'          =>  'Raphael',
            'jenis_kelamin' =>  'pria',
            'no_telp'       =>  '081211905404',
            'email'         =>  'raph@gmail.com',
            'alamat'	=>  'Jl. Apel 1 No.17, Depok',
            'created_at' => Time::now()
        ],
        [
            'nama'          =>  'Budi',
            'jenis_kelamin' =>  'pria',
            'no_telp'       =>  '08571234567',
            'email'         =>  'budi@gmail.com',
            'alamat'	=>  'Jl. Mawar No. 17, Depok',
            'created_at' => Time::now()
        ],
        [
            'nama'          =>  'Dita',
            'jenis_kelamin' =>  'wanita',
            'no_telp'       =>  '08122334455',
            'email'         =>  'dita@gmail.com',
            'alamat'	=>  'Jl. Bulan No. 10, Depok',
            'created_at' => Time::now()
        ]
    ];
    $this->db->table('siswa')->insertBatch($data);
   }
}
