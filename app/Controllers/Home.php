<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $model = new \App\Models\AttractionModel();

        $attractions = $model->findAll();
        $data = [
            'title' => 'Attractions',
            'attractions' => $attractions,

        ];
        return view('home', $data);
    }
}