<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://v40.pingendo.com/assets/4.0.0/default/theme.css" type="text/css"> </head>
<title>Login page</title>
<body>
  <div class="py-5 text-white opaque-overlay" style="background-image: url(&quot;https://pingendo.github.io/templates/sections/assets/cover_restaurant.jpg&quot;);">
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h1 class="text-gray-dark">Rigister Form</h1>
          
          <form class="" method="post" action="">
            <div class="form-group"> <label>Username</label>
              <input type="name" name="username" class="form-control" placeholder="Enter Username"> </div>
              <div class="form-group"> <label>Firstname</label>
              <input type="name" name="firstname" class="form-control" placeholder="Enter Firstname"> </div>
              <div class="form-group"> <label>E-mail</label>
              <input type="e-mail" name="email" class="form-control" placeholder="Enter E-mail"> </div>
            <div class="form-group"> <label>Password< twice ></label>
              <input type="password" name="password1" class="form-control" placeholder="Enter password 1"> 
              <input type="password" name="password2" class="form-control" placeholder="Enter password 2"></div>
               Password has to be at least 8 characters long and must not contain spaces
            <button type="submit"name="submit" class="btn btn-primary">Free Registration</button>
            <button type="display" name="display" class="btn btn-primary">Display</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
<?php
  class member{
    function __construct(){

    }
    function insert($username,$firstname,$email,$password1,$password2){
      $con=new mysqli("localhost","root","","lab3");
        if ($con->connect_error) {
            die('Connect Error: ' . $con->connect_error);
        }
        $sql="INSERT INTO user (username,firstname,email,password1,password2)VALUE('$username','$firstname','$email','$password1','$password2')";
        if($con->query($sql)==TRUE){
          return 1;
        }
        else
          return 0;
    }
    function select(){
      $con=new mysqli("localhost","root","","lab3");
      if ($con->connect_error) {
          die('Connect Error: ' . $con->connect_error);
      }
      $sql="SELECT username,firstname,email FROM user";
      $res = $con->query($sql);
      return $res;
  }

}
$conn = new Member();
if(isset($_POST['submit']))
{
    if ($_POST['password1']!= $_POST['password2'])
        echo("Password did not match! Try again. ");
    else{
        $username=$_POST['username'];
        $firstname=$_POST['firstname'];
        $email=$_POST['email'];
        $password1=$_POST['password1'];
        $password2=$_POST['password2'];
    
        if($conn->insert($username,$firstname,$email,$password1,$password2)==1)
            echo "register success";
        else
            echo "register not success";
    }
}
if(isset($_POST['display']))
{
    $res=$conn->select();
    while($row = $res->fetch_assoc()) {
        echo "username: " . $row["username"]. "  Name: " . $row["firstname"]. " Email: " . $row["email"]. "<br>";
    }
 
}

?>