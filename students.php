<?php $active_page = 'students.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="main-content py-5">
    <h1 class="mb-4">Student Management</h1>

    <!-- Add Student Button -->
    <div class="mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add New Student</button>
    </div>

    <!-- Students Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Class</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Demo Student 1 -->
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>101</td>
                    <td>10</td>
                    <td>john@example.com</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Student 2 -->
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>102</td>
                    <td>10</td>
                    <td>jane@example.com</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Student 2 -->
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>102</td>
                    <td>10</td>
                    <td>jane@example.com</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Student 2 -->
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>102</td>
                    <td>10</td>
                    <td>jane@example.com</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Student 2 -->
                <tr>
                    <td>2</td>
                    <td>Jane Smith</td>
                    <td>102</td>
                    <td>10</td>
                    <td>jane@example.com</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Add more demo students as needed -->
            </tbody>
        </table>
    </div>
</div>

<!-- Add Student Modal -->
<div class="modal fade" id="addStudentModal" tabindex="-1" aria-labelledby="addStudentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
          <div class="modal-header">
              <h5 class="modal-title" id="addStudentLabel">Add New Student</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="mb-3">
                  <label>Name</label>
                  <input type="text" class="form-control" placeholder="Student Name">
              </div>
              <div class="mb-3">
                  <label>Roll</label>
                  <input type="text" class="form-control" placeholder="Roll Number">
              </div>
              <div class="mb-3">
                  <label>Class</label>
                  <input type="text" class="form-control" placeholder="Class">
              </div>
              <div class="mb-3">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Email">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Student</button>
          </div>
      </form>
    </div>
  </div>
</div>

<?php include 'includes/admin-footer.php'; ?>
