<!DOCTYPE html>
<html>
<head>
<style>
  body {
    background-color: blanchedalmond;
   
  }

  .form-container {
    background-color: #fff;
    margin-top: 50px;
    margin-left: 370px;
    width: 600px;
    height: 580px;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
    background-color: rgba(113,99,186,255);
    color: white;
    font-size: 20px;
    font-weight: bold;
    
  }

  h1 {
    text-align: center;
    font-size: 30px;
    color: #4CAF50;
    margin-top: 20px;
    margin-bottom: 50px;
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
    font-size: 20px;
    margin-left: 10px;
    text-align: left;
  }

  .form-label1 {
    margin-bottom: 10px;
    font-size: 20px;
    margin-left: 1px;
    text-align: left;
  }

  .form-label2 {
    margin-bottom: 10px;
    font-size: 20px;
    margin-left: 75px;
    text-align: left;
  }
  .form-label3 {
    margin-bottom: 10px;
    font-size: 20px;
    margin-left: 130px;
    text-align: left;
  }
  .form-label4 {
    margin-bottom: 10px;
    font-size: 20px;
    margin-left: 75px;
    text-align: left;
  }

  .form-label5 {
    margin-bottom: 10px;
    font-size: 20px;
    margin-left: 83px;
    text-align: left;
  }

  .form-label6  {
    margin-bottom:10px;
    font-size: 20px;
    margin-left: 93px;
    text-align: left;
  }

  .form-input {
    margin-top: 12px;
    margin-right: 5px;
    margin-left: 15px;
    width: 300px;
    font-size: 17px;
    padding: 5px;
    margin-bottom: 15px;
  }
  .form-input1{
    margin-top: 12px;
    margin-right: 5px;
    margin-left: 15px;
    width: 300px;
    font-size: 17px;
    padding: 5px;
    margin-bottom: -35px;

  }

  /* Additional CSS to make labels and input fields appear on the same line */
  .form-label input,
  .form-label textarea {
    margin-top: 5px;
  }

  .form-label label {
    display: inline-flex;
    align-items: center ;
  }
.button{
  margin-top: 57px;
  background-color: #4CAF50; /* Green */
border: none;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 18px;
font-weight: bold;

}

  
</style>
</head>
<body>

  <div class="form-container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="hall-booking-form">
      <div class="form-label1">
        <label for="Department_name">
          Department Name:
          <select  id="name" name="Department_Name" class="form-input" required>
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
<?php
if(isset($_POST['Book_Hall']))
{
  include('../database/connection.php');
  $Department_Name = $_POST['Department_Name'];
  $Hall_Name = $_POST['Hall_Name'];
  $Date = $_POST['Date'];
  $Start_Time = $_POST['Start_Time'];
  $End_Time = $_POST['End_Time'];
  $purpose = $_POST['purpose'];

  $query ="INSERT INTO booking_form (Department_Name,Hall_Name,Date,Start_Time,End_Time,purpose) VALUES('$Department_Name','$Hall_Name','$Date','$Start_Time','$End_Time','$purpose')";
  if($conn->query($query)){
  
    echo 'Data Inserted Successfully';
  }
  
}
?>
</h1>
</form>
</div>

</body>
</html>
