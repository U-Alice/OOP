<!Doctype html>
<head>
    <style>
button{
    height: 50px;
    display:inline-block;
    width:200px;
    border: 2px solid blue;
    background-color: blue;
    border-radius: 5px;
    font-size: 1em;
    font-family: new Romans;
    opacity:50%;
    color:white;
    margin-left:42px;
    margin-top:50px
}
.buttons{
    margin-top:5%;
    margin-left:150px
}
form{
    display: inline;
}
p{
    color:red; font-size:24px; margin-left:50px; color:grey; margin-left:5%; font-family:monospace
}
img{
    width:500px;height:500px; margin-left:0%; display:inline
}
.main{
    display:flex; margin-top:100px
}
    </style>
</head>
</html>

<?php
//user info collected from input
include "./connection.php";
function testData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function validateInfo(){
$error= "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
   if(empty($_POST["pname"])){
    $error = "product name is required";
   }
   if(empty($_POST["brand"])){
    $error = "brand name is a required text";   
   }

   if(empty($_POST["telephone"])){
    $error = "supplier telephone is required";
   }
    if(empty($_POST["supplier"])){
    $error = "Supplier name is required";
   }
if($error == ""){
  return "successfull";
}
  return "Product insert failed:".$error;
}
}
//connection to database configuration
//getting image configuration
if(validateInfo() === "successfull"){
    $pname = testData($_POST["pname"]); 
    $brand = testData($_POST["brand"]);
    $telephone = testData($_POST["telephone"]);  
    $supplier = testData($_POST["supplier"]);

    $database = new database();
    $database -> insert('products', ['product_Name'=>$pname, 'brand'=>$brand, 'supplier_phone'=>$telephone, 'supplier'=>$supplier]);
 
    echo "<a href='displayProduct.php'>Click here to display the data</a>";

}else{
    $result = validateInfo();
    echo "<div class='main'>
    <div class='buttons'>
    <p>$result</p>
    <form action='./prodInsert.html'>
    <button type='submit'>Back</button>
    </form>
    <button>Home</button>
    </div>
    <img src='https://img.freepik.com/free-vector/electronic-documentation-man-with-registration-checking-repository-log-online-approval-screen-form-validation-page-expense-chronicles-vector-isolated-concept-metaphor-illustration_335657-4323.jpg?w=2000' alt='validation failure'>
     </div>
     ";
    }
?>