<?php
include('./config/db.config.php');
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); 
    exit();
}
if (isset($_POST['delete_id'])) {
    $delete_id = mysqli_real_escape_string($db, $_POST['delete_id']);
    $sql_delete = "DELETE FROM student WHERE id = $delete_id";
    if (mysqli_query($db, $sql_delete)) {
        echo "<div class='alert alert-success'>Student deleted successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error deleting student: " . mysqli_error($db) . "</div>";
    }
}

if (isset($_POST['edit_id'])) {
    $edit_id = mysqli_real_escape_string($db, $_POST['edit_id']);
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
    
    $sql_update = "UPDATE student SET name='$name', address='$address', phone_number='$phone' WHERE id=$edit_id";
    
    if (mysqli_query($db, $sql_update)) {
        echo "<div class='alert alert-success'>Student updated successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error updating student: " . mysqli_error($db) . "</div>";
    }
}

$sql = "SELECT * FROM student";
$result = mysqli_query($db, $sql);

if (!$result) {
    die("ERROR: Could not execute $sql. " . mysqli_error($db));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List | City University</title>
</head>
<body>
    <?php include('./shared/header.php') ?>

    <main class="container my-5 py-5">
        <h2 class="mb-4">Student List</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['address']}</td>
                            <td>{$row['phone_number']}</td>
                            <td>
                                <button class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#editModal' data-id='{$row['id']}' data-name='{$row['name']}' data-address='{$row['address']}' data-phone='{$row['phone_number']}'>Edit</button>
                                <button class='btn btn-danger' data-bs-toggle='modal' data-bs-target='#deleteModal' data-id='{$row['id']}'>Delete</button>
                            </td>
                          </tr>";
                }
                ?>
            </tbody>
        </table>
    </main>

    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Student</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="studentlist.php" method="POST">
                        <input type="hidden" id="editId" name="edit_id">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editName" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="editAddress" class="form-label">Address</label>
                            <textarea class="form-control" id="editAddress" name="address" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="editPhone" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" id="editPhone" name="phone" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this student?
                </div>
                <div class="modal-footer">
                    <form action="studentlist.php" method="POST">
                        <input type="hidden" id="deleteId" name="delete_id">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        const editModal = document.getElementById('editModal');
        editModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const studentId = button.getAttribute('data-id');
            const studentName = button.getAttribute('data-name');
            const studentAddress = button.getAttribute('data-address');
            const studentPhone = button.getAttribute('data-phone');

            document.getElementById('editId').value = studentId;
            document.getElementById('editName').value = studentName;
            document.getElementById('editAddress').value = studentAddress;
            document.getElementById('editPhone').value = studentPhone;
        });

        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const studentId = button.getAttribute('data-id');
            const modalInput = deleteModal.querySelector('#deleteId');
            modalInput.value = studentId;
        });
    </script>

    <?php include('./shared/footer.php') ?>
</body>
</html>
