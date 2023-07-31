<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="Stylesheet" href="Booking.css"/> 
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    
</head>
<body>
    <?php include "Sidebar.php"?>
<div class="main--content">
<?php include 'header.php'?>

<div class="form-container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="hall-booking-form">
      <div class="form-label1">
        <label for="Department_name">
          Department Name:
          <select  id="name" name="Department_Name" class="form-input" required>
          <option value="">Department_Name</option>
          <option value="Computer Science">Computer Science</option>
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Mathematics">Mathematics</option>
            <option value="English">English</option>
            <option value="Tamil">Tamil</option>
            <option value="Economics">Economics</option>
</select>
        </label>
      </div>

      <div class="form-label2">
        <label for="Hall_name">
          Hall Name:
          <select id="Hall_name" name="Hall_Name" class="form-input" required>
            <option value="">Select a Hall</option>
            <option value="Lawley Hall">Lawley Hall</option>
            <option value="KP Joseph Hall">KP Joseph Hall</option>
            <option value="Sail auditorium">Sail auditorium</option>
            <option value="Jublie Hall">Jublie Hall</option>
            <option value="Marine Hall">Marine Hall</option>
            <option value="MCA Seminar Hall">MCA Seminar Hall</option>
            <option value="Community Center Hall">Community Center Hall</option>
            <!-- Add more options as needed -->
          </select>
        </label>
      </div>

      <div class="form-label3">
        <label for="date">
          Date:
          <input type="date" id="date" name="Date" class="form-input" required>
        </label>
      </div>

      <div class="form-label4">
        <label for="start_time">
          Start Time:
          <input type="time" id="start_time" name="Start_Time" class="form-input" required>
        </label>
      </div>

      <div class="form-label5">
        <label for="end_time">
          End Time:
          <input type="time" id="end_time" name="End_Time" class="form-input" required>
        </label>
      </div>

      <div class="form-label6">
        <label for="purpose">
          Purpose:
          
          <textarea id="purpose" name="purpose" rows="4" cols="50" class="form-input1" required></textarea>
        </label>
      </div>
      
      <input type="submit" name="Book_Hall" value="Book Now" class="button">
      </div>
<h1>


<!-- Your existing HTML code -->

<?php
if (isset($_POST['Book_Hall'])) {
    include('../database/connection.php');
    $Department_Name = $_POST['Department_Name'];
    $Hall_Name = $_POST['Hall_Name'];
    $Date = $_POST['Date'];
    $Start_Time = $_POST['Start_Time'];
    $End_Time = $_POST['End_Time'];
    $purpose = $_POST['purpose'];

    // Check if the selected date and hall already have a booking
    $query = "SELECT * FROM booking_form WHERE Hall_Name='$Hall_Name' AND Date='$Date'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // The selected hall is already booked for the selected date
        echo 'The hall is already booked for the selected date.';
    } else {
        // Insert the new booking into the database
        $query = "INSERT INTO booking_form (Department_Name, Hall_Name, Date, Start_Time, End_Time, purpose)
                  VALUES ('$Department_Name', '$Hall_Name', '$Date', '$Start_Time', '$End_Time', '$purpose')";

        if ($conn->query($query)) {
            echo 'Data Inserted Successfully';
        } else {
            echo 'Error inserting data: ' . $conn->error;
        }
    }
}
?>

<!-- Rest of your HTML code -->




</h1>
</form>
</div>
</div>
    
</body>
</html>


