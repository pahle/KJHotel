<?= $this->extend('admin/layout/layout') ?>

<?= $this->section('adminSection') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/admin/greenhouse/create" class="btn btn-sm btn-outline-secondary">Create</a>
        </div>
    </div>
</div>

<h2><?= $title ?> Data</h2>

<?= $validation->listErrors(); ?>

<div>
    <form action="/admin/greenhouse/update/<?= $greenhouse['id'] ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nama_tanaman" class="form-label">Nama Tanaman</label>
            <input type="text" class="form-control <?= $validation->hasError('nama_tanaman') ? 'is-invalid' : '' ?>" id="nama_tanaman" name="nama_tanaman" value="<?= $greenhouse['nama_tanaman'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nama_tanaman') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="nama_latin" class="form-label">Nama Latin</label>
            <input type="text" class="form-control <?= $validation->hasError('nama_latin') ? 'is-invalid' : '' ?>" id="nama_latin" name="nama_latin" value="<?= $greenhouse['nama_latin'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nama_latin') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control <?= $validation->hasError('deskripsi') ? 'is-invalid' : '' ?>" id="deskripsi" name="deskripsi" value="<?= $greenhouse['deskripsi'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('deskripsi') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control <?= $validation->hasError('gambar') ? 'is-invalid' : '' ?>" id="gambar" name="gambar" value="<?= $greenhouse['gambar'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('gambar') ?>
            </div>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
        <a href="/admin/greenhouse" class="btn btn-danger">Cancel</a>
    </form>
</div>
<?= $this->endSection() ?>