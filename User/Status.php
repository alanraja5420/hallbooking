<?php
session_start();
if($_SESSION['user']){
include("..\database\connection.php");

$query = "SELECT * FROM booking_form WHERE Department_Name='Computer Science' AND (status = 3 OR status = 1)";
$result = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Hall Booking Admin Panel</title>
  <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h1 {
      text-align: center;
      margin-top: 40px;
      margin-bottom: 30px;
      color: #cc0000;
      font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      border-radius: 5px;
      border-color: black;
      
    }
    th, td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
      text-align: center;
    }
    th {
      background-color: #f2f2f2;
    }
    tr:hover {
      background-color: #f5f5f5;
    }
    .action-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
    }
    .approve-button, .reject-button {
      padding: 6px 12px;
      border-radius: 4px;
      cursor: pointer;
      outline: none;
    }
    .approve-button {
      background-color: #4CAF50;
      color: white;
      border: none;
    }
    .reject-button {
      background-color: #f44336;
      color: white;
      border: none;
    }
    </style>
</head>



<body>
<?php include "Sidebar.php"?>
<div class="main--content">
<?php include 'header.php'?>
  <h1>Hall Booking Requests</h1>

  <table>
    <tr>
      <th>Application No</th>
      <th>Department Name</th>
      <th>Hall Name</th>
      <th>Date</th>
      <th>Start Time</th>
      <th>End Time</th>
      <th>Purpose</th>
      <th>Action</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
      <tr>
        <td><?php echo $row['Application_no']; ?></td>
        <td><?php echo $row['Department_Name']; ?></td>
        <td><?php echo $row['Hall_Name']; ?></td>
        <td><?php echo $row['Date']; ?></td>
        <td><?php echo $row['Start_Time']; ?></td>
        <td><?php echo $row['End_Time']; ?></td>
        <td><?php echo $row['purpose']; ?></td>
        <td><?php if($row['status']==3){
            echo 'Pending';
        }elseif($row['status']==1){
            echo "Approved";
        }else{
            echo "Rejected";
        }?></td>
       

        </td>
      </tr>
    <?php
    }
    ?>
  </table>

  <!-- JavaScript code to handle approval and rejection -->
  <!-- ... Your JavaScript code ... -->
</body>
</html>
