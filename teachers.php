<?php $active_page = 'teachers.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="main-content py-5">
    <h1 class="mb-4">Manage Teachers</h1>

    <!-- Add Teacher Button -->
    <div class="mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTeacherModal">Add New Teacher</button>
    </div>

    <!-- Teachers Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Demo Teacher 1 -->
                <tr>
                    <td>1</td>
                    <td>Mr. John Doe</td>
                    <td>Mathematics</td>
                    <td>john.doe@schoolizer.com</td>
                    <td>+880 1234 567890</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Teacher 2 -->
                <tr>
                    <td>2</td>
                    <td>Ms. Jane Smith</td>
                    <td>English</td>
                    <td>jane.smith@schoolizer.com</td>
                    <td>+880 9876 543210</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Teacher 2 -->
                <tr>
                    <td>2</td>
                    <td>Ms. Jane Smith</td>
                    <td>English</td>
                    <td>jane.smith@schoolizer.com</td>
                    <td>+880 9876 543210</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Teacher 2 -->
                <tr>
                    <td>2</td>
                    <td>Ms. Jane Smith</td>
                    <td>English</td>
                    <td>jane.smith@schoolizer.com</td>
                    <td>+880 9876 543210</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Teacher 2 -->
                <tr>
                    <td>2</td>
                    <td>Ms. Jane Smith</td>
                    <td>English</td>
                    <td>jane.smith@schoolizer.com</td>
                    <td>+880 9876 543210</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Teacher 2 -->
                <tr>
                    <td>2</td>
                    <td>Ms. Jane Smith</td>
                    <td>English</td>
                    <td>jane.smith@schoolizer.com</td>
                    <td>+880 9876 543210</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Add Teacher Modal -->
<div class="modal fade" id="addTeacherModal" tabindex="-1" aria-labelledby="addTeacherLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
          <div class="modal-header">
              <h5 class="modal-title" id="addTeacherLabel">Add New Teacher</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="mb-3">
                  <label>Teacher Name</label>
                  <input type="text" class="form-control" placeholder="Full Name">
              </div>
              <div class="mb-3">
                  <label>Subject</label>
                  <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="mb-3">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email Address">
              </div>
              <div class="mb-3">
                  <label>Phone</label>
                  <input type="text" class="form-control" placeholder="Phone Number">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Teacher</button>
          </div>
      </form>
    </div>
  </div>
</div>

<?php include 'includes/admin-footer.php'; ?>
