<?php $this->extend('layout/layout') ?>

<?php $this->section('content') ?>

<section class="container pages-container">
    <div class="row">
        <div class="col-12 text-center section-title">
            Menu
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <!-- Search and filter categories for menu -->
            <form action="" method="GET" class="w-100">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="keyword" autocomplete="off" autofocus>
                    <button class="btn btn-outline-secondary border border-1 border-end-0 border-tertiary" type="submit" id="button-addon2">Search</button>
                    <a href="/menu" class="btn btn-outline-secondary border border-1 border-tertiary" id="button-addon2">Reset</a>
                </div>
            </form>
            <!-- Filter -->
            <div class="list-group">
                <a href="<?= base_url('menu') ?>" class="list-group-item list-group-item-action">All</a>
                <a href="<?= base_url('menu?categories=Food') ?>" class="list-group-item list-group-item-action">Food</a>
                <a href="<?= base_url('menu?categories=Coffee') ?>" class="list-group-item list-group-item-action">Coffee</a>
                <a href="<?= base_url('menu?categories=Kind%20of%20tea') ?>" class="list-group-item list-group-item-action">Kind of tea</a>
                <a href="<?= base_url('menu?categories=Cocktail') ?>" class="list-group-item list-group-item-action">Cocktail</a>
                <a href="<?= base_url('menu?categories=Mocktail') ?>" class="list-group-item list-group-item-action">Mocktail</a>
                <a href="<?= base_url('menu?categories=Coffee') ?>" class="list-group-item list-group-item-action">Coffee</a>
                <a href="<?= base_url('menu?categories=Fresh%20Juice') ?>" class="list-group-item list-group-item-action">Fresh Juice</a>
                <a href="<?= base_url('menu?categories=Milkshake') ?>" class="list-group-item list-group-item-action">Milkshake</a>
                <a href="<?= base_url('menu?categories=Beer') ?>" class="list-group-item list-group-item-action">Beer</a>
                <a href="<?= base_url('menu?categories=Squash') ?>" class="list-group-item list-group-item-action">Squash</a>
                <a href="<?= base_url('menu?categories=Mineral%20Water') ?>" class="list-group-item list-group-item-action">Mineral Water</a>
                <a href="<?= base_url('menu?categories=Healthy') ?>" class="list-group-item list-group-item-action">Healthy</a>
                <a href="<?= base_url('menu?categories=Traditional') ?>" class="list-group-item list-group-item-action">Traditional</a>
                <a href="<?= base_url('menu?categories=Alcohol%20&%20Spirit') ?>" class="list-group-item list-group-item-action">Alcohol & Spirit</a>
            </div>
        </div>
        <?php
        if (empty($menu)) {
            echo '<div class="col-8 text-center">Data tidak ditemukan</div>';
        }
        foreach ($menu as $key => $value) { ?>
            <div class="col-8 col-md-3">
                <div class="card room-card">
                    <img src="<?= base_url('img/' . $value['gambar']) ?>" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4><?= $value['nama'] ?></h4>
                        <p><?= $value['bahan'] ?></p>
                        <p><?= $value['kategori'] ?></p>
                        <p>Rp. <?= number_format($value['harga'], 0, ',', '.') ?></p>
                        <a href="https://api.whatsapp.com/send?phone=6281806147777" class="btn btn-success">Book Now</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
    </div>
</section>

<?php $this->endSection(); ?>