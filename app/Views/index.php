<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>
<!-- Main Start -->
<!-- Hero Section -->
<section id="page-header" class="home-header" style="background-image: url('<?= base_url(); ?>/assets/img/home-hero.png')">
  <div class="max-width">
    <div class="section-content">
      <p>Building Bridges, Securing Pathways</p>
      <p><span>With AIDevGuard </span></p>

      <button class="secondary">Try Our New AIDevGuard</button>
    </div>
  </div>
  <a data-target="#home-why" class="scroll-down">
    <div class="mouse">
      <span></span>
    </div>
    <span>Scroll Down</span>
  </a>
</section>

<!-- Why JMS Section -->
<section id="home-why">
  <nav class="navbar section-nav">
    <div id="header" class="max-width navbar-wrapper">
      <ul id="navigation_bar">
        <li><a class="active" data-target="#home-why">Why JMS Connect Solution?</a></li>
        <li><a data-target="#home-services">Our Services</a></li>
        <li><a data-target="#home-client">Our Client</a></li>
        <li><a data-target="#home-blog">Latest News</a></li>
      </ul>
    </div>
  </nav>

  <div class="max-width">
    <div class="section-title">
      <h2>Why JMS Connect Solution?</h2>
      <hr class="bottom-line center" />
      <div class="section-content">
        <p>
          Choose JMS Connect Solution for our expertise in developing secure, fast static websites, robust network services, and advanced IT security. We deliver customized solutions to meet your business needs, ensuring a reliable and
          efficient online presence.
        </p>
      </div>
    </div>
  </div>

  <!-- Statistics Section -->
  <div class="home-stats">
    <div class="max-width">
      <div class="section-content">
        <p>So you can defend at speed and scale.</p>
      </div>
      <div class="stats-wrapper">
        <div class="stats-text">
          <h4>100 M</h4>
          <p>Cloud Events Processed</p>
        </div>
        <div class="stats-text">
          <h4>1000+</h4>
          <p>Exploit Attempts Detected</p>
        </div>
        <div class="stats-text">
          <h4>200 K</h4>
          <p>Malware Executions Blocked</p>
        </div>
        <div class="stats-text">
          <h4>5.2 B</h4>
          <p>Attacks Prevented Inline</p>
        </div>
        <div class="stats-text">
          <h4>2.3 M</h4>
          <p>New Unique Attack Objects Identified</p>
        </div>
        <div class="stats-text">
          <h4>500 M</h4>
          <p>New Unique Objects Analyzed</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section id="home-services" class="articles home-service">
  <div class="max-width">
    <div class="section-content">
      <p>Our Services</p>
      <hr class="bottom-line left" />
    </div>
    <div class="container">
      <div class="blog-card">
        <div class="card-header">
          <img src="<?= base_url(); ?>/assets/img/itconsulting.jpg" alt="rover" />
        </div>
        <div class="card-body">
          <h4>IT Consulting</h4>
          <a href="<?= base_url('it-consulting'); ?>" class="read-more">
            Book service
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
          <a href="<?= base_url('cloud-solutions'); ?>" class="read-more">
            Book service
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
          <a href="<?= base_url('cyber-security'); ?>" class="read-more">
            Book service
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Client Section -->
<section id="home-client" class="home-client">
  <div class="max-width">
    <div class="section-content">
      <div class="col-left">
        <p>Hear how we're helping customers secure their digital transformation.</p>
        <hr class="bottom-line left" style="margin-top: 12px" />
      </div>
      <div class="col-right">
        <button class="normal">See Testimonial</button>
      </div>
    </div>
    <div class="section-title">
      <h2>Over 250,000+ customers trust us with their cybersecurity solutions</h2>
      <div class="client-wrapper">
        <div class="client-text">
          <i class="bx bx-store"></i>
          <p>Retail</p>
        </div>
        <div class="client-text">
          <i class="bx bxs-graduation"></i>
          <p>Education</p>
        </div>
        <div class="client-text">
          <i class="bx bx-chip"></i>
          <p>Technology</p>
        </div>
        <div class="client-text">
          <i class="bx bx-money-withdraw"></i>
          <p>Finance</p>
        </div>
        <div class="client-text">
          <i class="bx bx-clinic"></i>
          <p>Healthcare</p>
        </div>
        <div class="client-text">
          <i class="bx bx-broadcast"></i>
          <p>Communication</p>
        </div>
        <div class="client-text">
          <i class="bx bxs-factory"></i>
          <p>Manufacturing</p>
        </div>
        <div class="client-text">
          <i class="bx bx-capsule"></i>
          <p>Pharmaceutical</p>
        </div>
        <div class="client-text">
          <i class="bx bx-shield"></i>
          <p>SCADA/ICS</p>
        </div>
        <div class="client-text">
          <i class="bx bxs-business"></i>
          <p>All Industries</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Latest News Section -->
<section id="home-blog">
  <div class="max-width">
    <div class="section-content">
      <p style="text-align: left">Our Latest News</p>
      <hr class="bottom-line left" style="margin-bottom: 32px" />
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

<!-- Newsletter Section -->
<section class="home-newsletter" style="background-image: url('<?= base_url(); ?>/assets/img/blog-hero.jpg')">
  <div class="max-width">
    <div class="newstext">
      <div class="section-content">
        <p>Get the latest news, invites to events, and threat alerts</p>
      </div>
    </div>
    <div class="form-wrapper">
      <div class="form">
        <div class="input-wrapper home">
          <input type="text" id="email" name="email" required />
          <div class="underline"></div>
          <label for="email">Your email</label>
        </div>
        <button type="submit" class="secondary">Sign Up</button>
      </div>
      <p>By submitting this form, you agree to our <span>Terms of Use</span> and acknowledge our <span>Privacy Statement</span>.</p>
    </div>
  </div>
</section>
<!-- Main End -->

<?= $this->endSection(); ?>