<div class="blur-bg-overlay"></div>
<div class="form-popup">
    <div id="edit-section">
        <div class="popup-header">
            <h2>Edit <span id="popup-title"></span></h2>
            <i class='bx bx-x close-btn'></i>
        </div>
        <form id="edit-form">
            <div class="input-wrapper">
                <input type="hidden" name="field" id="field-name">
                <input type="text" id="field-value" name="value" required />
                <div class="underline"></div>
                <label for="field-value">Value</label>
            </div>
            <button type="submit" class="normal">Save</button>
        </form>
    </div>

    <div id="password-section">
        <div class="popup-header">
            <h2>Change Password</h2>
            <i class='bx bx-x close-btn'></i>
        </div>
        <form id="password-form">
            <div class="input-wrapper">
                <input type="password" id="current-password" name="current_password" required />
                <i class="bx bxs-low-vision show-password change"></i>
                <div class="underline"></div>
                <label for="current-password">Current Password</label>
            </div>
            <div class="input-wrapper">
                <input type="password" id="new-password" name="new_password" required />
                <i class="bx bxs-low-vision show-password change"></i>
                <div class="underline"></div>
                <label for="new-password">New Password</label>
            </div>
            <div class="input-wrapper">
                <input type="password" id="confirm-password" name="confirm_password" required />
                <i class="bx bxs-low-vision show-password change"></i>
                <div class="underline"></div>
                <label for="confirm-password">Confirm Password</label>
            </div>
            <button type="submit" class="normal">Change Password</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#edit-form').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: '<?= base_url('profile/update'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                beforeSend: () => {
                    $('#edit-form .normal').attr('disabled', 'disabled');
                    $('#edit-form .normal').addClass('disabled');
                    $('#edit-form .normal').html('<i class="fa fa-circle-o-notch fa-spin"></i>Loading');
                },
                success: function(response) {
                    document.body.classList.toggle("show-popup");
                    location.reload();
                },
                complete: function() {
                    $('#edit-form .normal').removeAttr('disabled');
                    $('#edit-form .normal').removeClass('disabled');
                    $('#edit-form .normal').html('Save');
                }
            });
        });

        $('#password-form').on('submit', function(event) {
            event.preventDefault();

            $.ajax({
                url: '<?= base_url('profile/change-password'); ?>',
                type: 'POST',
                data: $(this).serialize(),
                beforeSend: () => {
                    $('#password-form .normal').attr('disabled', 'disabled');
                    $('#password-form .normal').addClass('disabled');
                    $('#password-form .normal').html('<i class="fa fa-circle-o-notch fa-spin"></i>Loading');
                },
                success: function(response) {
                    document.body.classList.toggle("show-popup");
                    location.reload();
                },
                complete: function() {
                    $('#password-form .normal').removeAttr('disabled');
                    $('#password-form .normal').removeClass('disabled');
                    $('#password-form .normal').html('Change Password');
                }
            });
        });
    });
</script>