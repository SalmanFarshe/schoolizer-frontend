<?php $active_page = 'about-edit.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="main-content py-5">
    <h1 class="mb-4">Edit About Page</h1>

    <form>
        <!-- Intro Section -->
        <h3>Intro Section</h3>
        <div class="mb-3">
            <label for="about_title" class="form-label">Title</label>
            <input type="text" class="form-control" id="about_title" value="Welcome to Schoolizer">
        </div>
        <div class="mb-3">
            <label for="about_description" class="form-label">Description</label>
            <textarea class="form-control" id="about_description" rows="5">Schoolizer is a modern school management platform that empowers students, teachers, and parents...</textarea>
        </div>
        <div class="mb-3">
            <label for="about_image" class="form-label">Intro Image URL</label>
            <input type="text" class="form-control" id="about_image" value="assets/images/about-school.jpg">
        </div>

        <!-- Mission & Vision -->
        <h3 class="mt-4">Mission & Vision</h3>
        <div class="mb-3">
            <label for="mission_text" class="form-label">Mission</label>
            <textarea class="form-control" id="mission_text" rows="3">To provide high-quality education with modern teaching methods...</textarea>
        </div>
        <div class="mb-3">
            <label for="vision_text" class="form-label">Vision</label>
            <textarea class="form-control" id="vision_text" rows="3">To be recognized as a leading educational institution...</textarea>
        </div>

        <!-- Core Values -->
        <h3 class="mt-4">Core Values</h3>
        <div class="mb-3">
            <label for="values" class="form-label">Values (Comma Separated: Title|Description)</label>
            <textarea class="form-control" id="values" rows="4">
Integrity|We promote honesty, transparency, and accountability.
Excellence|We strive for academic and personal excellence by encouraging creativity.
Collaboration|We believe in teamwork, mutual respect, and building strong relationships.
            </textarea>
        </div>

        <!-- Team Members -->
        <h3 class="mt-4">Team Members</h3>
        <div class="mb-3">
            <label for="team_members" class="form-label">Team Members (Comma Separated: Name|Position|Image URL)</label>
            <textarea class="form-control" id="team_members" rows="5">
Rahim Ahmed|Principal|assets/images/profile.jpg
Sadia Khan|Senior Teacher|assets/images/profile.jpg
Rafiq Islam|Math Teacher|assets/images/profile.jpg
Fatema Noor|Science Teacher|assets/images/profile.jpg
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update About Page</button>
    </form>
</div>

<?php include 'includes/admin-footer.php'; ?>
