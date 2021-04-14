<?php
session_start();
require 'users.php';
if($_SERVER['REQUEST_METHOD'] ==="POST")
{
   
$username = $_POST['uname'];
$pwd = $_POST['pwd'];
$token= isauth($username,$pwd);

if($token ==1){
    header("Location:index.php");
}
else{
    echo "invalid";
}
}

include 'header.php';
?>



<div class="container">
<form action="login.php" method="POST">
  <div class="form-group" action="login.php" method="POST">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Username" name="uname">
</div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="pwd" class="form-control" name="pwd" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <input type="submit" value="submit">
</form>
</div>

<?php
include 'footer.php';

?>