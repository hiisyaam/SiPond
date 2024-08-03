<?php

namespace App\Controllers;

class Kesehatan extends BaseController{
    public function index() : string {
        
        helper('date');
        $data = [
            'title' => 'Input Kesehatan',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/Kesehatan/kesehatan',$data);
    }


    public function listPasien() : string {
        
        helper('date');
        $data = [
            'title' => 'List Data Pasien',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/Kesehatan/dataPasien',$data);
    }
}