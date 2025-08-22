<?php $active_page = 'settings.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include("includes/sidebar.php"); ?>

<div class="main-content p-4">

    <h2 class="text-primary mb-4" data-aos="fade-up">Admin Settings</h2>

    <form action="process-settings.php" method="POST" enctype="multipart/form-data">
        <div class="row g-4">

            <!-- Left Column -->
            <div class="col-md-6">

                <!-- General Settings -->
                <div class="card mb-4 p-3" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="mb-3">General Settings</h5>
                    <div class="mb-3">
                        <label for="site_name" class="form-label">Site Name</label>
                        <input type="text" class="form-control" id="site_name" name="site_name" value="Schoolizer" required>
                    </div>

                    <div class="mb-3">
                        <label for="site_logo" class="form-label">Logo</label>
                        <input type="file" class="form-control" id="site_logo" name="site_logo">
                    </div>

                    <div class="mb-3">
                        <label for="favicon" class="form-label">Favicon</label>
                        <input type="file" class="form-control" id="favicon" name="favicon">
                    </div>

                    <div class="d-flex gap-5">
                        <div class="mb-3">
                            <label for="primary_color" class="form-label">Primary Color</label>
                            <input type="color" class="form-control form-control-color" id="primary_color" name="primary_color" value="#0C3958">
                        </div>

                        <div class="mb-3">
                            <label for="accent_color" class="form-label">Accent Color</label>
                            <input type="color" class="form-control form-control-color" id="accent_color" name="accent_color" value="#E95420">
                        </div>
                    </div>
                </div>

            </div>

            <!-- Right Column -->
            <div class="col-md-6">

                <!-- Admin Account -->
                <div class="card mb-4 p-3" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="mb-3">Admin Account</h5>
                    <div class="mb-3">
                        <label for="admin_email" class="form-label">Admin Email</label>
                        <input type="email" class="form-control" id="admin_email" name="admin_email" value="admin@schoolizer.com" required>
                    </div>
                    <div class="mb-3">
                        <label for="admin_password" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="admin_password" name="admin_password" placeholder="Enter new password">
                    </div>
                    <div class="mb-3">
                        <label for="admin_password_confirm" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="admin_password_confirm" name="admin_password_confirm" placeholder="Confirm new password">
                    </div>
                </div>

                <!-- Social Links -->
                <div class="card mb-4 p-3" data-aos="fade-up" data-aos-delay="500">
                    <h5 class="mb-3">Social Links</h5>
                    <div class="mb-3">
                        <label for="facebook" class="form-label"><i class="bi bi-facebook me-1"></i>Facebook</label>
                        <input type="url" class="form-control" id="facebook" name="facebook" placeholder="https://facebook.com/yourpage">
                    </div>
                    <div class="mb-3">
                        <label for="twitter" class="form-label"><i class="bi bi-twitter me-1"></i>Twitter</label>
                        <input type="url" class="form-control" id="twitter" name="twitter" placeholder="https://twitter.com/yourprofile">
                    </div>
                    <div class="mb-3">
                        <label for="instagram" class="form-label"><i class="bi bi-instagram me-1"></i>Instagram</label>
                        <input type="url" class="form-control" id="instagram" name="instagram" placeholder="https://instagram.com/yourprofile">
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-4">
            <button type="submit" class="btn button">Save Settings</button>
        </div>

    </form>

</div>
<?php include 'includes/admin-footer.php'; ?>
