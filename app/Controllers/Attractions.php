<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Attractions extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = new \App\Models\AttractionModel();
    }

    public function create()
    {
        $place = $this->request->getPost();
        if ($this->model->save($place)) {
            return redirect()->to(base_url('/'));
        } else {
            dd($this->model->errors());
        }
    }

    public function edit($id)
    {
        $attraction = $this->model->find($id);

        return view('Attractions/edit', $attraction);
    }

    public function update()
    {
        $place = $this->request->getPost();

        if ($this->model->save($place)) {
            return redirect()->to(base_url('/'));
        } else {
            dd($this->model->errors());
        }
    }

    public function delete($id)
    {
        if ($this->model->delete($id)) {
            return  redirect()->to(base_url('/'));
        }
    }
}