<?php $this->extend('layout/layout') ?>

<?php $this->section('content') ?>
<!-- Hero -->
<div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <?php 
        foreach ($slider as $key => $value) {
            if ($key == 0) {
                echo '<div class="carousel-item active">';
            } else {
                echo '<div class="carousel-item">';
            }
            echo '<img src="'.base_url('img/'.$value['gambar']).'" class="d-block w-100" alt="'.$value['title'].'">';
            echo '</div>';
        }
        ?>
    </div>
</div>

<!-- Hero CTA -->
<div class="hero-cta w-100 text-white">
    <div class="container">
        <div>
            Make a reservation now!
        </div>
        <a href="https://api.whatsapp.com/send?phone=6281703617777" class="btn btn-success">Book a room</a>
    </div>
</div>

<!-- Hero Message -->
<div class="hero-message">
    <h2>Selamat datang di</h2>
    <h1>KJHotel</h1>
</div>
</div>

<!-- Room -->
<div class="container my-5 position-relative">
    <div class="row">
        <div class="col-12 text-center section-title">
            Kamar
        </div>
    </div>

    <div class="row gap-md-0">
        <?php 
        foreach ($room as $key => $value) { ?>        
        <div class="col-md-3 mb-4 col-12">
            <div class="card-facilities position-relative room-card">
                <img src="<?= base_url('img/'.$value['image']) ?>" alt="" class="w-100">
                <div class="overlay">
                    <div class="overlay-content">
                        <h5><?= $value['type'] ?></h5>
                        <p>Rp. <?= number_format($value['rate'], 0, ',', '.') ?></p>
                        <a href="https://api.whatsapp.com/send?phone=6281703617777" class="btn btn-success">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- CTA -->
<section class="container my-5 cta">
    <div class="row align-items-center">
        <div class="col-12 col-md-6 cta-text py-3">
            Book your room now!
        </div>
        <div class="col-12 col-md-6">
            <a href="https://api.whatsapp.com/send?phone=6281703617777" class="btn btn-success">Book a room</a>
        </div>
    </div>
</section>

<!-- Facilities -->
<section class="container my-5">
    <div class="row">
        <div class="col-12 text-center section-title">
            Facilities
        </div>
    </div>

    <div class="row gap-md-0">
        <div class="col-md-6 mb-4 col-12">
            <div class="card-facilities position-relative">
                <img src="<?= base_url('assets/img/meeting.jpeg') ?>" alt="" class="w-100">
                <div class="overlay">
                    <div class="overlay-content">
                        <h5>MEETING</h5>
                        <p>Package</p>
                        <a href="https://api.whatsapp.com/send?phone=6281703617777&text=Dear%20KJ%20Hotel%20Yogyakarta%2C%0AI%20want%20to%20know%20the%20information%20and%20pricelist%20for%20Meeting%20package%2C%0AName%20%3A%0ADate%20%3A%0APax%20%3A%0ASpecial%20Request%20%3A%20" class="btn btn-success">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4 col-12">
            <div class="card-facilities position-relative">
                <img src="<?= base_url('assets/img/wedding.jpeg') ?>" alt="" class="w-100">
                <div class="overlay">
                    <div class="overlay-content">
                        <h5>WEDDING</h5>
                        <p>Package</p>
                        <a href="https://api.whatsapp.com/send?phone=6281703617777&text=Dear%20KJ%20Hotel%20Yogyakarta%2C%0AI%20want%20to%20know%20the%20information%20and%20pricelist%20for%20Wedding%20package%2C%0AName%20%3A%0ADate%20%3A%0APax%20%3A%0ASpecial%20Request%20%3A%20" class="btn btn-success">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4 col-12">
            <div class="card-facilities position-relative">
                <img src="<?= base_url('assets/img/pool.jpeg') ?>" alt="" class="w-100">
                <div class="overlay">
                    <div class="overlay-content">
                        <h5>POOL</h5>
                        <p>Package</p>
                        <a href="https://api.whatsapp.com/send?phone=6281703617777&text=Dear%20KJ%20Hotel%20Yogyakarta%2C%0AI%20want%20to%20know%20the%20information%20and%20pricelist%20for%20Pool%20package%2C%0AName%20%3A%0ADate%20%3A%0APax%20%3A%0ASpecial%20Request%20%3A%20" class="btn btn-success">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4 col-12">
            <div class="card-facilities position-relative">
                <img src="<?= base_url('assets/img/gym.jpeg') ?>" alt="" class="w-100">
                <div class="overlay">
                    <div class="overlay-content">
                        <h5>GYM</h5>
                        <p>Package</p>
                        <a href="https://api.whatsapp.com/send?phone=6281703617777&text=Dear%20KJ%20Hotel%20Yogyakarta%2C%0AI%20want%20to%20know%20the%20information%20and%20pricelist%20for%20GYM%20package%2C%0AName%20%3A%0ADate%20%3A%0APax%20%3A%0ASpecial%20Request%20%3A%20" class="btn btn-success">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php $this->endSection(); ?>