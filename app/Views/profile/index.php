<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Main Start -->
<section class="profile-page" style="background: #e0e0e0;">
    <?= $this->include('layout/navbar'); ?>
    <div class="max-width">
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success flash-message" style="margin-top: 1.2rem;"><?= session()->getFlashdata('success'); ?></div>
        <?php elseif (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger flash-message" style="margin-top: 1.2rem;"><?= session()->getFlashdata('error'); ?></div>
        <?php endif; ?>
        <div class="row">
            <div class="profile-container">
                <div class="profile-header">
                    <img src="<?= base_url('assets/img/') . session()->get('user_image'); ?>" alt="Profile Picture" class="profile-picture" id="profile-picture">
                    <h1 class="profile-name"><?= session()->get('username'); ?></h1>
                </div>
                <div class="profile-details">
                    <div class="detail-item">
                        <h3>Username:</h3>
                        <div class="profile-edit">
                            <p><?= $user['username']; ?></p>
                            <button class="show-edit" data-title="username"><i class='bx bxs-edit'></i></button>
                        </div>
                    </div>
                    <div class="detail-item">
                        <h3>Email:</h3>
                        <div class="profile-edit">
                            <p><?= $user['email']; ?></p>
                            <button class="show-edit" data-title="email"><i class='bx bxs-edit'></i></button>
                        </div>
                    </div>
                    <div class="detail-item">
                        <h3>Fullname:</h3>
                        <div class="profile-edit">
                            <p><?= $user['fullname']; ?></p>
                            <button class="show-edit" data-title="fullname"><i class='bx bxs-edit'></i></button>
                        </div>
                    </div>
                    <div class="detail-item">
                        <h3>Member Since:</h3>
                        <p><?= date("M d, Y", $user['date_created']); ?></p>
                    </div>
                    <button class="show-change secondary">Change Password</button>
                    <a href="<?= base_url('sign-out'); ?>" id="sign-out-link">Sign Out</a>
                </div>
            </div>
            <div class="order-container">
                <div class="order-title">
                    <h2>Order List</h2>
                    <hr class="bottom-line left" />
                </div>
                <?php foreach ($orders as $index => $order) : ?>
                    <div class="order-details">
                        <button class="order-delete" data-id="<?= $order['id']; ?>"><i class='bx bx-trash'></i></button>
                        <div class="order-left">
                            <div class="detail-item">
                                <h3>Order ID:</h3>
                                <p><?= $order['id']; ?></p>
                            </div>
                            <div class="detail-item">
                                <h3>Fullname:</h3>
                                <p><?= $order['fullname']; ?></p>
                            </div>
                            <div class="detail-item">
                                <h3>Business Email:</h3>
                                <p><?= $order['email']; ?></p>
                            </div>
                            <div class="detail-item">
                                <h3>Company:</h3>
                                <p><?= $order['company']; ?></p>
                            </div>
                        </div>
                        <div class="detail-right">
                            <div class="detail-item">
                                <h3>Phone Number:</h3>
                                <p><?= $order['phone']; ?></p>
                            </div>
                            <div class="detail-item">
                                <h3>Service:</h3>
                                <p><?= $order['service']; ?></p>
                            </div>
                            <div class="detail-item">
                                <h3>Message:</h3>
                                <p><?= $order['message']; ?></p>
                            </div>
                            <div class="detail-item">
                                <h3>Order Date:</h3>
                                <p><?= date("M d, Y | H:i", $order['date_created']); ?></p>
                            </div>
                        </div>
                    </div>
                    <?php if ($index < count($orders) - 1) : ?>
                        <hr />
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?= $this->include('layout/popup'); ?>
<!-- Main End -->

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.flash-message').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 5000);

        $('#sign-out-link').on('click', function(event) {
            event.preventDefault();
            const confirmation = confirm('Are you sure you want to sign out?');

            if (confirmation) {
                window.location.href = $(this).attr('href');
            }
        });

        $('.order-delete').on('click', function() {
            let orderId = $(this).data('id');

            if (confirm('Are you sure you want to delete this order?')) {
                $.ajax({
                    url: '<?= base_url('profile/delete'); ?>/' + orderId,
                    type: 'DELETE',
                    success: function(response) {
                        location.reload();
                    }
                });
            }
        });
    });
</script>
<?= $this->endSection(); ?>