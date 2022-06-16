<!Doctype html>
<head>
    <style>
button{
    height: 50px;
    display:inline-block;
    width:200px;
    border: 2px solid #333C53;
    background-color: #333C53;
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
error_reporting(E_ALL);
include './connection.php';
if(isset($_POST['submit'])){
    $username = trim($_POST['username']);
    $password = trim(hash("md5",$_POST['password']));
    if($username == '' || $password == ''){
        echo "<div class='main'>
        <div class='buttons'>
        <p>Invalid credentials, please Enter valid data</p>
        <form action='./index.html'>
        <button type='submit'>Back</button>
        </form>
        <button>Home</button>
        </div>
        <img src='https://img.freepik.com/free-vector/electronic-documentation-man-with-registration-checking-repository-log-online-approval-screen-form-validation-page-expense-chronicles-vector-isolated-concept-metaphor-illustration_335657-4323.jpg?w=2000' alt='validation failure'>
         </div>
         ";
    }
    else{
        $database = new database();
        $database -> select("users", "*", "username = '$username' AND password = '$password'");
        $selectQuery = $database -> sql;
        if(mysqli_num_rows($selectQuery) <= 0){
            echo 'Invalid credentials';
        }else{
            while(list($userId,$firstname,$lastname,$email,$phone,$gender,$nationality) = mysqli_fetch_array($selectQuery) ){
                $cookie_name = "user";
                $cookie_value = $firstname;
            }
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
            if(!isset($_COOKIE[$cookie_name])){
                echo "Server error! try again";
                
            }else{
                header("Location: ./displayProduct.php");
            }
        }
    }
}
?>