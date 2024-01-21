<?= $this->extend('admin/layout/layout') ?>

<?= $this->section('adminSection') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"><?= $title ?></h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/admin/menu/create" class="btn btn-sm btn-outline-secondary">Create</a>
        </div>
    </div>
</div>

<h2><?= $title ?> Data</h2>
<div>
    <form action="/admin/menu/save" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control  <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama">
            <div class="invalid-feedback">
                <?= $validation->getError('nama') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="bahan" class="form-label">Bahan</label>
            <input type="text" class="form-control  <?= $validation->hasError('bahan') ? 'is-invalid' : '' ?>" id="bahan" name="bahan">
            <div class="invalid-feedback">
                <?= $validation->getError('bahan') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select <?= $validation->hasError('kategori') ? 'is-invalid' : '' ?>" id="kategori" name="kategori">
                <option selected disabled value="">Choose...</option>
                <option value="Food">Food</option>
                <option value="Coffee">Coffee</option>
                <option value="Kind of tea">Kind of tea</option>
                <option value="Cocktail">Cocktail</option>
                <option value="Mocktail">Mocktail</option>
                <option value="Fresh juice">Fresh juice</option>
                <option value="Milkshake">Milkshake</option>
                <option value="Beer">Beer</option>
                <option value="Squash">Squash</option>
                <option value="Mineral water">Mineral water</option>
                <option value="Healthy">Healthy</option>
                <option value="Traditional">Traditional</option>
                <option value="Alcohol & Spirit">Alcohol & Spirit</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('kategori') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control  <?= $validation->hasError('harga') ? 'is-invalid' : '' ?>" id="harga" name="harga">
            <div class="invalid-feedback">
                <?= $validation->getError('harga') ?>
            </div>
        </div>

        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control  <?= $validation->hasError('gambar') ? 'is-invalid' : '' ?>" id="gambar" name="gambar">
            <div class="invalid-feedback">
                <?= $validation->getError('gambar') ?>
            </div>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
</div>
<?= $this->endSection() ?>