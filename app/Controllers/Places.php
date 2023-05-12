<?php

namespace App\Controllers;

class Places extends BaseController
{
    public function mbs()
    {
        $data = [
            'title' => 'MBS',
        ];
        return view('places/mbs', $data);
    }

    public function gbtb()
    {
        $data = [
            'title' => 'GBTB',
        ];
        return view('places/gbtb', $data);
    }

    public function cq()
    {
        $data = [
            'title' => 'CQ',
        ];
        return view('places/cq', $data);
    }
}