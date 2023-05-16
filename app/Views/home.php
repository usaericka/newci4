<?= $this->extend('layouts/default'); ?>

<?= $this->section('title') ?><?= $title ?><?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="content">
   <a href="<?= base_url('new') ?>" class="btn btn-success">New</a>

   <div class="container-fluid py-5 mb-5">
      <div class="d-flex">
         <?php foreach ($attractions as $attraction) : ?>
            <div class="card" style="width: 18rem;">
               <img src="<?= $attraction['img_url'] ?>" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title"><?= $attraction['name'] ?></h5>
                  <p class="card-text"><?= $attraction['description'] ?></p>
                  <a href="<?= base_url("edit/$attraction[id]") ?>" class="btn btn-primary">Edit</a>
                  <a href="<?= base_url("delete/$attraction[id]") ?>" class="btn btn-danger">Delete</a>
               </div>
            </div>
         <?php endforeach ?>
      </div>
   </div>
</div>
<?= $this->endSection() ?>
