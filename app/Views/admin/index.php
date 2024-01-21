<?= $this->extend('admin/layout/layout') ?>

<?= $this->section('adminSection') ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>
<div class="row text-center">
    <div class="col-sm-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Slider</h5>
                <h2 class="card-text"><?= $slider ?></h2>
                <span>Data</span>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Room</h5>
                <h2 class="card-text"><?= $room ?></h2>
                <span>Data</span>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Menu</h5>
                <h2 class="card-text"><?= $menu ?></h2>
                <span>Data</span>
            </div>
        </div>
    </div>
    <div class="col-sm-4 mb-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Greenhouse</h5>
                <h2 class="card-text"><?= $greenhouse ?></h2>
                <span>Data</span>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>