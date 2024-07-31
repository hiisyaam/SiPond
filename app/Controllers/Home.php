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
}
