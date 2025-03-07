<?php

declare(strict_types=1);

use Phinx\Seed\AbstractSeed;

class JasaLayanan extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 3,
                'keterangan' => json_encode(["Kebersihan Rumah Baru Renovasi","Kebersihan Ruangan Tamu","Cuci/kering sofa"]),
                'nama_jasa' => 'Fast and Clean',
                'harga' => json_encode(["22222","33333","25252"]),
                'foto' => 'path/to/foto.jpg',
                'no_hp' => '081234567890',
                'kecamatan' => 'Medan Polonia',
                'kelurahan' => 'Polonia',
                'alamat' => 'Jl. Polonia No. 1',
                'email' => 'jasa@example.com',
                'facebook' => 'https://www.facebook.com/jasa.mencuci.piring',
                'instagram' => 'https://www.instagram.com/jasa.mencuci.piring',
            ]
        ];

        $this->table('jasa_layanan')->insert($data)->saveData();
    }
}