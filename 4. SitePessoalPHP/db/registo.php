<?php
include('conn.php');

$username = $_POST['email'];
$password = $_POST['pass'];
$password2 = $_POST['pass2'];

if($password != $password2){
    header('Location: ../index.php?p=registo&r=erro');
}else{
    $sql = "INSERT INTO utilizador (username, password) 
                VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        header('Location: ../index.php?p=login&r=ok');
    } else {
        header('Location: ../index.php?p=registo&r=erro');
    }
}

$conn->close();
?>