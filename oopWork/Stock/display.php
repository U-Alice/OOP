<!Doctype html>
<head>
    <title>Display</title>
    <link rel="stylesheet" href="./display.css">
</head>
<body>
    <h3>AVAILABLE SYSTEM USERS</h3>
</body>
</html>


<?php
include "./connection.php";
$database = new database();
$database -> select("users", "*");
$result = $database -> sql;


echo "<table class='table'><tr><th>No</th>
      <th>First Name</th>
      <th>last Name</th>
      <th>Gender</th>
      <th>Nationality</th>
      <th>email</th>
      <th> Username</th>
      </tr>";
      while ($rows = mysqli_fetch_assoc($result)) {
        //   $filePath = "uploads/" .$rows['images'];
        echo"<tr>
             <td class='id'>".$rows["userId"]."</td>   
             <td>".$rows["firstName"]."</td>   
             <td>".$rows["lastName"]."</td>
             <td>".$rows["gender"]."</td>  
             <td>".$rows["nationality"]."</td>
             <td>".$rows["email"]."</td>
             <td>".$rows["username"]."</td>
             </tr>";
            }
            //  <td><a href=updateDisplay.php?thisID=".$rows["user_id"]." class='update'>Update</a></td>
            //  <td><a href=delete.php?thisID=".$rows["user_id"]." class='delete'>Delete</a><td>
         echo "</table>";

       
?>