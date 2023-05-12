<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Attractions',
        ];
        return view('home' ,$data);
    }
}
