<?php $active_page = 'contact-edit.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="main-content py-5">
    <h1 class="mb-4">Edit Contact Information</h1>

    <form>
        <h3>Contact Details</h3>
        <div class="mb-3">
            <label for="contact_address" class="form-label">Address</label>
            <input type="text" class="form-control" id="contact_address" value="123 Main Street, Dhaka, Bangladesh">
        </div>
        <div class="mb-3">
            <label for="contact_email" class="form-label">Email</label>
            <input type="email" class="form-control" id="contact_email" value="info@schoolizer.com">
        </div>
        <div class="mb-3">
            <label for="contact_phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="contact_phone" value="+880 1234 567890">
        </div>

        <h3>Map Embed</h3>
        <div class="mb-3">
            <label for="contact_map" class="form-label">Google Map Embed URL</label>
            <textarea class="form-control" id="contact_map" rows="3">https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.123456789!2d90.399999999!3d23.780999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c123456789%3A0xabcdef1234567890!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1234567890123!5m2!1sen!2sbd</textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Update Contact Info</button>
    </form>
</div>

<?php include 'includes/admin-footer.php'; ?>
