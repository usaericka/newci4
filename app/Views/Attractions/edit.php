<?= $this->extend('layouts/frontend'); ?>

<?= $this->section('title') ?>Edit Attractions
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card container mt-3 mb-4" style="width: 50rem;">
    <div class="card-body">
        <a href="<?= base_url('/') ?>" class="btn-close float-end mb-2" aria-label="Close"></a>

        <?= form_open('update') ?>
        <input type="number" class="form-control" id="id" name="id" value="<?= $id ?>">
        <div class=" mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="" value=<?= $name ?>>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3"><?= $description ?></textarea>
        </div>
        <div class="mb-3">
            <label for="img_url" class="form-label">Image URL</label>
            <input type="text" class="form-control" id="img_url" name="img_url" value="<?= $img_url ?>">
        </div>
        <button class=" btn btn-info">Update</button>

        <?= form_close() ?>
    </div>
</div>
<?= $this->endSection() ?>