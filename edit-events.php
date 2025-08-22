<?php $active_page = 'events.php'; ?>
<?php include 'includes/admin-header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<div class="main-content py-5">
    <h1 class="mb-4">Manage Events</h1>

    <!-- Add Event Button -->
    <div class="mb-3">
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addEventModal">Add New Event</button>
    </div>

    <!-- Events Table -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Description</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Demo Event 1 -->
                <tr>
                    <td>1</td>
                    <td>Science Fair</td>
                    <td>2025-08-25</td>
                    <td>Explore innovative projects created by our students.</td>
                    <td><img src="../assets/images/bg-1.jpg" width="80" alt="Science Fair"></td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <!-- Demo Event 2 -->
                <tr>
                    <td>2</td>
                    <td>Cultural Fest</td>
                    <td>2025-09-10</td>
                    <td>A celebration of music, art, and performance by students.</td>
                    <td><img src="../assets/images/bg-2.jpg" width="80" alt="Cultural Fest"></td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cultural Fest</td>
                    <td>2025-09-10</td>
                    <td>A celebration of music, art, and performance by students.</td>
                    <td><img src="../assets/images/bg-2.jpg" width="80" alt="Cultural Fest"></td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cultural Fest</td>
                    <td>2025-09-10</td>
                    <td>A celebration of music, art, and performance by students.</td>
                    <td><img src="../assets/images/bg-2.jpg" width="80" alt="Cultural Fest"></td>
                    <td>
                        <button class="btn btn-info btn-sm">View</button>
                        <button class="btn btn-warning btn-sm">Edit</button>
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Cultural Fest</td>
                    <td>2025-09-10</td>
                    <td>A celebration of music, art, and performance by students.</td>
                    <td><img src="../assets/images/bg-2.jpg" width="80" alt="Cultural Fest"></td>
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

<!-- Add Event Modal -->
<div class="modal fade" id="addEventModal" tabindex="-1" aria-labelledby="addEventLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form>
          <div class="modal-header">
              <h5 class="modal-title" id="addEventLabel">Add New Event</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="mb-3">
                  <label>Event Title</label>
                  <input type="text" class="form-control" placeholder="Event Title">
              </div>
              <div class="mb-3">
                  <label>Date</label>
                  <input type="date" class="form-control">
              </div>
              <div class="mb-3">
                  <label>Description</label>
                  <textarea class="form-control" placeholder="Event Description"></textarea>
              </div>
              <div class="mb-3">
                  <label>Image URL</label>
                  <input type="text" class="form-control" placeholder="assets/images/event.jpg">
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add Event</button>
          </div>
      </form>
    </div>
  </div>
</div>

<?php include 'includes/admin-footer.php'; ?>
