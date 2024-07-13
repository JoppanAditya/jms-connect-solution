<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>
<!-- Main Start -->
<!-- Hero Section -->
<section id="page-header" class="about-header" style="background-image: url('<?= base_url(); ?>/assets/img/service-hero.jpg')">
  <div class="max-width">
    <div class="section-title">
      <h2>IT Solutions for Your Business</h2>
      <hr class="bottom-line center" />
    </div>

    <div class="section-content">
      <p>We provide innovative solutions to help your business grow</p>
    </div>
  </div>

  <a data-target="#service-work" class="scroll-down">
    <div class="mouse">
      <span></span>
    </div>
    <span>Scroll Down</span>
  </a>
</section>

<!-- Work Section -->
<section id="service-work" class="about-mission">
  <nav class="navbar section-nav">
    <div id="header" class="max-width navbar-wrapper">
      <ul id="navigation_bar">
        <li><a class="active" data-target="#service-work">How Our Company Work</a></li>
        <li><a data-target="#service-help">What We Can Help</a></li>
        <li><a data-target="#service-solution">What We Offer</a></li>
      </ul>
    </div>
  </nav>

  <div class="max-width">
    <div class="section-content">
      <div class="column col-left">
        <div class="section-title">
          <h2>How JMS Connect Solution Works</h2>
          <hr class="bottom-line left" />
        </div>
        <p>We understand your needs, develop a tailored static website, implement network and security solutions, and provide ongoing support for optimal performance.</p>
      </div>
      <div class="column col-right"><img src="<?= base_url(); ?>/assets/img/contoh.jpg" alt="" /></div>
    </div>
  </div>
</section>

<!-- We Help Section -->
<section class="service-help" id="service-help">
  <div class="max-width">
    <div class="section-title">
      <h2>How We Can Help You</h2>
      <hr class="bottom-line center" />
    </div>
    <div class="section-content">
      <p>We create secure, fast static websites and offer robust network and IT security solutions to meet your business needs.</p>
    </div>

    <div class="video">
      <video autoplay muted loop src="<?= base_url(); ?>/assets/img/1.mp4"></video>
    </div>
  </div>
</section>

<!-- Solution Section -->
<section id="service-solution" class="articles">
  <div class="max-width">
    <div class="section-title">
      <h2>Our Solutions</h2>
      <hr class="bottom-line left" />
    </div>
    <div class="section-content">
      <p>Discover how our tailored static website solutions, network services, and IT security can enhance your business's digital presence.</p>
    </div>
    <div class="container">
      <div class="blog-card">
        <div class="card-header">
          <img src="<?= base_url(); ?>/assets/img/itconsulting.jpg" alt="rover" />
        </div>
        <div class="card-body">
          <h4>IT Consulting</h4>
          <p>
            IT Consulting adalah layanan yang membantu pelanggan dalam meningkatkan efisiensi dan produktivitas bisnis melalui penggunaan teknologi informasi yang efektif. Kami menawarkan konsultasi teknis yang komprehensif, mulai dari
            perencanaan strategi IT hingga implementasi dan perawatan infrastruktur, serta dukungan teknis dan pelatihan untuk memastikan pelanggan memiliki sistem yang sesuai dengan kebutuhan bisnis mereka.
          </p>
          <a href="<?= base_url('it-consulting'); ?>" class="read-more">
            Read more
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-header">
          <img src="<?= base_url(); ?>/assets/img/cloudsolutions.jpg" alt="rover" />
        </div>
        <div class="card-body">
          <h4>Cloud Solutions</h4>
          <p>
            Cloud Solutions adalah layanan yang memberikan akses langsung ke sumber daya IT yang dapat disesuaikan dengan kebutuhan bisnis. Dengan menggunakan Cloud Solutions, perusahaan dapat meningkatkan efisiensi, mengurangi biaya,
            dan memperbaiki alokasi modal dan biaya operasional. Layanan ini memungkinkan perusahaan untuk mengelola sumber daya IT secara efektif dan memastikan bahwa aplikasi dan data mereka dapat diakses secara aman dan efisien.
          </p>
          <a href="<?= base_url('cloud-solutions'); ?>" class="read-more">
            Read more
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
      <div class="blog-card">
        <div class="card-header">
          <img src="<?= base_url(); ?>/assets/img/cybersecurity.jpg" alt="rover" />
        </div>
        <div class="card-body">
          <h4>Cybersecurity</h4>
          <p>
            Cybersecurity adalah upaya intens yang dilakukan demi melindungi sistem komputer dan data dari berbagai ancaman maupun akses ilegal. Dalam era transformasi digital, Cybersecurity sangat penting bagi organisasi dan individu
            karena serangan siber dapat memiliki konsekuensi yang serius, termasuk kehilangan data dan informasi yang penting, kerusakan pada sistem, dan bahkan kehilangan uang dan reputasi.
          </p>
          <a href="<?= base_url('cyber-security'); ?>" class="read-more">
            Read more
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Main End -->

<?= $this->endSection(); ?>