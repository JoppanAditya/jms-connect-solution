<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?= $this->include('layout/navbar'); ?>
<!-- Main Start -->
<!-- Hero Section -->
<section id="page-header" class="contact-header" style="background-image: url('<?= base_url(); ?>/assets/img/contact-hero.jpg')">
  <div class="max-width">
    <div class="section-title">
      <h2>Contact Us</h2>
      <hr class="bottom-line center" />
    </div>

    <div class="section-content">
      <p>
        Get in touch with JMS Connect Solutions for inquiries, support, or to discuss your project needs. We're here to help you achieve a secure and efficient online presence. Reach out via our contact form or direct contact
        information provided.
      </p>
    </div>
  </div>

  <a data-target="#contact-detail" class="scroll-down">
    <div class="mouse">
      <span></span>
    </div>
    <span>Scroll Down</span>
  </a>
</section>

<!-- Contact Detail Section -->
<section id="contact-detail" class="contact-detail">
  <div class="max-width">
    <div class="section-title">
      <h2>Where to Find Us</h2>
      <hr class="bottom-line left" />
    </div>
    <div class="section-content">
      <p>Visit one of our agency location or contactus today</p>
      <div class="content">
        <div class="column col-left">
          <div class="detail-text">
            <ul>
              <li>
                <i class="bx bxs-map-pin"></i>
                <div class="address">
                  <h3>Head Office</h3>
                  <p>Gedung Teja Buana 1, Jl. Menteng Raya No.29, RT.1/RW.10, Kb. Sirih, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10340</p>
                </div>
              </li>

              <li>
                <i class="bx bxs-envelope"></i>
                <p>cs@jms.com</p>
              </li>
              <li>
                <i class="bx bxs-phone"></i>
                <p>021569875</p>
              </li>
              <li>
                <i class="bx bxs-time-five"></i>
                <p>Everyday: 8:00-18:00</p>
              </li>
            </ul>
          </div>
        </div>
        <div class="column col-right">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5877845010336!2d106.83346507576655!3d-6.185881993801637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4373412bbf1%3A0x7f73a28f635d6dc4!2sGedung%20Tedja%20Buana!5e0!3m2!1sid!2sid!4v1716104478789!5m2!1sid!2sid" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Form Section -->
<section class="form-detail">
  <div class="max-width">
    <div class="section-title">
      <h2>Leave a Message</h2>
      <hr class="bottom-line left" />
    </div>
    <div class="section-content">
      <p>We love to hear from you</p>
      <div class="content">
        <div class="column col-left">
          <form>
            <div class="input-wrapper">
              <input type="text" id="name" name="name" required />
              <div class="underline"></div>
              <label for="name">Full Name</label>
            </div>
            <div class="input-wrapper">
              <input type="text" id="email" name="email" required />
              <div class="underline"></div>
              <label for="email">Email</label>
            </div>
            <div class="input-wrapper">
              <input type="text" id="subject" name="subject" required />
              <div class="underline"></div>
              <label for="subject">Subject</label>
            </div>
            <div class="input-wrapper textarea">
              <textarea id="message" rows="5" cols="80" required></textarea>
              <div class="underline"></div>
              <label for="message">Message</label>
            </div>
            <button class="normal">Submit</button>
          </form>
        </div>
        <div class="column col-right">
          <div class="people-wrapper">
            <div class="people">
              <img src="<?= base_url(); ?>/assets/img/jovan.jpeg" alt="" />
              <p>
                <span>Gede Jovan Tiyo Aditya</span> Founder <br />
                Phone: (+31)35 316 2xxx <br />Email: Jovan@jms.com
              </p>
            </div>
            <div class="people">
              <img src="<?= base_url(); ?>/assets/img/monica.jpeg" alt="" />
              <p>
                <span>Monica Dyah Pudyowati </span> CO Founder <br />
                Phone: (+81)45x xxx x89 <br />Email: Monica@jms.com
              </p>
            </div>
            <div class="people">
              <img src="<?= base_url(); ?>/assets/img/safitri.jpeg" alt="" />
              <p>
                <span>Siti Nur Amaliah Safitri </span> CEO <br />
                Phone: (+41)05 xxx xx48 <br />Email: SnaSafitri@jms.com
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Main End -->

<?= $this->endSection(); ?>