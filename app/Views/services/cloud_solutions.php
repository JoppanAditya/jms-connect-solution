<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="service-back-home">
    <a href="<?= base_url(); ?>">
        <i class='bx bx-arrow-back'></i>
        <img src="<?= base_url(); ?>/assets/img/logo.png" alt="JMS Logo" height="50">
    </a>
</div>

<?= $this->include('layout/service_navbar'); ?>

<!-- Main Start -->
<!-- Hero Section -->
<section id="page-header" class="about-header" style="background-image: url('<?= base_url(); ?>/assets/img/cloudsolutions.jpg'); max-height: 60vh;">
    <div class="max-width" style="padding-top: 5.5rem;">
        <div class="section-content">
            <p>Cloud Solutions</p>
            <hr class="bottom-line center" />
        </div>
        <div class="section-title" style="margin-top: 2rem;">
            <h2>Cloud Solutions adalah layanan yang memberikan akses langsung ke sumber daya IT yang dapat disesuaikan dengan kebutuhan bisnis. Dengan menggunakan Cloud Solutions, perusahaan dapat meningkatkan efisiensi, mengurangi biaya, dan memperbaiki alokasi modal dan biaya operasional. Layanan ini memungkinkan perusahaan untuk mengelola sumber daya IT secara efektif dan memastikan bahwa aplikasi dan data mereka dapat diakses secara aman dan efisien.</h2>
        </div>
    </div>
</section>

<section>
    <div class="max-width">
        <div class="section-content">
            <p>Tailored Solutions for Your Needs</p>
            <hr class="bottom-line center" />
        </div>

        <div class="container group">
            <div class="grid-1-5">
                <h2>Cloud Migration</h2>
                <h3><sup>$</sup>800<span class="small">/project</span></h3>
                <p>Migrating your company's systems and data to the cloud.</p>
                <button data-value="Cloud Migration" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>Cloud Management</h2>
                <h3><sup>$</sup>500<span class="small">/month</span></h3>
                <p>Managing your cloud infrastructure, including setup and monitoring</p>
                <button data-value="Cloud Management" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>Backup and Recovery</h2>
                <h3><sup>$</sup>250<span class="small">/month</span></h3>
                <p>Providing data backup and disaster recovery solutions.</p>
                <button data-value="Backup and Recovery" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>Cloud Security</h2>
                <h3><sup>$</sup>400<span class="small">/month</span></h3>
                <p>Implementing security measures to protect your data on the cloud.</p>
                <button data-value="Cloud Security" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
        </div>
    </div>
</section>

<section class="service-book" id="service-book">
    <div class="max-width">
        <div class="section-content">
            <p>Start Your Journey with Us</p>
            <hr class="bottom-line left" />

            <div class="content">
                <div class="column col-left">

                    <div id="message-field" style="margin-top: 2rem;"></div>

                    <form>
                        <div class="input-wrapper">
                            <input type="text" id="name" name="input-name" required />
                            <div class="underline"></div>
                            <label for="name">Full Name</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" id="email" name="input-email" required />
                            <div class="underline"></div>
                            <label for="email">Business Email</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" id="company" name="input-company" required />
                            <div class="underline"></div>
                            <label for="company">Company</label>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" id="phone" name="input-phone" required />
                            <div class="underline"></div>
                            <label for="phone">Phone number</label>
                        </div>
                        <div class="input-wrapper dropdown">
                            <label for="input-service">Service</label>
                            <div class="select default">
                                <input type="hidden" id="input-service" name="input-service">
                                <div class="selected">Select a service</div>
                                <div class="caret"></div>
                            </div>
                            <div class="underline"></div>
                            <ul class="dropdown-menu">
                                <li>Cloud Migration</li>
                                <li>Cloud Management</li>
                                <li>Backup and Recovery</li>
                                <li>Cloud Security</li>
                            </ul>
                            </ul>
                        </div>
                        <div class="input-wrapper textarea">
                            <textarea id="message" rows="5" cols="80" name="input-message" required></textarea>
                            <div class="underline"></div>
                            <label for="message">Message</label>
                        </div>
                        <?php if (session()->get('logged_in')) : ?>
                            <button type="submit" class="normal">Submit</button>
                        <?php else : ?>
                            <div>
                                <a href="<?= base_url('sign-in'); ?>" class="normal">Submit</a>
                            </div>
                        <?php endif; ?>
                    </form>
                </div>
                <div class="column col-right">
                    <img src="<?= base_url(); ?>/assets/img/cloudsolutions.jpg" alt="It Consulting" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main End -->

<script>
    $(document).ready(function() {
        const form = $("form");

        form.on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: "<?= base_url('service/save'); ?>",
                type: "POST",
                data: form.serialize(),
                beforeSend: () => {
                    form.find('.normal').attr('disabled', 'disabled');
                    form.find('.normal').addClass('disabled');
                    form.find('.normal').html('<i class="fa fa-circle-o-notch fa-spin"></i>Loading');
                },
                complete: function() {
                    form.find('.normal').removeAttr('disabled');
                    form.find('.normal').removeClass('disabled');
                    form.find('.normal').html('Submit');
                },
                success: function(response) {
                    $('#message-field').html('<div class="alert alert-success">' + response.message + '</div>');
                    form[0].reset();
                    setTimeout(function() {
                        $("#message-field").html('');
                    }, 5000);
                },
                error: function(error) {
                    $('#message-field').html('<div class="alert alert-danger">Form submission failed</div>');
                    setTimeout(function() {
                        $("#message-field").html('');
                    }, 5000);
                }
            });
        });
    });
</script>

<?= $this->endSection(); ?>