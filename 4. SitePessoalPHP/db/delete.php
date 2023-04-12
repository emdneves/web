<?php
include('conn.php');

$id=$_GET['id'];

$sql = "DELETE FROM utilizador WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php');
} else {
    header('Location: ../index.php');
}


$conn->close();
?>