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
    <form action="/admin/menu/update/<?= $menu['id'] ?>" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
        <?= csrf_field() ?>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control <?= $validation->hasError('nama') ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= $menu['nama'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('nama') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="bahan" class="form-label">Bahan</label>
            <input type="text" class="form-control <?= $validation->hasError('bahan') ? 'is-invalid' : '' ?>" id="bahan" name="bahan" value="<?= $menu['bahan'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('bahan') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select class="form-select <?= $validation->hasError('kategori') ? 'is-invalid' : '' ?>" id="kategori" name="kategori">
                <option <?php if($menu['kategori'] == null): echo 'selected'; endif; ?> disabled value="">Choose...</option>
                <option <?php if($menu['kategori'] == 'Food'): echo 'selected'; endif; ?> value="Food">Food</option>
                <option <?php if($menu['kategori'] == 'Coffee'): echo 'selected'; endif; ?> value="Coffee">Coffee</option>
                <option <?php if($menu['kategori'] == 'Kind of tea'): echo 'selected'; endif; ?> value="Kind of tea">Kind of tea</option>
                <option <?php if($menu['kategori'] == 'Cocktail'): echo 'selected'; endif; ?> value="Cocktail">Cocktail</option>
                <option <?php if($menu['kategori'] == 'Mocktail'): echo 'selected'; endif; ?> value="Mocktail">Mocktail</option>
                <option <?php if($menu['kategori'] == 'Fresh juice'): echo 'selected'; endif; ?> value="Fresh juice">Fresh juice</option>
                <option <?php if($menu['kategori'] == 'Milkshake'): echo 'selected'; endif; ?> value="Milkshake">Milkshake</option>
                <option <?php if($menu['kategori'] == 'Beer'): echo 'selected'; endif; ?> value="Beer">Beer</option>
                <option <?php if($menu['kategori'] == 'Squash'): echo 'selected'; endif; ?> value="Squash">Squash</option>
                <option <?php if($menu['kategori'] == 'Mineral water'): echo 'selected'; endif; ?> value="Mineral water">Mineral water</option>
                <option <?php if($menu['kategori'] == 'Healthy'): echo 'selected'; endif; ?> value="Healthy">Healthy</option>
                <option <?php if($menu['kategori'] == 'Traditional'): echo 'selected'; endif; ?> value="Traditional">Traditional</option>
                <option <?php if($menu['kategori'] == 'Alcohol & Spirit'): echo 'selected'; endif; ?> value="Alcohol & Spirit">Alcohol & Spirit</option>
            </select>
            <div class="invalid-feedback">
                <?= $validation->getError('kategori') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control  <?= $validation->hasError('harga') ? 'is-invalid' : '' ?>" id="harga" name="harga" value="<?= $menu['harga'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('harga') ?>
            </div>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control <?= $validation->hasError('gambar') ? 'is-invalid' : '' ?>" id="gambar" name="gambar" value="<?= $menu['gambar'] ?>">
            <div class="invalid-feedback">
                <?= $validation->getError('gambar') ?>
            </div>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
        <a href="/admin/menu" class="btn btn-danger">Cancel</a>
    </form>
</div>
<?= $this->endSection() ?>