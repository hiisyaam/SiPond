<?php

namespace App\Controllers;

class Absen extends BaseController
{
    // public function index():string
    // {
    //     helper('date');
    //     $data = [
    //         'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s'))
    //     ];
    //     return view('dashboard',$data);
    // }

    public function SD():string
    {
        helper('date');
        $data = [
            'title' => 'Absensi SD',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'Unit SD'         
        ];
        return view('absensi',$data);
    }

    public function SMP():string
    {
        helper('date');
        $data = [
            'title' => 'Absensi SMP',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'Unit SMP'         
        ];
        return view('absensi',$data);
    }

    public function SMA():string
    {
        helper('date');
        $data = [
            'title' => 'Absensi SMA',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'Unit SMA'         
        ];
        return view('absensi',$data);
    }

    public function karyawan():string
    {
        helper('date');
        $data = [
            'title' => 'Absensi Karyawan',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),  
            'unit' => 'Karyawan'         
        ];
        return view('absensi',$data);
    }
}