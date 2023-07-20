<!DOCTYPE html>
<html>
<head>
<style>
  body {
    background-color: LightBlue;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .form-container {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
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
  <div class="form-container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="hall-booking-form">
      <div class="form-label">
        <label for="Department_name">
          Department Name:
          <select  id="name" name="Department_name" class="form-input" required>
          <option value="">Department_Name</option>
          <option value="cs">cs</option>
            <option value="phy">phy</option>
            <option value="che">che</option>
            <option value="mat">mat</option>
            <option value="eng">eng</option>
            <option value="tamil">tamil</option>
            <option value="eco">eco</option>
</select>
        </label>
      </div>

      <div class="form-label">
        <label for="Hall_name">
          Hall Name:
          <select id="Hall_name" name="Hall_name" class="form-input" required>
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
  </div>
</body>
</html>
