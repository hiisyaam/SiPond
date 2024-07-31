<?php

namespace App\Controllers;

class Absen extends BaseController
{
    public function index():string
    {
        helper('date');
        $data = [
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('dashboard',$data);
    }

    public function SD():string
    {
        helper('date');
        $data = [
            'title' => 'Absensi SD',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'SD'         
        ];
        return view('absensi',$data);
    }

    public function SMP():string
    {
        helper('date');
        $data = [
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('dashboard',$data);
    }

    public function SMA():string
    {
        helper('date');
        $data = [
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
        ];
        return view('dashboard',$data);
    }
}