<?php
include('conn.php');

$sql = "SELECT * FROM utilizador";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

?>
  <div class="row border-bottom text-center">
    <div class="col">
      <button class="btn btn-primary">Editar</button>
      <button class="btn btn-secondary">Reset PWD</button>
      <a href="db/delete.php?id=<?= $row["id"] ?>" class="btn btn-danger">Eliminar</a>
    </div>
    <div class="col"><?= $row["id"] ?></div>
    <div class="col"><?= $row["username"] ?></div>
    <div class="col"><?= $row["password"] ?></div>
  </div>
<?php

  }
} else {
  echo "0 results";
}
$conn->close();
?>