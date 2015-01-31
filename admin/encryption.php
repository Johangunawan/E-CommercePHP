<?php include ("koneksi.php"); 
$password = "admin";
$format = "$2a$10$";
$hash = "Halohalohalohalohalo22";
$salt = $format . $hash;

$new_pass = crypt($password, $salt);

?>