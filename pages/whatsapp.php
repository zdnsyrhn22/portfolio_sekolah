<?php 

$course = $_POST["course"];
$kelas = $_POST['kelas'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birtday = $_POST['birthday'];
$handphone = $_POST['handphone'];
$email = $_POST['email'];



header("Location: https://wa.me/6289514798334?text=Hallo%20Brand%0A________________________%0AFirstName%20:%20$firstname%0ALastName%20:%20$lastname%0ADate%20of%20birth%20:%20$birtday%0ANo%20hp%20:%20$handphone%0AEmail%20:%20$email%0A________________________%0ACourse%20:%20$course%0AClass%20:%20$kelas");
?>