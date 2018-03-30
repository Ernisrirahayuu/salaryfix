<?php

use Illuminate\Database\Seeder;
use App\Jabatan;
use App\Golongan;
use App\User;
use App\Pegawai;
use App\Kategori_Lembur;
class kategoriseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $jabatan1 =Jabatan::create(['Kode_Jabatan'=>'J001',
        	                        'Nama_Jabatan'=>'Staff',
        	                        'Besaran_Uang'=>'750000']);

        $jabatan2 =Jabatan::create(['Kode_Jabatan'=>'J002',
        							'Nama_Jabatan'=>'Asisten Staff',
        							'Besaran_Uang'=>'600000']);

        $jabatan3 =Jabatan::create(['Kode_Jabatan'=>'J003',
                                    'Nama_Jabatan'=>'Pegawai',
                                    'Besaran_Uang'=>'500000']);


        $golongan1=Golongan::create(['Kode_Golongan'=>'G001',
        							 'Nama_Golongan'=>'Golongan I',
        							 'Besaran_Uang'=>'50000']);
        $golongan2=Golongan::create(['Kode_Golongan'=>'G002',
        							 'Nama_Golongan'=>'Golongan II',
        							 'Besaran_Uang'=>'35000']);
        $golongan3=Golongan::create(['Kode_Golongan'=>'G003',
                                     'Nama_Golongan'=>'Golongan III',
                                     'Besaran_Uang'=>'20000']);


        $kategori1=Kategori_Lembur::create(['Kode_Lembur'=>'KL001',
        	                               'Kode_Jabatan'=>$jabatan1->id,
        	                               'Kode_Golongan'=>$golongan1->id,
        	                               'Besaran_Uang'=>'50000']);

        $kategori2=Kategori_Lembur::create(['Kode_Lembur'=>'KL002',
        									'Kode_Jabatan'=>$jabatan2->id,
        									'Kode_Golongan'=>$golongan2->id,
        									'Besaran_Uang'=>'25000']);

        $kategori3=Kategori_Lembur::create(['Kode_Lembur'=>'KL003',
                                            'Kode_Jabatan'=>$jabatan3->id,
                                            'Kode_Golongan'=>$golongan3->id,
                                            'Besaran_Uang'=>'15000']);
        $pegawai1 = User::create([
            'name'      => 'Rudi Budel',
            'email'     => 'rudibudel@gmail.com',
            'password'  => bcrypt('rahasia'),
            'permission'  => 'pegawai',
            ]);
        $pegawai2 = User::create([
            'name'      => 'Tedi Ardian',
            'email'     => 'tediardian@gmail.com',
            'password'  => bcrypt('rahasia'),
            'permission'  => 'pegawai',
            ]);
        $pegawai3 = User::create([
            'name'      => 'Indra Permana',
            'email'     => 'indrapermana@gmail.com',
            'password'  => bcrypt('rahasia'),
            'permission'  => 'pegawai',
            ]);
        Pegawai::create([
        	'Nip'			=>	'102001',
        	'user_id'		=>	$pegawai1->id, 
        	'Kode_Jabatan'	=>  $jabatan1->id, 
        	'Kode_Golongan'	=>	$golongan1->id, 
            ]);

        Pegawai::create([
        	'Nip'			=>	'102002',
        	'user_id'		=>	$pegawai2->id, 
        	'Kode_Jabatan'	=>  $jabatan2->id, 
        	'Kode_Golongan'	=>	$golongan2->id,
            ]);

        Pegawai::create([
            'Nip'           =>  '102003',
            'user_id'       =>  $pegawai3->id, 
            'Kode_Jabatan'  =>  $jabatan3->id, 
            'Kode_Golongan' =>  $golongan3->id, 
            ]);
    }
}
