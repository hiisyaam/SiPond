<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index():string
    {
        helper('date');
        $data = [
            'title' => 'SIRISA | Sistem Informasi Riyadus Salihin',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('dashboard',$data);
    }

    public function logout():string
    {
        return view('login');
    }

    public function prestasi() : string {
        helper('date');
        $data = [
            'title' => 'Data Pretasi Santri',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('prestasi',$data);
    }

    public function pengumuman(){
        helper('date');
        $data = [
            'title' => 'Form Pengumuman',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('pengumuman',$data);
    }

    public function mapel(){
        helper('date');
        $data = [
            'title' => 'Data Mata Pelajaran',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('mapel',$data);

    }
}
