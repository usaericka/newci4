<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Attractions extends BaseController
{
   private $model;

   public function __construct()
   {
      $this->model = new \App\Models\AttractionModel;
   }

   public function new()
   {
      return view('Attractions/new');
   }

   public function create()
   {
      $post = $this->request->getPost();

      if ($this->model->save($post)) {
         return redirect()->to("/");
      } else {
         dd($this->model->errors());
      }
      return view('Attractions/new');
   }

   public function edit($id)
   {

      $attraction = $this->model->find($id);

      return view('Attractions/edit', $attraction);
   }

   public function update()
   {
      $post = $this->request->getPost();

      if ($this->model->save($post)) {
         return redirect()->to("/");
      } else {
         dd($this->model->errors());
      }
   }

   public function delete($id)
   {
      if ($this->model->delete($id)) {
         return redirect()->to("/");
      }
   }
}