<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>
<!-- Main Start -->
<!-- Hero Section -->
<section id="page-header" class="about-header" style="background-image: url('<?= base_url(); ?>/assets/img/about-hero.png')">
  <div class="max-width">
    <div class="section-title">
      <h2>About Us</h2>
      <hr class="bottom-line center" />
    </div>

    <div class="section-content">
      <p>Our vision is to be the leading provider of secure and efficient static website solutions, empowering businesses to thrive in the digital landscape with innovative network and IT security services</p>
    </div>
  </div>

  <a data-target="#about-who" class="scroll-down">
    <div class="mouse">
      <span></span>
    </div>
    <span>Scroll Down</span>
  </a>
</section>

<!-- Who We Are Section -->
<section id="about-who">
  <nav class="navbar section-nav">
    <div id="header" class="max-width navbar-wrapper">
      <ul id="navigation_bar">
        <li><a class="active" data-target="#about-who">Who We Are</a></li>
        <li><a data-target="#about-mission">Our Mission</a></li>
        <li><a data-target="#about-do">What We Do</a></li>
        <li><a data-target="#about-team">Leadership Team</a></li>
      </ul>
    </div>
  </nav>

  <div class="max-width">
    <div class="section-img">
      <img src="<?= base_url(); ?>/assets/img/logo.png" height="100" width="100" alt="jms logo">
    </div>
    <div class="section-content">
      <p>
        JMS Connect Solutions, the trusted expert in static website development, delivers innovative network services and IT security solutions to ensure a secure and efficient online presence, empowering businesses in the rapidly
        evolving digital landscape.
      </p>
    </div>
  </div>

  <!-- Statistics Section -->
  <div class="stats">
    <div class="max-width stats-wrapper">
      <div class="stats-text">
        <h4>1998</h4>
        <p>Founded</p>
      </div>
      <div class="stats-text">
        <h4>2000+</h4>
        <p>Employees</p>
      </div>
      <div class="stats-text">
        <h4>1500+</h4>
        <p>Security Experts</p>
      </div>
      <div class="stats-text">
        <h4>10000+</h4>
        <p>Customers Protected</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Mission Section -->
<section class="about-mission" id="about-mission">
  <div class="max-width">
    <div class="section-content">
      <div class="column col-left">
        <div class="section-title">
          <h2>Our Mission</h2>
          <hr class="bottom-line left" />
        </div>
        <p>To become the foremost provider of reliable and high-performance static website solutions, enabling businesses to excel in the digital arena through cutting-edge network and IT security services.</p>
      </div>
      <div class="column col-right"><img src="<?= base_url(); ?>/assets/img/about-mission.png" alt="People chatting with coworker at office" /></div>
    </div>
  </div>
</section>

<!-- What We Do Section -->
<section class="about-do" id="about-do">
  <div class="max-width">
    <div class="section-content">
      <div class="column col-left">
        <img src="<?= base_url(); ?>/assets/img/about-do.png" alt="People chatting with coworker at office" />
      </div>
      <div class="column col-right">
        <div class="section-title">
          <h2>What We Do</h2>
          <hr class="bottom-line right" />
        </div>
        <p>We create fast, secure static websites with robust network solutions and advanced IT security measures.</p>
      </div>
    </div>
  </div>
</section>

<!-- Our Team Section -->
<section class="about-team" id="about-team">
  <div class="max-width">
    <div class="section-title">
      <h2>JMS Connect Solution Leadership</h2>
      <hr class="bottom-line left" />
    </div>
    <div class="section-content">
      <p>Meet Our Leadership Team</p>

      <div class="card-container">
        <div class="card">
          <div class="card-img">
            <img src="<?= base_url(); ?>/assets/img/jovan.jpeg" alt="founder photo" />
          </div>
          <h4>Gede Jovan Tiyo Aditya</h4>
          <p>Founder</p>
        </div>
        <div class="card">
          <div class="card-img">
            <img src="<?= base_url(); ?>/assets/img/monica.jpeg" alt="cofounder photo" />
          </div>
          <h4>Monica Dyah Pudyowati</h4>
          <p>CO Founder</p>
        </div>
        <div class="card">
          <div class="card-img">
            <img src="<?= base_url(); ?>/assets/img/safitri.jpeg" alt="ceo photo" />
          </div>
          <h4>Siti Nur Amaliah Safitri</h4>
          <p>Chief Executive Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2" alt="person1" />
          </div>
          <h4>Alisa Turner</h4>
          <p>Chief Business Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1604904612715-47bf9d9bc670" alt="person2" />
          </div>
          <h4>Michaela Cooke</h4>
          <p>Chief Technology Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1583513849669-05e83270ae32" alt="person3" />
          </div>
          <h4>Hayley Lawson</h4>
          <p>Chief Product Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1567532939604-b6b5b0db2604" alt="person4" />
          </div>
          <h4>Troy Figueroa</h4>
          <p>Chief Financial Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2" alt="person5" />
          </div>
          <h4>Bessie Mcdowell</h4>
          <p>Chief People Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1614786269829-d24616faf56d" alt="person6" />
          </div>
          <h4>Virgil Knapp</h4>
          <p>Chief People Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1580411402629-e0cdf76f3d3b" alt="person7" />
          </div>
          <h4>Isra Dean</h4>
          <p>Chief Marketing Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1562788869-4ed32648eb72" alt="person8" />
          </div>
          <h4>Jamil Wright</h4>
          <p>General Counsel</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1600878459108-617a253537e9" alt="person9" />
          </div>
          <h4>Sachin Kaufman</h4>
          <p>Chief Information Officer</p>
        </div>

        <div class="card">
          <div class="card-img">
            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a" alt="person10" />
          </div>
          <h4>Isaac Mclaughlin</h4>
          <p>President</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Main End -->

<?= $this->endSection(); ?>