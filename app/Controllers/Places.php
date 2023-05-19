<?php

namespace App\Controllers;

class Places extends BaseController
{
    public function mbs()
    {
        $data = [
            'title' => 'Marina Bay Sands',
        ];
        return view('places/mbs', $data);
    }
    
    public function cq()
    {
        $data = [
            'title' => 'Clarke Quay',
        ];
        return view('places/cq', $data);
    }

    public function si()
    {
        $data = [
            'title' => 'Sentosa Island',
        ];
        return view('places/si', $data);
    }

    public function ct()
    {
        $data = [
            'title' => 'Chinatown',
        ];
        return view('places/ct', $data);
    }
}