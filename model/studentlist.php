<?php
    function updateStudent($db, $edit_id, $name, $address, $phone) {
        $sql_update = "UPDATE student SET name='$name', address='$address', phone_number='$phone' WHERE id=$edit_id";
        
        if (mysqli_query($db, $sql_update)) {
            header("Location: ../view/studentlist.php");
            echo "<div class='alert alert-success'>Student updated successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error updating student: " . mysqli_error($db) . "</div>";
        }
    }

    function deleteStudent($db, $delete_id) {
        $sql_delete = "DELETE FROM student WHERE id=$delete_id";
        
        if (mysqli_query($db, $sql_delete)) {
            header("Location: ../view/studentlist.php");
            echo "<div class='alert alert-success'>Student deleted successfully.</div>";
        } else {
            echo "<div class='alert alert-danger'>Error deleting student: " . mysqli_error($db) . "</div>";
        }
    }
?>
