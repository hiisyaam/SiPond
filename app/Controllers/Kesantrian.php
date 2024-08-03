<?php

namespace App\Controllers;

class Kesantrian extends BaseController{

    public function index() : string {
        
        helper('date');
        $data = [
            'title' => 'Input Penilaian Kesantrian',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/V_Kesantrian/Penilaian',$data);
    }

    public function izin() : string {
        
        helper('date');
        $data = [
            'title' => 'Input Penilaian Kesantrian',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/V_Kesantrian/Perizinan',$data);
    }

    public function dataizin() : string {
        
        helper('date');
        $data = [
            'title' => 'Data Izin Santri',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/V_Kesantrian/DataPerizinan',$data);
    }

    public function pelanggaran() : string {
        
        helper('date');
        $data = [
            'title' => 'Halaman Pelanggaran',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/V_Kesantrian/pelanggaran',$data);
    }

    public function dataNilai() : string {
        
        helper('date');
        $data = [
            'title' => 'Data Nilai Santri',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),           
        ];
        return view('/V_Kesantrian/DataNilai',$data);
    }

} 