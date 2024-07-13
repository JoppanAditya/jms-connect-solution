<!-- Navbar Start -->
<nav class="navbar nav-top">
    <div id="header" class="max-width navbar-wrapper">
        <div class="left-nav">
            <a href="/" class="nav-link">
                <div class="logo-img">
                    <img src="<?= base_url(); ?>/assets/img/logo-full.png" alt="JMS Logo">
                </div>
            </a>
        </div>

        <div>
            <ul id="navigation_bar">
                <li><a href="<?= base_url(); ?>">Home</a></li>
                <li><a href="<?= base_url('about'); ?>">About</a></li>
                <li><a href="<?= base_url('services'); ?>">Services</a></li>
                <li><a href="<?= base_url('blog'); ?>">Blog</a></li>
                <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
            </ul>
        </div>

        <?php if (session()->get('logged_in')) : ?>
            <a href="<?= base_url('profile/' . urlencode(session()->get('username'))); ?>" class="nav-user">
                <span><?= session()->get('username'); ?></span>
                <img src="<?= base_url('assets/img/') . session()->get('user_image'); ?>" alt="Profile Picture" height="40">
            </a>
        <?php else : ?>
            <div>
                <a href="<?= base_url('sign-in'); ?>" class="nav-btn">Sign In</a>
            </div>
        <?php endif; ?>
    </div>
</nav>
<!-- Navbar End -->