<!Doctype html>
<head>
    <title>Display</title>
    <link rel="stylesheet" href="./displayProduct.css">
</head>
<body>
    <h3>AVAILABLE PRODUCTS</h3>
</body>
</html>


<?php
include "./connection.php";
$database = new database();
$database -> select("products", "*");
$result = $database -> sql;


echo "<table class='table'><tr><th>No</th>
      <th>Product Id</th>
      <th>Product name</th>
      <th>brand</th>
      <th>supplier phone</th>
      <th>added date</th>
      </tr>";
      while ($rows = mysqli_fetch_assoc($result)) {
        //   $filePath = "uploads/" .$rows['images'];
        echo"<tr>
             <td class='id'>".$rows["productId"]."</td>   
             <td>".$rows["product_Name"]."</td>   
             <td>".$rows["brand"]."</td>
             <td>".$rows["supplier_phone"]."</td>  
             <td>".$rows["supplier"]."</td>
             <td>".$rows["added_date"]."</td>
             </tr>";
            }
            //  <td><a href=updateDisplay.php?thisID=".$rows["user_id"]." class='update'>Update</a></td>
            //  <td><a href=delete.php?thisID=".$rows["user_id"]." class='delete'>Delete</a><td>
         echo "</table>";

         echo '   <div class="new">
         <a href="./prodInsert.html" class="add">ADD PRODUCT +</a>
     </div>';

       
?>