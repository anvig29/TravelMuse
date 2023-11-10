<?php


$name = $_POST['name'];
$review = $_POST['review'];

$name = trim($name); 
$name = htmlspecialchars($name); 
$review = trim($review);
$review = htmlspecialchars($review);

$servername = 'localhost';
$username = 'your_username';
$password = 'your_password';
$dbname = 'your_database_name';


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}


$stmt = $conn->prepare('INSERT INTO reviews (name, review) VALUES (?, ?)');
$stmt->bind_param('ss', $name, $review);

if (empty($name) || empty($review)) {

  $response = 'Error: Please fill in all required fields';
} else if ($stmt->execute()) {

  $response = 'Review submitted successfully';
} else {
  $response = 'Error: ' . $stmt->error;
}

$stmt->close();
$conn->close();

echo $response;
?>
