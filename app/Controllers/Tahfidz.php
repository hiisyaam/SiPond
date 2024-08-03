<?php

namespace App\Controllers;

class Tahfidz extends BaseController
{
    public function index():string
    {
        helper('date');
        $data = [
            'title' => 'Tahfidz | Data Halaqoh',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('/tahfidz/dataHalaqoh',$data);
    }

    public function rekapTahfidz():string
    {
        helper('date');
        $data = [
            'title' => 'Tahfidz | Rekap Tahfidz',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('/tahfidz/rekap',$data);
    }
}
