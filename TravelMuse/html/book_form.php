<?php
$connection = mysqli_connect('localhost', 'root', '', 'book_db');
if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $location = $_POST['location'];
  $guests = $_POST['guests'];
  $arrivals = $_POST['arrivals'];
  $leaving = $_POST['leaving'];

  // Prepare the statement
  $stmt = mysqli_prepare($connection, "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

  // Bind the parameters to the statement
  mysqli_stmt_bind_param($stmt, 'ssssssss', $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);

  // Execute the statement
  if (mysqli_stmt_execute($stmt)) {
    header('location: trip.php');
  } else {
    echo 'Something went wrong, please try again.';
  }

  // Close the statement
  mysqli_stmt_close($stmt);
} else {
  echo 'Something went wrong, please try again.';
}
?>