<?php

use Illuminate\Database\Seeder;
use App\status;

class sampledata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data1 = new status();
        $data1->Kode_Status="S001";
        $data1->Nama_Status="Belum Menikah";
        $data1->Besaran_Uang="0";
        $data1->save();

        $data2 = new status();
        $data2->Kode_Status="S002";
        $data2->Nama_Status="Sudah Menikah";
        $data2->Besaran_Uang="15000";
        $data2->save();

    }
}
