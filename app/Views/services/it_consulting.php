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
<section id="page-header" class="about-header" style="background-image: url('<?= base_url(); ?>/assets/img/itconsulting.jpg'); max-height: 60vh;">
    <div class="max-width" style="padding-top: 5.5rem;">
        <div class="section-content">
            <p>IT Consulting</p>
            <hr class="bottom-line center" />
        </div>
        <div class="section-title" style="margin-top: 2rem;">
            <h2>IT Consulting adalah layanan yang membantu pelanggan dalam meningkatkan efisiensi dan produktivitas bisnis melalui penggunaan teknologi informasi yang efektif. Kami menawarkan konsultasi teknis yang komprehensif, mulai dari perencanaan strategi IT hingga implementasi dan perawatan infrastruktur, serta dukungan teknis dan pelatihan untuk memastikan pelanggan memiliki sistem yang sesuai dengan kebutuhan bisnis mereka.</h2>
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
                <h2>Infrastructure Assessment</h2>
                <h3><sup>$</sup>500<span class="small">/project</span></h3>
                <p>Evaluating current IT infrastructure and providing improvement recommendations.</p>
                <button data-value="Infrastructure Assessment" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>Strategic IT Planning</h2>
                <h3><sup>$</sup>700<span class="small">/month</span></h3>
                <p>Developing IT strategic plans aligned with business goals.</p>
                <button data-value="Strategic IT Planning" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>System Implementation</h2>
                <h3><sup>$</sup>1000<span class="small">/project</span></h3>
                <p>Assisting in the implementation of new IT systems, including software and hardware.</p>
                <button data-value="System Implementation" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>Maintenance &amp; Support</h2>
                <h3><sup>$</sup>300<span class="small">/month</span></h3>
                <p>Providing ongoing support and maintenance for IT systems.</p>
                <button data-value="Maintenance &amp; Support" class="button scroll-down" data-target="#service-book">Book Service</button>
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
                                <input type="hidden" id="input-service" name="input-service" required>
                                <div class="selected">Select a service</div>
                                <div class="caret"></div>
                            </div>
                            <div class="underline"></div>
                            <ul class="dropdown-menu">
                                <li>Infrastructure Assessment</li>
                                <li>Strategic IT Planning</li>
                                <li>System Implementation</li>
                                <li>Maintenance &amp; Support</li>
                            </ul>
                            </ul>
                        </div>
                        <div class="input-wrapper textarea">
                            <textarea id="message" name="input-message" required></textarea>
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
                    <img src="<?= base_url(); ?>/assets/img/itconsulting.jpg" alt="It Consulting" />
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