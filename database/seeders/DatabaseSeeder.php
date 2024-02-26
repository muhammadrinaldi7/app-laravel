<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kasir;
use App\Models\Stok;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'nama' => 'Kamal',
            'username' => 'Kamal01',
            'email' => 'kamal@gmail.com',
            'password' => bcrypt('kamal1234')
        ]);
        // Kasir::create([
        //     'no_trans' => 'TRX-001',
        //     'id_kasir' => '1',
        //     'nama_pelanggan' => 'Aldi',
        //     'no_telp' => '989'
        // ]);
        Stok::create([
            'nama_bahan' => 'Daging Has Dalam',
            'satuan' => 'Kg',
            'onhand' => 5
        ]);
        Stok::create([
            'nama_bahan' => 'Short Ribs Besar',
            'satuan' => 'Kg',
            'onhand' => 5
        ]);
        Stok::create([
            'nama_bahan' => 'Spare Ribs GrenHam',
            'satuan' => 'Kg',
            'onhand' => 5
        ]);
        Stok::create([
            'nama_bahan' => 'Steak Meltique Tenderloin',
            'satuan' => 'Kg',
            'onhand' => 5
        ]);
        Stok::create([
            'nama_bahan' => 'Brisket Bone (Iga Jando)',
            'satuan' => 'Kg',
            'onhand' => 5
        ]);
        Stok::create([
            'nama_bahan' => 'Daging Giling Ekonomis',
            'satuan' => 'Kg',
            'onhand' => 5
        ]);
        Supplier::create([
            'nama_supplier' => 'Hijrah Food',
            'no_telp' => '08989898989',
            'alamat' => 'Jl. Jakarta Utara Kemayoran Barat',
        ])
        
    }
}
