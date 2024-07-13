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
<section id="page-header" class="about-header" style="background-image: url('<?= base_url(); ?>/assets/img/cybersecurity.jpg'); max-height: 60vh;">
    <div class="max-width" style="margin-top: 5.5rem;">
        <div class="section-content">
            <p>Cybersecurity</p>
            <hr class="bottom-line center" />
        </div>
        <div class="section-title" style="margin-top: 2rem;">
            <h2> Cybersecurity adalah upaya intens yang dilakukan demi melindungi sistem komputer dan data dari berbagai ancaman maupun akses ilegal. Dalam era transformasi digital, Cybersecurity sangat penting bagi organisasi dan individu karena serangan siber dapat memiliki konsekuensi yang serius, termasuk kehilangan data dan informasi yang penting, kerusakan pada sistem, dan bahkan kehilangan uang dan reputasi.</h2>
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
                <h2>Security Assessment</h2>
                <h3><sup>$</sup>600<span class="small">/project</span></h3>
                <p>Evaluating your current security systems and providing enhancement recommendations.</p>
                <button data-value="Security Assessment" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>Security Awareness Training</h2>
                <h3><sup>$</sup>200<span class="small">/session</span></h3>
                <p>Training employees on best security practices.</p>
                <button data-value="Security Awareness Training" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>Penetration Testing</h2>
                <h3><sup>$</sup>1000<span class="small">/project</span></h3>
                <p>Testing systems for vulnerabilities and providing detailed reports.</p>
                <button data-value="Penetration Testing" class="button scroll-down" data-target="#service-book">Book Service</button>
            </div>
            <div class="grid-1-5">
                <h2>Security Monitoring</h2>
                <h3><sup>$</sup>450<span class="small">/month</span></h3>
                <p>Continuous monitoring of threats and security incidents.</p>
                <button data-value="Security Monitoring" class="button scroll-down" data-target="#service-book">Book Service</button>
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
                                <li>Security Assessment</li>
                                <li>Security Awareness Training</li>
                                <li>Penetration Testing</li>
                                <li>Security Monitoring</li>
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
                    <img src="<?= base_url(); ?>/assets/img/cybersecurity.jpg" alt="It Consulting" />
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
                    console.log(error);
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