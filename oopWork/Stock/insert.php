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
   if(empty($_POST["fname"]  && preg_match("/^[a-zA-Z-' ]*$/",$_POST["gender"]))){
    $error ="name is a required text";   
   }
   if(empty($_POST["lname"] && preg_match("/^[a-zA-Z-' ]*$/",$_POST["lname"]) )){
    $error = "last name is a required text";
   }
   if(empty($_POST["password"])){
    $error = "password is required";
   }
   if(empty($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
    $error = "Email is required to be a valid email";
   }
   if(empty($_POST["gender"])){
    $error = "gender is a required text";   
   }
   if(empty($_POST["username"]) && preg_match("/^[a-zA-Z-' ]*$/",$_POST["username"])){
    $error = "username is a required text";
   }
   if(empty($_POST["nationality"])){
    $error = "nationality is a required text";
   }
   if(empty($_POST["telephone"])){
    $error = "telephone is required";
   }
if($error == ""){
  return "successfull";
}
  return "Sign up failed:".$error;
}
}
//connection to database configuration
//getting image configuration
if(validateInfo() === "successfull"){
    $firstName = testData($_POST["fname"]); 
    $telephone = testData($_POST["telephone"]);
    $nationality = testData($_POST["nationality"]);  
    $userName = testData($_POST["username"]);
    $gender = testData($_POST["gender"]);
    $password = testData($_POST["password"]);
    $password = hash("md5", $password);
    $lastName = testData($_POST["lname"]);
    $email = testData($_POST["email"]);
    $database = new database();
    $database -> insert('users', ['firstName'=>$firstName, 'lastName'=>$lastName, 'email'=>$email, 'telephone'=>$telephone, 'nationality'=>$nationality, 'gender' => $gender, 'password'=>$password, 'username'=>$userName]);
 
    echo "<a href='display.php'>Click here to display the data</a>";

}else{
    $result = validateInfo();
    echo "<div class='main'>
    <div class='buttons'>
    <p>$result</p>
    <form action='./index.html'>
    <button type='submit'>Back</button>
    </form>
    <button>Home</button>
    </div>
    <img src='https://img.freepik.com/free-vector/electronic-documentation-man-with-registration-checking-repository-log-online-approval-screen-form-validation-page-expense-chronicles-vector-isolated-concept-metaphor-illustration_335657-4323.jpg?w=2000' alt='validation failure'>
     </div>
     ";
    }
?>