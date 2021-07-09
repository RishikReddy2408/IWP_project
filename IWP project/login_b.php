<?php 

$host="localhost";
$user="root";
$password="";
$db="demo1";

$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con, $db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['psw'];
    
    $sql="select * from login1 where user='".$uname."'AND pass='".$password."' limit 1";
    
    $result=mysqli_query($con,$sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

<!DOCTYPE html>

<style>

.form-popup {
    height: 400px;
    position: fixed;
    top:200px; 
    left:35%; 
    border: 3px solid #f1f1f1;
    z-index: 9;
    background-color: white;
  }

 /* Add styles to the form container */
  .form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
  }
  
  /* Full-width input fields */
  .form-container input[type=text], .form-container input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }
  
  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus, .form-container input[type=password]:focus {
    background-color: #ddd;
    outline: none;
  }
  
  /* Set a style for the submit/login button */
  .form-container .btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;

    margin-bottom:10px;
    opacity: 0.8;
  }
  
  /* Add a red background color to the cancel button */
  .form-container .cancel {
    background-color: red;
  }
  
  /* Add some hover effects to buttons */
  .form-container .btn:hover, .open-button:hover {
    opacity: 1;
  } 
</style>


<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>

</head>
<body>

    <div class="form-popup" id="myForm">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form-container" method="POST">
          <center><h1>Login</h1></center>
          <br><br>
          <label for="text"><b>Username</b></label>
          <input type="text" placeholder="Enter username" name="username" required>
      
          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>
      
          <button type="submit" class="btn">Login</button>
          <button type="button" class="btn cancel" onclick="closeloginForm()">Close</button>
        </form>
      </div>
     <br>
     <br>


</body>

</html>


