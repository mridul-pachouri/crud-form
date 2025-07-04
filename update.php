<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from crud where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="UPDATE crud SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password'where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    //echo "Data update successfully";
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

    <title>crud oparetion</title>
  </head>
  <body>
    <div class="container">
      <form method="post">
        <div class="form-group">
          <label >Name</label></br>
          <input type="text" class="form-control" placeholder="Name your Name" name="name" autocomplete="off" value=<?php echo $name;?> >
        </div></br>
        <div class="form-group">
          <label >Email address</label></br>
          <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off" value=<?php echo $email;?>>
        </div></br>
        <div class="form-group">
          <label >Mobile Numer</label></br>
          <input type="text" class="form-control" placeholder="Enter your Mobile Numer" name="mobile" autocomplete="off" value=<?php echo $mobile;?>>
        </div></br>
        <div class="form-group">
          <label >Password</label></br>
          <input type="password" class="form-control" placeholder="Enter your Password" name="password" value=<?php echo $password;?>>
        </div></br>

  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
    
  </body>
</html>