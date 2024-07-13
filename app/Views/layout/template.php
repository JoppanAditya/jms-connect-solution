<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title != 'Home' ? $title . ' | ' : ''; ?> JMS Connect Solution</title>

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="<?= base_url(); ?>/favicon.png" type="image/x-icon">
</head>

<body>
    <!-- Page Loader & Scroll Button Start -->
    <div class="page-loader js-page-loader">
        <div></div>
    </div>
    <div class="scroll-up-btn bounce">
        <i class="bx bxs-chevron-up"></i>
    </div>
    <!-- Page Loader & Scroll Button End -->

    <?= $this->renderSection('content'); ?>

    <?php if ($footer) : ?>
        <!-- Footer Start -->
        <footer>
            <div class="max-width">
                <div class="col">
                    <h4>Company</h4>
                    <hr class="bottom-line left" />
                    <a href="<?= base_url('about'); ?>">About us</a>
                    <a href="#">Customers</a>
                    <a href="#">Careers</a>
                    <a href="#">Leadership</a>
                    <a href="#">Newsroom</a>
                    <a href="#">Help</a>
                    <a href="/contact">Contact Us</a>
                </div>

                <div class="col">
                    <h4>Resources</h4>
                    <hr class="bottom-line left" />
                    <a href="<?= base_url('blog'); ?>">Blog</a>
                    <a href="#">Communities</a>
                    <a href="#">Content Library</a>
                    <a href="#">Threat Map</a>
                    <a href="#">Threat Wiki</a>
                    <a href="#">Investors</a>
                    <a href="#">App Wiki</a>
                </div>

                <div class="col">
                    <h4>Legal Notices</h4>
                    <hr class="bottom-line left" />
                    <a href="#">Privacy Statement</a>
                    <a href="#">Trust Center</a>
                    <a href="#">Terms of Use</a>
                    <a href="#">Do Not Sell or Share My Personal Information</a>
                    <a href="#">Cookie Settings</a>
                </div>

                <?php if ($title != 'Home') : ?>
                    <div class="newsletter">
                        <h4>Get the latest news, invites to events, and threat alerts</h4>
                        <hr class="bottom-line left" />
                        <div class="row">
                            <form>
                                <div class="input-wrapper">
                                    <input type="text" id="email" name="email" required />
                                    <div class="underline"></div>
                                    <label for="email">Email</label>
                                </div>
                                <button type="submit" class="secondary">Sign Up</button>
                            </form>
                        </div>
                        <p>By submitting this form, you agree to our <span>Terms of Use</span> and acknowledge our <span>Privacy Statement</span>.</p>
                    </div>
                <?php endif; ?>
            </div>

            <div class="copyright">
                <div class="max-width">
                    <div class="column col-left">
                        <p>Copyright &copy; 2024 <a href="<?= base_url(); ?>">JMS Connect Solution</a>. All rights reserved.</p>
                    </div>
                    <div class="column col-right">
                        <div class="follow">
                            <h4>Follow us:</h4>
                            <i class="bx bxl-linkedin-square"></i>
                            <i class="bx bxl-twitter"></i>
                            <i class="bx bxl-youtube"></i>
                            <i class="bx bxl-instagram"></i>
                            <i class="bx bxl-facebook-square"></i>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
    <?php endif; ?>

    <script src="<?= base_url(); ?>/assets/js/script.js"></script>
</body>

</html>