<?php
   // Include the connect.php file
   require_once "connect.php";
   
   // Query to fetch data from the "leads" table
   $sql = "SELECT name, email, subject, message,timestamp FROM leads";
   $result = $conn->query($sql);
   
   // Close the database connection
   $conn->close();
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Leads - Apex Marketings</title>
      <style>
         html, body {
         width: 100%;
         height:100%;
         }
         body {
         background: linear-gradient(-45deg, #55bf79, #ef6e6e, #23a6d5, #000000);
         background-size: 400% 400%;
         animation: gradient 15s ease infinite;
         }
         @keyframes gradient {
         0% {
         background-position: 0% 50%;
         }
         50% {
         background-position: 100% 50%;
         }
         100% {
         background-position: 0% 50%;
         }
         }
         table {
         border-collapse: collapse;
         width: 50vw;
         height: 80vh;
         animation: fade-in 1s ease-in;
         border-radius: 10px;
         overflow: hidden;
         }
         th, td {
         padding: 12px;
         text-align: left;
         border: 1px solid #ddd;
         }
         th {
         background-color: #f2f2f2;
         }
         tr:nth-child(even) {
         background-color: #ffffff;
         }
         tr:nth-child(odd) {
         background-color: #fffff8;
         }
         td.message {
         word-wrap: break-word;
         }
         @keyframes fade-in {
         0% {
         opacity: 0;
         }
         100% {
         opacity: 1;
         }
         }
         .container-fluid {
         max-width: 995px;
         margin: 0 auto;
         }
         .text-center {
         text-align: center;
         }
      </style>
   </head>
   <body>
      <br>
      <h1 class="text-center" style="color:white;">Leads Data</h1>
      <br>
      <?php if ($result->num_rows > 0): ?>
      <div class="container-fluid">
         <table>
            <tr>
               <th>Name</th>
               <th>Email</th>
               <th>Subject</th>
               <th>Message</th>
               <th>Time</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
               <td><?php echo $row["name"]; ?></td>
               <td><?php echo $row["email"]; ?></td>
               <td><?php echo $row["subject"]; ?></td>
               <td class="message" style="max-width: 25vw"><?php echo $row["message"]; ?></td>
               <td><?php echo $row["timestamp"]; ?></td>
            </tr>
            <?php endwhile; ?>
         </table>
      </div>
      <?php else: ?>
      <p>No data found.</p>
      <?php endif; ?>
   </body>
</html>