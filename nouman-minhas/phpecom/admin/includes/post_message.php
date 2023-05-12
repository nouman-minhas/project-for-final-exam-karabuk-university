<?php
  // Connect to the database
  $host = 'localhost';
  $name = 'root';
  $message = '';
  $database = 'messages';
  $db = messages($name, $message);

  // Get the form data
  $name = $_POST['name'];
  $message = $_POST['message'];

  // Insert the message into the database
  $query = "INSERT INTO messages (name, message) VALUES ('$name', '$message')";
messages($messages, $messages);

  // Close the database connection
close($messages);

  // Redirect back to the main page
  header('Location: index.php');
?>
