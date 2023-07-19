<!DOCTYPE html>
<html>
<head>

</head>
<body style="background-color:tomato;">
 
  <h1 style="text-align:center">SJC HALLS</h1>  

  <h2>Hall Booking Form</h2>
  
  <!-- PHP code and form remain unchanged -->

  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="Department_name">Department Name:</label>
    <input type="text" id="name" name="name" required><br><br><br><br>

    <label for="Hall_name">Hall Name:</label>
    <input type="Hall_name" id="Hall_name" name="Hall_name" required><br><br><br><br>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required><br><br><br><br>

    <label for="start_time">Start Time:</label>
    <input type="time" id="start_time" name="start_time" required><br><br><br><br>

    <label for="end_time">End Time:</label>
    <input type="time" id="end_time" name="end_time" required><br><br><br><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br><br><br>

    <input type="submit" value="Book Hall">
  </form>
</body>
</html>
<style>
  .form-label {
    margin-bottom: 10px; /* Adjust the value to control the spacing */
  }
</style>
<label for="Department_name" class="form-label">Department Name:</label>
<label for="Hall_name" class="form-label">Hall Name:</label>
<!-- Other labels with the form-label class -->
