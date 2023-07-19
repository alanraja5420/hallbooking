<!DOCTYPE html>
<html>
<head>
<style>
  body {
    background-color: LightBlue;
  }

  h1 {
    text-align: center;
    font-size: 36px;
  }

  h2 {
    font-size: 24px;
  }

  .hall-booking-form {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .form-label {
    margin-bottom: 10px;
    font-size: 18px;
    text-align: center;
  }

  .form-input {
    width: 300px;
    font-size: 16px;
    padding: 5px;
    margin-bottom: 15px;
  }

  /* Additional CSS to make labels and input fields appear on the same line */
  .form-label input,
  .form-label textarea {
    margin-top: 5px;
  }

  .form-label label {
    display: inline-flex;
    align-items: center;
  }
</style>
</head>
<body>
  <h1>SJC HALLS</h1>

  <h2>Hall Booking Form</h2>

  <!-- PHP code and form remain unchanged -->
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="hall-booking-form">
    <div class="form-label">
      <label for="Department_name">
        Department Name:
        <input type="text" id="name" name="name" class="form-input" required>
      </label>
    </div>

    <div class="form-label">
      <label for="Hall_name">
        Hall Name:
        <input type="Hall_name" id="Hall_name" name="Hall_name" class="form-input" required>
      </label>
    </div>

    <div class="form-label">
      <label for="date">
        Date:
        <input type="date" id="date" name="date" class="form-input" required>
      </label>
    </div>

    <div class="form-label">
      <label for="start_time">
        Start Time:
        <input type="time" id="start_time" name="start_time" class="form-input" required>
      </label>
    </div>

    <div class="form-label">
      <label for="end_time">
        End Time:
        <input type="time" id="end_time" name="end_time" class="form-input" required>
      </label>
    </div>

    <div class="form-label">
      <label for="purpose">
        Purpose:
        <textarea id="purpose" name="purpose" rows="4" cols="50" class="form-input" required></textarea>
      </label>
    </div>

    <input type="submit" value="Book Hall">
  </form>
</body>
</html>
