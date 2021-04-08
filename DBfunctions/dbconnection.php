<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'wmsu reservation system'
) or die(mysqli_error($mysqli));

?>
