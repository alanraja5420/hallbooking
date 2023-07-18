<!DOCTYPE html>
<html>
<head>
  <title>Hall Booking Form</title>
</head>
<body>
  <h2>Hall Booking Form</h2>

  <?php
  // Check if the form is submitted
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $startTime = $_POST['start_time'];
    $endTime = $_POST['end_time'];
    $description = $_POST['description'];

    // Validate the form data
    $errors = [];

    if (empty($name) || empty($email) || empty($date) || empty($startTime) || empty($endTime) || empty($description)) {
      $errors[] = "Please fill in all the fields.";
    }

    // Check if the end time is later than the start time
    if (strtotime($endTime) <= strtotime($startTime)) {
      $errors[] = "End time must be later than start time.";
    }

    // Check if the date is in the future
    if (strtotime($date) < strtotime('today')) {
      $errors[] = "Date must be today or a future date.";
    }

    // Check if there are any conflicting bookings for the chosen date and time
    $existingBookings = [
      // Simulated array of existing bookings (retrieve data from the database instead)
      ['date' => '2023-07-12', 'start_time' => '09:00', 'end_time' => '11:00'],
      ['date' => '2023-07-12', 'start_time' => '14:00', 'end_time' => '16:00'],
      ['date' => '2023-07-13', 'start_time' => '10:00', 'end_time' => '12:00']
    ];

    foreach ($existingBookings as $booking) {
      if ($booking['date'] === $date && !(strtotime($endTime) <= strtotime($booking['start_time']) || strtotime($startTime) >= strtotime($booking['end_time']))) {
        $errors[] = "There is a conflicting booking for the chosen date and time.";
        break;
      }
    }

    // Display errors, if any
    if (!empty($errors)) {
      echo "<ul>";
      foreach ($errors as $error) {
        echo "<li>$error</li>";
      }
      echo "</ul>";
    } else {
      // Perform further processing (e.g., store the booking details in a database)

      // Display a success message
      echo "<p>Your hall booking has been confirmed.</p>";
      echo "<p>Name: $name</p>";
      echo "<p>Email: $email</p>";
      echo "<p>Date: $date</p>";
      echo "<p>Start Time: $startTime</p>";
      echo "<p>End Time: $endTime</p>";
      echo "<p>Description: $description</p>";
    }
  }
  ?>

  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br><br>

    <label for="start_time">Start Time:</label>
    <input type="time" id="start_time" name="start_time" required><br><br>

    <label for="end_time">End Time:</label>
    <input type="time" id="end_time" name="end_time" required><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>

    <input type="submit" value="Book Hall">
  </form>
</body>
</html>