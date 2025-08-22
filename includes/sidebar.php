<!-- Sidebar -->
<nav class="sidebar">
    <div class="sidebar-logo text-center py-3">
        <a href="dashboard.php">
            <img src="assets/images/schoolizer-logo.png" alt="Schoolizer Logo" class="img-fluid me-2 p-1 rounded bg-white" style="max-height: 50px;">
        </a>
    </div>
    <ul class="nav flex-column">

        <li class="nav-item">
            <a href="dashboard.php" class="nav-link <?php if($active_page == 'dashboard.php'){ echo 'active'; } ?>">
                <i class="text-white bi bi-speedometer2 me-2"></i> Dashboard
            </a>
        </li>

        
        <!-- Pages Dropdown -->
        <li class="nav-item">
            <a class="nav-link text-white" data-bs-toggle="collapse" href="#pagesDropdown" role="button" aria-expanded="false" aria-controls="pagesDropdown">
                <i class="text-white bi bi-file-earmark-text me-2"></i> Pages
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <div class="collapse <?php if(in_array($active_page, ['home-edit.php','about-edit.php','contact-edit.php','gallery-edit.php'])) echo 'show'; ?>" id="pagesDropdown">
                <ul class="nav flex-column ms-3">
                    <li class="nav-item">
                        <a href="home-edit.php" class="nav-link <?php if($active_page == 'home-edit.php'){ echo 'active'; } ?>">Home Page</a>
                    </li>
                    <li class="nav-item">
                        <a href="about-edit.php" class="nav-link <?php if($active_page == 'about-edit.php'){ echo 'active'; } ?>">About Page</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="admission.php" class="nav-link <?php # if($active_page == 'admission.php'){ echo 'active'; } ?>">Admission Page</a>
                    </li> -->
                    <li class="nav-item">
                        <a href="contact-edit.php" class="nav-link <?php if($active_page == 'contact-edit.php'){ echo 'active'; } ?>">Contact Page</a>
                    </li>
                    <li class="nav-item">
                        <a href="gallery-edit.php" class="nav-link <?php if($active_page == 'gallery-edit.php'){ echo 'active'; } ?>">Gallery Page</a>
                    </li>
                </ul>
            </div>
        </li>

        <!-- Students -->
        <li class="nav-item">
            <a href="students.php" class="nav-link <?php if($active_page == 'students.php'){ echo 'active'; } ?>">
                <i class="text-white bi bi-people me-2"></i> Student List
            </a>
        </li>

        <!-- Events -->
        <li class="nav-item">
            <a href="edit-events.php" class="nav-link <?php if($active_page == 'events.php'){ echo 'active'; } ?>">
                <i class="text-white bi bi-calendar-event me-2"></i> Events
            </a>
        </li>

        <!-- Notices -->
        <li class="nav-item">
            <a href="edit-notices.php" class="nav-link <?php if($active_page == 'notices.php'){ echo 'active'; } ?>">
                <i class="text-white bi bi-megaphone me-2"></i> Notices
            </a>
        </li>

        <!-- Teachers -->
        <li class="nav-item">
            <a href="teachers.php" class="nav-link <?php if($active_page == 'teachers.php'){ echo 'active'; } ?>">
                <i class="text-white bi bi-person-badge me-2"></i> Teachers
            </a>
        </li>

        <!-- Settings -->
        <li class="nav-item">
            <a href="settings.php" class="nav-link <?php if($active_page == 'settings.php'){ echo 'active'; } ?>">
                <i class="text-white bi bi-gear me-2"></i> Settings
            </a>
        </li>

        <!-- Logout -->
        <li class="nav-item bg-danger rounded mt-auto">
            <a href="login.php" class="nav-link text-white">
                <i class="text-white bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </li>


    </ul>
</nav>
