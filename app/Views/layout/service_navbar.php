<!-- Navbar Start -->
<nav class="navbar nav-top" style="padding: 2.5rem 0;">
    <div id="header" class="max-width navbar-wrapper">
        <div class="left-nav">
            <div class="logo-img">
                <img src="<?= base_url(); ?>/assets/img/logo.png" alt="JMS Logo" height="40">
                <p>JMS Cybersecurity</p>
            </div>
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