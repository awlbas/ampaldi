<?php get_header(); ?>

<!-- hero schene -->
<div class="jumbotron mb-6">
  <div class="container text-center">
    <h1 class="display-4">MANUFAKTUR & DISTRIBUTOR ADHESIVE</h1>
  </div>
</div>

<!-- sub head -->
<div class="container">
  <h2 class="sub-head">PRODUK UNGGULAN</h1>
</div>
<!-- slider -->
<div class="container mb-6">
  <div class="card-container">
    <?php for ($x = 0; $x <= 5; $x++) : ?>
      <div class="card-slider">
        <div class="card text-white bg-dark h-100">
          <div class="card-header">G-PLAST 306</div>
          <amp-img 
            src="<?= get_template_directory_uri(); ?>/assets/images/maine.jpg" 
            width="400" height="500" layout="responsive" class="card-img-top" alt="...">
          </amp-img>
          <div class="card-footer btn-primary">
            <small class="text-muted">LIHAT</small>
          </div>
        </div>
      </div>
    <?php endfor?>
  </div>
</div>

<!-- sub head -->
<div class="container">
  <h2 class="sub-head">PRODUK KAMI</h1>
</div>
<div class="container mb-6">
  <div class="row">
    <?php for ($x = 0; $x <= 3; $x++) : ?>
      <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
        <div class="card text-center">
            <div class="card-body">
              <h5 class="card-title display-4">EPOXY ADHESIVE</h5>
              <div class="strip-wrap mb-4">
                <div class="strip"></div>
              </div>
              <p class="card-text">Lem epoxy resin dan hardener yang dapat digunakan pada sektor industri manufaktur ataupun sektor konstruksi.</p>
              <!-- <a href="#" class="btn btn-primary">LIHAT</a> -->
            </div>
            <div class="card-footer text-muted btn-primary">LIST PRODUK</div>
        </div>
      </div>
    <?php endfor?>
  </div>

  <div class="card text-center">
    <div class="card-body">
      <h5 class="card-title display-4">CUSTOMIZE ADHESIVE</h5>
      <div class="strip-wrap mb-4">
                <div class="strip"></div>
              </div>
      <p class="card-text">Lem epoxy resin dan hardener yang dapat digunakan pada sektor industri manufaktur ataupun sektor konstruksi.</p>
      <!-- <a href="#" class="btn btn-primary">LIHAT</a> -->
    </div>
    <div class="card-footer text-muted btn-primary">HUBUNGI KAMI</div>
  </div>
</div>

<div class="card-group">
  <div class="card text-center">
    <div class="card-body pt-5 bg-primary">
      <i class="fas fa-clock fa-8x text-white"></i>
    </div>
    <p class="font-weight-bold text-white bg-primary pb-3 mb-1">Senin – Jum'at, 08:00 – 17:00</p>
    <div class="card-footer btn-primary mb-2">BUSINESS HOURS</div>
  </div>
  <div class="card text-center">
    <div class="card-body pt-5 bg-primary">
      <i class="fab fa-whatsapp fa-8x text-white"></i>
    </div>
    <p class="font-weight-bold text-white bg-primary pb-3 mb-1">+62 895 1955 7788</p>
    <div class="card-footer btn-primary mb-2">WHATSAPP</div>
  </div>
  <div class="card text-center">
    <div class="card-body pt-5 bg-primary">
      <i class="fas fa-phone fa-8x text-white"></i>
    </div>
    <p class="font-weight-bold text-white bg-primary pb-3 mb-1">(021) 5575 0345 – 46</p>
    <div class="card-footer btn-primary mb-2">TELEPON</div>
  </div>
</div>
<div class="card-group mb-6">
  <div class="card text-center">
    <div class="card-body pt-5 bg-primary">
      <i class="fas fa-wrench fa-8x text-white"></i>
    </div>
    <p class="font-weight-bold text-white bg-primary pb-3 mb-1">+62 895 1955 7788</p>
    <div class="card-footer btn-primary">TECHNICAL SUPPORT</div>
  </div>
  <div class="card text-center">
    <div class="card-body pt-5 bg-primary">
      <i class="fas fa-envelope fa-8x text-white"></i>
    </div>
    <p class="font-weight-bold text-white bg-primary pb-3 mb-1">gls@gilanglemindo.co.id</p>
    <div class="card-footer btn-primary">E-MAIL</div>
  </div>
  <div class="card text-center">
    <div class="card-body pt-5 bg-primary">
      <i class="fas fa-map-marked-alt fa-8x text-white"></i>
    </div>
    <p class="font-weight-bold text-white bg-primary pb-3 mb-1">Jl. Hr. Rasuna Said KM 4 No. 33</p>
    <div class="card-footer btn-primary">ALAMAT</div>
  </div>
</div>

<?php get_footer(); ?>