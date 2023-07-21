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
      margin: 20px 0;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
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
  <h1>Hall Booking Requests </h1>

  <table>
    <tr>
      <th>Hall Name</th>
      <th>Department_Name</th>
      <th>Booking Date</th>
      <th>Status</th>
      <th>Action</th>
    </tr>
    <tr>
      <td>Hall A</td>
      <td>John Doe</td>
      <td>2023-07-25</td>
      <td>Pending</td>
      <td class="action-buttons">
        <button class="approve-button" onclick="approveBooking(1)">Approve</button>
        <button class="reject-button" onclick="rejectBooking(1)">Reject</button>
      </td>
    </tr>
    <!-- Repeat the above row structure for other booking requests -->
  </table>

  <!-- JavaScript code to handle approval and rejection -->
  <script>
    function approveBooking(bookingId) {
      // Call a server-side API or AJAX function to handle approval
      // Example: Use fetch() to send a request to the server
      fetch(`/approve_booking.php?id=${bookingId}`, { method: 'POST' })
        .then(response => response.text())
        .then(message => alert(message))
        .catch(error => console.error(error));
    }

    function rejectBooking(bookingId) {
      // Call a server-side API or AJAX function to handle rejection
      // Example: Use fetch() to send a request to the server
      fetch(`/reject_booking.php?id=${bookingId}`, { method: 'POST' })
        .then(response => response.text())
        .then(message => alert(message))
        .catch(error => console.error(error));
    }
  </script>
</body>
</html>
