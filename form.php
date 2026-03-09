<?php
include "db.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM indigency_requests WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: view.php"); // redirect back to records page
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "No ID specified.";
}
?>