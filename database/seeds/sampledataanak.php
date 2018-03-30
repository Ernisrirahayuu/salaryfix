<?php

use Illuminate\Database\Seeder;
use App\jumlah_anak;
class sampledataanak extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data1 = new jumlah_anak();
        $data1->Kode_Jumlah="J001";
        $data1->Jumlah_Anak="0";
        $data1->Besaran_Uang="0";
        $data1->save();

        $data2 = new jumlah_anak();
        $data2->Kode_Jumlah="J002";
        $data2->Jumlah_Anak="1";
        $data2->Besaran_Uang="20000";
        $data2->save();

        $data3 = new jumlah_anak();
        $data3->Kode_Jumlah="J003";
        $data3->Jumlah_Anak="2";
        $data3->Besaran_Uang="30000";
        $data3->save();
    }
}
