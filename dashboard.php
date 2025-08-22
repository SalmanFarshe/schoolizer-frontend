<?php $active_page = 'dashboard.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include("includes/sidebar.php"); ?>

<div class="main-content p-4">

    <h2 class="admin-text mb-4" data-aos="fade-up">Dashboard</h2>

    <!-- Quick Stats -->
    <div class="row g-4 mb-4">
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
            <a href="students.php" class="text-decoration-none">
                <div class="card p-3 shadow-sm text-center hover-card">
                    <i class="bi bi-people-fill fs-1 admin-text"></i>
                    <h5 class="mt-2 admin-text">Students</h5>
                    <h2 class="admin-text">120</h2>
                </div>
            </a>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <a href="teachers.php" class="text-decoration-none">
                <div class="card p-3 shadow-sm text-center hover-card">
                    <i class="bi bi-person-badge-fill fs-1 admin-text"></i>
                    <h5 class="mt-2 admin-text">Teachers</h5>
                    <h2 class="admin-text">15</h2>
                </div>
            </a>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
            <a href="events.php" class="text-decoration-none">
                <div class="card p-3 shadow-sm text-center hover-card">
                    <i class="bi bi-calendar-event-fill fs-1 admin-text"></i>
                    <h5 class="mt-2 admin-text">Events</h5>
                    <h2 class="admin-text">8</h2>
                </div>
            </a>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
            <a href="notices.php" class="text-decoration-none">
                <div class="card p-3 shadow-sm text-center hover-card">
                    <i class="bi bi-megaphone-fill fs-1 admin-text"></i>
                    <h5 class="mt-2 admin-text">Notices</h5>
                    <h2 class="admin-text">20</h2>
                </div>
            </a>
        </div>
    </div>

    <!-- Shortcuts / Quick Links -->
    <div class="row g-4 mb-4">
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
            <a href="homepage-settings.php" class="text-decoration-none">
                <div class="card p-3 shadow-sm text-center hover-card">
                    <i class="bi bi-house-door-fill fs-2 admin-text"></i>
                    <p class="mt-2 fw-bold admin-text">Homepage Settings</p>
                </div>
            </a>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
            <a href="pages.php" class="text-decoration-none">
                <div class="card p-3 shadow-sm text-center hover-card">
                    <i class="bi bi-file-earmark-text-fill fs-2 admin-text"></i>
                    <p class="mt-2 fw-bold admin-text">Manage Pages</p>
                </div>
            </a>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
            <a href="settings.php" class="text-decoration-none">
                <div class="card p-3 shadow-sm text-center hover-card">
                    <i class="bi bi-gear-fill fs-2 admin-text"></i>
                    <p class="mt-2 fw-bold admin-text">Settings</p>
                </div>
            </a>
        </div>
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
            <a href="students.php" class="text-decoration-none">
                <div class="card p-3 shadow-sm text-center hover-card">
                    <i class="bi bi-person-fill fs-2 admin-text"></i>
                    <p class="mt-2 fw-bold admin-text">Users</p>
                </div>
            </a>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="card mb-4 p-3" data-aos="fade-up" data-aos-delay="500">
        <h5 class="mb-3"><i class="bi bi-clock-history me-1 admin-text"></i> Recent Activity</h5>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><i class="bi bi-person-plus-fill me-1 admin-text"></i> John Doe registered as a student <span class="text-muted float-end">2 hours ago</span></li>
            <li class="list-group-item"><i class="bi bi-calendar-plus-fill me-1 admin-text"></i> New event "Science Fair" added <span class="text-muted float-end">1 day ago</span></li>
            <li class="list-group-item"><i class="bi bi-megaphone-fill me-1 admin-text"></i> Notice "Exam Schedule" published <span class="text-muted float-end">3 days ago</span></li>
        </ul>
    </div>

</div>

<?php include 'includes/admin-footer.php'; ?>