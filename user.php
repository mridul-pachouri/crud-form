<?php
include 'connect.php';
if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="insert into crud (name,email,mobile,password)
  values('$name','$email','$mobile','$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Data inserted successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}


?>




<!doctype html>
<html lang="en" dir="ltl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1", shrink-to-fit=no >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.rtl.min.css">

    <title>crud operation</title>
  </head>
  <body>
    <div class="container">
      <form method="post">
        <div class="form-group">
          <label >Name</label></br>
          <input type="text" class="form-control" placeholder="Name your Name" name="name" >
        </div></br>
        <div class="form-group">
          <label >Email address</label></br>
          <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off" >
        </div></br>
        <div class="form-group">
          <label >Mobile Number</label></br>
          <input type="text" class="form-control" placeholder="Enter your Mobile Number" name="mobile" autocomplete="off">
        </div></br>
        <div class="form-group">
          <label >Password</label></br>
          <input type="password" class="form-control" placeholder="Enter your Password" name="password" >
        </div></br>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
    
  </body>
</html>