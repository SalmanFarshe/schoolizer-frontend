<?php $active_page = 'gallery-edit.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="main-content py-5">
    <h1 class="mb-4">Edit Gallery</h1>

    <!-- Success/Error Alerts -->
    <div class="alert alert-success d-none" id="successAlert">Gallery updated successfully!</div>
    <div class="alert alert-danger d-none" id="errorAlert">Something went wrong. Please try again.</div>

    <!-- Add New Image -->
    <div class="card mb-4">
        <div class="card-header">
            <h5>Add New Image</h5>
        </div>
        <div class="card-body">
            <form id="addImageForm">
                <div class="mb-3">
                    <label for="image_title" class="form-label">Image Title</label>
                    <input type="text" class="form-control" id="image_title" placeholder="Enter image title">
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">Image URL</label>
                    <input type="text" class="form-control" id="image_url" placeholder="Enter image URL or upload">
                </div>
                <button type="submit" class="btn btn-primary">Add Image</button>
            </form>
        </div>
    </div>

    <!-- Gallery List -->
    <div class="card">
        <div class="card-header">
            <h5>Gallery Images</h5>
        </div>
        <div class="card-body">
            <div class="row g-3" id="galleryList">
                <!-- Example of a gallery item -->
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/images/gallery1.jpg" class="card-img-top" alt="Gallery Image">
                        <div class="card-body text-center">
                            <h6 class="card-title">Image Title 1</h6>
                            <button class="btn btn-sm btn-warning me-1 editBtn">Edit</button>
                            <button class="btn btn-sm btn-danger deleteBtn">Delete</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow-sm">
                        <img src="assets/images/gallery2.jpg" class="card-img-top" alt="Gallery Image">
                        <div class="card-body text-center">
                            <h6 class="card-title">Image Title 2</h6>
                            <button class="btn btn-sm btn-warning me-1 editBtn">Edit</button>
                            <button class="btn btn-sm btn-danger deleteBtn">Delete</button>
                        </div>
                    </div>
                </div>
                <!-- More gallery items dynamically loaded here -->
            </div>
        </div>
    </div>
</div>

<script>
    // Demo: handle Add Image form
    $('#addImageForm').on('submit', function(e) {
        e.preventDefault();
        const title = $('#image_title').val();
        const url = $('#image_url').val();
        if(title && url) {
            $('#galleryList').append(`
                <div class="col-md-3 col-6">
                    <div class="card border-0 shadow-sm">
                        <img src="${url}" class="card-img-top" alt="${title}">
                        <div class="card-body text-center">
                            <h6 class="card-title">${title}</h6>
                            <button class="btn btn-sm btn-warning me-1 editBtn">Edit</button>
                            <button class="btn btn-sm btn-danger deleteBtn">Delete</button>
                        </div>
                    </div>
                </div>
            `);
            $('#successAlert').removeClass('d-none').fadeOut(3000);
            $(this)[0].reset();
        } else {
            $('#errorAlert').removeClass('d-none').fadeOut(3000);
        }
    });

    // Demo: Delete image
    $(document).on('click', '.deleteBtn', function() {
        if(confirm('Are you sure you want to delete this image?')) {
            $(this).closest('.col-md-3').remove();
        }
    });

    // Demo: Edit image
    $(document).on('click', '.editBtn', function() {
        const card = $(this).closest('.card');
        const title = card.find('.card-title').text();
        const url = card.find('img').attr('src');
        const newTitle = prompt('Edit Image Title:', title);
        const newUrl = prompt('Edit Image URL:', url);
        if(newTitle && newUrl) {
            card.find('.card-title').text(newTitle);
            card.find('img').attr('src', newUrl);
        }
    });
</script>

<?php include 'includes/admin-footer.php'; ?>
