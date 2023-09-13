<?php

$id=$_SESSION['user'];
include("..\database\connection.php");
$query = "SELECT * FROM booking_form where status=1 or status=3 or status=2 and ";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Hall Booking Admin Panel</title>
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
    /* Styles for Action Buttons */
.pending-button {
    background-color: #ffc107; /* Light yellow */
    color: black;
    padding: 6px 12px;
    border-radius: 4px;
}

.approved-button {
    background-color: #4CAF50; /* Green */
    color: white;
    padding: 6px 12px;
    border-radius: 4px;
}

.rejected-button {
    background-color: #f44336; /* Red */
    color: white;
    padding: 6px 12px;
    border-radius: 4px;
}

  
    
    </style>
</head>
<body>
<?php include "Sidebar.php"?>
<div class="main--content">
<?php include 'header.php'?>
    <div class="card-container">
  <h1>Hall Booking Status</h1>

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
        <td>
    <?php if ($row['status'] == 3): ?>
        <span class="pending-button">Pending</span>
    <?php elseif ($row['status'] == 1): ?>
        <span class="approved-button">Approved</span>
    <?php else: ?>
        <span class="rejected-button">Rejected</span>
    <?php endif; ?>
</td>
      
        
      </tr>
    <?php
    }
    ?>
  </table>

  <!-- JavaScript code to handle approval and rejection -->
  <!-- ... Your JavaScript code ... -->
    </div>
</div>
</body>
</html>
