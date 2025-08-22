<?php $active_page = 'notices.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="main-content py-5">
    <h1 class="mb-4">Manage Notices</h1>

    <!-- Add Notice Button -->
    <div class="mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addNoticeModal">Add New Notice</button>
    </div>

    <!-- Notices Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Demo Notice 1 -->
                <tr>
                    <td>1</td>
                    <td>Annual Sports Day</td>
                    <td>2025-09-01</td>
                    <td>All students are invited to participate in sports events.</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Notice 2 -->
                <tr>
                    <td>2</td>
                    <td>Exam Schedule Released</td>
                    <td>2025-09-10</td>
                    <td>Check the website for the upcoming semester exam schedule.</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Notice 2 -->
                <tr>
                    <td>2</td>
                    <td>Exam Schedule Released</td>
                    <td>2025-09-10</td>
                    <td>Check the website for the upcoming semester exam schedule.</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Notice 2 -->
                <tr>
                    <td>2</td>
                    <td>Exam Schedule Released</td>
                    <td>2025-09-10</td>
                    <td>Check the website for the upcoming semester exam schedule.</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Notice 2 -->
                <tr>
                    <td>2</td>
                    <td>Exam Schedule Released</td>
                    <td>2025-09-10</td>
                    <td>Check the website for the upcoming semester exam schedule.</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Notice 2 -->
                <tr>
                    <td>2</td>
                    <td>Exam Schedule Released</td>
                    <td>2025-09-10</td>
                    <td>Check the website for the upcoming semester exam schedule.</td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Notice 2 -->
                <tr>
                    <td>2</td>
                    <td>Exam Schedule Released</td>
                    <td>2025-09-10</td>
                    <td>Check the website for the upcoming semester exam schedule.</td>
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

<!-- Add Notice Modal -->
<div class="modal fade" id="addNoticeModal" tabindex="-1" aria-labelledby="addNoticeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
          <div class="modal-header">
              <h5 class="modal-title" id="addNoticeLabel">Add New Notice</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="mb-3">
                  <label>Notice Title</label>
                  <input type="text" class="form-control" placeholder="Notice Title">
              </div>
              <div class="mb-3">
                  <label>Date</label>
                  <input type="date" class="form-control">
              </div>
              <div class="mb-3">
                  <label>Description</label>
                  <textarea class="form-control" placeholder="Notice Description"></textarea>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Notice</button>
          </div>
      </form>
    </div>
  </div>
</div>

<?php include 'includes/admin-footer.php'; ?>
