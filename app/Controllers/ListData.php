<?php

namespace App\Controllers;

class ListData extends BaseController
{
    public function index():string
    {
        helper('date');
        $data = [
            'title' => 'List Data Santri SD',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'unit' => 'SD'
        ];
        return view('tampilDataSantri',$data);
    }

    public function SMP():string
    {
        helper('date');
        $data = [
            'title' => 'List Data Santri SMP',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'unit' => 'SMP'
        ];
        return view('tampilDataSantri',$data);
    }

    public function SMA():string
    {
        helper('date');
        $data = [
            'title' => 'List Data Santri SMA',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'unit' => 'SMA'
        ];
        return view('tampilDataSantri',$data);
    }

    public function guru():string
    {
        helper('date');
        $data = [
            'title' => 'List Data Guru',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'jabatan' => 'Guru'
        ];
        return view('tampilDataKaryawan',$data);
    }

    public function staffTU():string
    {
        helper('date');
        $data = [
            'title' => 'List Data Staff TU',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'jabatan' => 'Staff TU'
        ];
        return view('tampilDataKaryawan',$data);
    }

    public function amil():string
    {
        helper('date');
        $data = [
            'title' => 'List Data Amil',
            'tanggal_sekarang' => format_hari_tanggal(date('Y-m-d H:i:s')),
            'jabatan' => 'Amil'
        ];
        return view('tampilDataKaryawan',$data);
    }
}