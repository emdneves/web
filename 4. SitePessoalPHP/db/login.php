<?php
include('conn.php');

$username = $_POST['email'];
$password = $_POST['pass'];

$sql = "SELECT * FROM utilizador WHERE
         username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  header('Location: ../index.php?p=conta');
} else {
  header('Location: ../index.php?p=login&r=erro');
}
$conn->close();
?>