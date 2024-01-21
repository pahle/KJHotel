<?= $this->extend('admin/layout/layout') ?>

<?= $this->section('adminSection') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/admin/room/create" class="btn btn-sm btn-outline-secondary">Create</a>
        </div>
    </div>
</div>

<h2><?= $title ?> Data</h2>

<div>
    <form action="/admin/room/save" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control  <?= $validation->hasError('type') ? 'is-invalid' : '' ?>" id="type" name="type">
            <div class="invalid-feedback">
                <?= $validation->getError('type') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="rate" class="form-label">Rate</label>
            <input type="number" class="form-control  <?= $validation->hasError('rate') ? 'is-invalid' : '' ?>" id="rate" name="rate">
            <div class="invalid-feedback">
                <?= $validation->getError('rate') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="room_left" class="form-label">Room Left</label>
            <input type="text" class="form-control  <?= $validation->hasError('room_left') ? 'is-invalid' : '' ?>" id="room_left" name="room_left">
            <div class="invalid-feedback">
                <?= $validation->getError('room_left') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control  <?= $validation->hasError('image') ? 'is-invalid' : '' ?>" id="image" name="image">
            <div class="invalid-feedback">
                <?= $validation->getError('image') ?>
            </div>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
<?= $this->endSection() ?>