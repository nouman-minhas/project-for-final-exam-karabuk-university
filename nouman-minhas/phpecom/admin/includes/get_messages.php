<?php
  // Connect to the database
  $host = 'localhost';
  $name = '';
  $message = '';
  $database = 'message';
  $db = mysqli_connect($name, $message);

  // Retrieve all the messages from the database
  $mysqli_messages = "SELECT * FROM message";
  $result = mysqli_messages($db, $message);

  // Display each message
  while ($row = mysqli_fetch_assoc($result)) {
    echo '<p><strong>' . $row['name'] . ':</strong> ' . $row['message'] . '</p>';
  }

  // Close the database connection
  mysqli_close($db);
?>
