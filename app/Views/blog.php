<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>
<!-- Main Start -->
<!-- Hero Section -->
<section id="page-header" class="blog-header" style="background-image: url('<?= base_url(); ?>/assets/img/blog-hero.jpg')">
  <div class="max-width">
    <div class="section-title">
      <h2>Blog</h2>
      <hr class="bottom-line center" />
    </div>

    <div class="section-content">
      <p>Stay updated with the latest trends in IT, cybersecurity tips, and insights on network solutions through our informative blog articles.</p>

      <form>
        <div class="search">
          <input type="text" id="search" name="search" placeholder="Search a topic..." />
        </div>
        <i class="bx bx-search"></i>
      </form>
    </div>
  </div>

  <a data-target="#blogs" class="scroll-down">
    <div class="mouse">
      <span></span>
    </div>
    <span>Scroll Down</span>
  </a>
</section>

<!-- Blog Section -->
<section id="blogs">
  <div class="max-width">
    <div class="blog-card hero">
      <div class="card-header">
        <img src="https://assets.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/2023/05/30/Screenshot_2023_0530_211600-2088092604.png" alt="rover" />
      </div>
      <div class="card-body">
        <span class="tag tag-yellow">Network News</span>
        <h4> Satu Per Satu Nama Penerima Dana dalam Korupsi BTS 4G Jadi Tersangka </h4>
        <p>Sejumlah nama yang menerima aliran dana dalam korupsi proyek BTS 4G ditetapkan jadi tersangka. Kali ini Sadikin Rusli. Di persidangan sebelumnya, Menpora Dito Ariotedjo juga disebut menerima Rp 27 miliar. </p>
        <div class="user">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e" alt="user" />
          <div class="user-info">
            <h5>John Doe</h5>
            <small>3d ago</small>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="blog-card">
        <div class="card-header">
          <img src="<?= base_url(); ?>/assets/img/artikel1.jpg" alt="rover" />
        </div>
        <div class="card-body">
          <span class="tag tag-yellow">Security</span>
          <h4>Teknologi Semakin Canggih, Amankan Data Pribadimu Jangan Sampai Bocor</h4>
          <p>KTP, NIK, nomor HP, dan email adalah data pribadi yang harus dijaga kerahasiaannya...</p>
          <div class="user">
            <img src="https://images.unsplash.com/photo-1589696485114-9e2f81d83484" alt="user" />
            <div class="user-info">
              <h5>July Dec</h5>
              <small>2h ago</small>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-header">
          <img src="<?= base_url(); ?>/assets/img/artikel2.jpg" alt="ballons" />
        </div>
        <div class="card-body">
          <span class="tag tag-purple">Software Development</span>
          <h4>Apa Itu Application Software? Ini Pengertian dan Contohnya</h4>
          <p>Selain terdapat perangkat keras (hardware), sebuah sistem komputer juga perlu menggunakan perangkat lunak (software)...</p>
          <div class="user">
            <img src="https://images.unsplash.com/photo-1521061972219-a1894a27a040" alt="user" />
            <div class="user-info">
              <h5>Eyup Ucmaz</h5>
              <small>Yesterday</small>
            </div>
          </div>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-header">
          <img src="<?= base_url(); ?>/assets/img/artikel3.png" alt="city" />
        </div>
        <div class="card-body">
          <span class="tag tag-pink">Cloud Computing</span>
          <h4>Hasil Studi: 90% Perusahaan Global Telah Adopsi Zero Trust</h4>
          <p>Menurut hasil studi terbaru dari Zscaler menemukan bahwa lebih dari 90% pemimpin TI di perusahaan global yang sudah...</p>
          <div class="user">
            <img src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f" alt="user" />
            <div class="user-info">
              <h5>Carrie Brewer</h5>
              <small>1w ago</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Main End -->

<?= $this->endSection(); ?>