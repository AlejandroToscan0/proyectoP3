<?php
include_once('../../php/conexion.php');

$sql = "SELECT * FROM `perfil`";
$result = mysqli_query($conn, $sql);
$data = [];
while ($fetch = mysqli_fetch_assoc($result)) {
    $data[] = $fetch;
}
echo json_encode($data);
