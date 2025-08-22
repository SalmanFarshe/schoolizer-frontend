<?php $active_page = 'home-edit.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include 'includes/sidebar.php'; ?>
<div class="main-content py-5">
    <h1 class="mb-4">Edit Home Page</h1>

    <form>
        <h3>Hero Section</h3>
        <div class="mb-3">
            <label>Slide 1 Title</label>
            <input type="text" class="form-control" value="Welcome to Our School">
        </div>
        <div class="mb-3">
            <label>Slide 1 Subtitle</label>
            <textarea class="form-control">Providing quality education since 1990.</textarea>
        </div>
        <div class="mb-3">
            <label>Slide 1 Image URL</label>
            <input type="text" class="form-control" value="assets/images/hero1.jpg">
        </div>

        <h3>About Section</h3>
        <div class="mb-3">
            <label>About Title</label>
            <input type="text" class="form-control" value="About Our School">
        </div>
        <div class="mb-3">
            <label>About Description</label>
            <textarea class="form-control">We focus on excellence in academics and extracurriculars.</textarea>
        </div>

        <h3>Academic Programs</h3>
        <div class="mb-3">
            <label>Program 1 Name</label>
            <input type="text" class="form-control" value="Computer Science">
        </div>
        <div class="mb-3">
            <label>Program 1 Description</label>
            <textarea class="form-control">Learn programming, AI, and software development.</textarea>
        </div>

        <h3>Notices</h3>
        <div class="mb-3">
            <label>Notice 1 Title</label>
            <input type="text" class="form-control" value="Annual Sports Day">
        </div>
        <div class="mb-3">
            <label>Notice 1 Date</label>
            <input type="date" class="form-control" value="2025-09-01">
        </div>

        <h3>Events</h3>
        <div class="mb-3">
            <label>Event 1 Title</label>
            <input type="text" class="form-control" value="Science Fair">
        </div>
        <div class="mb-3">
            <label>Event 1 Date</label>
            <input type="date" class="form-control" value="2025-10-10">
        </div>

        <h3>Testimonials</h3>
        <div class="mb-3">
            <label>Testimonial 1 Name</label>
            <input type="text" class="form-control" value="Alice Johnson">
        </div>
        <div class="mb-3">
            <label>Testimonial 1 Message</label>
            <textarea class="form-control">This school changed my life!</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Home Page</button>
    </form>
</div>

<?php include 'includes/admin-footer.php'; ?>