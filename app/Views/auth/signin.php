<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<style>
    body {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #0a1931;
    }
</style>

<div class="service-back-home">
    <div>
        <i class='bx bx-arrow-back'></i>
        <img src="<?= base_url(); ?>/assets/img/logo.png" alt="JMS Logo" height="50">
    </div>
</div>

<!-- Content Start -->
<div class="wrapper">
    <header>Ready to Dive Back In?</header>
    <p>Please enter your credentials below to proceed.</p>
    <div id="message"></div>
    <form>
        <div class="field login">
            <div class="input-area">
                <input type="text" placeholder="Username / Email" name="login">
                <i class='icon bx bxs-user'></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
            </div>
            <div class="error error-txt">Username/Email cannot be empty</div>
        </div>
        <div class="field password">
            <div style="position: relative;">
                <div class="input-area">
                    <input type="password" placeholder="Password" name="password">
                    <i class='icon bx bxs-lock-alt'></i>
                    <i class="error error-icon error-password fas fa-exclamation-circle"></i>
                </div>
                <i class="bx bxs-low-vision show-password"></i>
            </div>
            <div class="error error-txt">Password cannot be empty</div>
        </div>
        <div class="pass-txt"><a href="">Forgot password?</a></div>
        <button type="submit" class="normal">Sign In</button>
        <div class="bottom-link">
            Don't have an account?
            <a href="<?= base_url('sign-up'); ?>" id="signup-link">Sign Up</a>
        </div>
    </form>
</div>
<!-- Content End -->

<script>
    $(document).ready(function() {
        const form = $("form");
        const lField = form.find(".login");
        const pField = form.find(".password");

        form.on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: "<?= base_url('auth/signin'); ?>",
                type: "post",
                data: form.serialize(),
                beforeSend: () => {
                    form.find('.normal').html('<i class="fa fa-circle-o-notch fa-spin"></i>Loading');
                    lField.removeClass('error');
                    pField.removeClass('error');
                },
                statusCode: {
                    400: function(error) {
                        $.each(error.responseJSON, function(field, params) {
                            let inputField = form.find('.' + field);
                            let errorTxt = inputField.find(".error-txt");
                            errorTxt.text(params);

                            inputField.addClass("shake error");
                            setTimeout(function() {
                                inputField.removeClass("shake");
                            }, 500);
                        });
                    }
                },
                success: function(response) {
                    if (response.status === 'success') {
                        $("#message").html('<div class="alert alert-success">' + response.message + '</div>');
                        form[0].reset();
                        setTimeout(function() {
                            window.location.href = response.redirect;
                        }, 500);
                    } else {
                        $("#message").html('<div class="alert alert-danger">' + response.message + '</div>');
                        setTimeout(function() {
                            $("#message").html('');
                        }, 5000);
                    }
                },
                complete: function() {
                    form.find('.normal').removeAttr('disabled');
                    form.find('.normal').removeClass('disabled');
                    form.find('.normal').html('Sign Up');
                }
            });

        });

        $('.service-back-home').on('click', function() {
            const referrer = document.referrer;
            if (referrer && !referrer.includes('sign-in') && !referrer.includes('sign-up')) {
                window.location.href = referrer;
            } else {
                window.location.href = '<?= base_url('/'); ?>';
            }
        });
    });
</script>

<?= $this->endSection(); ?>