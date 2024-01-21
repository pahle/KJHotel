<?php $this->extend('layout/layout') ?>

<?php $this->section('content') ?>

<section class="container pages-container">
    <div class="row">
        <div class="col-12 text-center section-title">
            Greenhouse
        </div>
    </div>

    <?php
    // dd($greenhouse);
    ?>


    <div class="row mb-5">
        <form action="" method="GET" class="w-100">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="keyword">
                <button class="btn btn-outline-secondary border border-1 border-end-0 border-tertiary" type="submit" id="button-addon2">Search</button>
                <a href="/greenhouse" class="btn btn-outline-secondary border border-1 border-tertiary" id="button-addon2">Reset</a>
            </div>
        </form>
    </div>

    <div class="row">
        <?php
        if (empty($greenhouse)) :
            echo '<div class="col-12 text-center">Data tidak ditemukan</div>';
         else :
            foreach ($greenhouse as $key => $value) : ?>
                <div class="col-12 col-md-3">
                    <div class="card room-card">
                        <img src="<?= base_url('img/' . $value['gambar']) ?>" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4><?= $value['nama_tanaman'] ?></h4>
                            <h5><?= $value['nama_latin'] ?></h5>
                            <p><?= $value['deskripsi'] ?></p>
                        </div>
                    </div>
                </div>
        <?php
            endforeach;
            endif;
        ?>
    </div>
    </div>
</section>

<?php $this->endSection(); ?>