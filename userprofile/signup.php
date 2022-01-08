<?php
 include 'connection.php';



if(isset($_POST['submit'])){
 $radioVal = $_POST['link'];

 $name = $_POST["name"];
 $email=$_POST["email"];
 $dob = $_POST["dob"];
 $password=$_POST["password"];


//echo $radioVal;

///////////////////////////////////////////////////////uploading image from in the database///////////////////////////////////////////////////////////////////
//$name = $_FILES['file'];
$file_name = $_FILES['file']['name'];
$temp_name = $_FILES['file']['tmp_name'];
$file_destination = "upload/".$file_name;

if(move_uploaded_file($temp_name,$file_destination)){
    
     echo  " uploaded sucessfull.";
    }else{
    echo  "uploaded failed";
    }



///////////////////////////////////////////////////////////////fetching data from the database/////////////////////////////////////////////////////
$q0 = "SELECT * FROM `usersprofile` where `email`='$email' ";
$query0 = mysqli_query($conn,$q0);
$query00 = mysqli_fetch_assoc($query0);
if($query00){

$id = $query00['id'];

}else{
  ///////////////////////////////////////////////////////////////Insert data in the database/////////////////////////////////////////////////////
  $q =  "INSERT INTO `usersprofile`( `name`, `email`, `password`,`dob`,`status`,`url`) VALUES ('$name','$email','$password','$dob','$radioVal','$file_destination')";
  $query = mysqli_query($conn,$q);
  

  $q1 = "SELECT `id` FROM `usersprofile` where `email`='$email' ";
  $query1 = mysqli_query($conn,$q1);

$query11 = mysqli_fetch_assoc($query1);


$id = $query11['id'];


}

?>
 


<?php

$q2 = "SELECT `id` FROM `usersprofile`";
$query2 = mysqli_query($conn,$q2);
$query2 = mysqli_fetch_assoc($query2);

if($query2){
      echo "<meta http-equiv='refresh' content='0;url=login.php' >";
}




}



?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--JqUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
     <link href="style1.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title> Sign Up</title>
  </head>
  <body style="background-color:rgb(208, 233, 230);">
 





    
  <div class="col-lg-6 m-auto">
  <!--FORM-->
  
    <form method="post"  enctype="multipart/form-data">
 <br><br>  <div class="card m-auto" style="width:fit-content;border:3px solid black">
<div class="card-header bg-dark">
<h1 class="text-white text-center"> Sign Up</h1>

</div><br>

<section  class ="m-2" style="background-color:rgb(208, 233, 230); width:fit-content; ">


<!--NAME-->
<div class="input-group m-2" style="width:300px;" >
 <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="name" value="" required>
</div>

<!--dob-->
<div class="input-group m-2" style="width:300px;" >
 <input type="text" class="form-control" placeholder="Date Of Birth" aria-label="Username" aria-describedby="basic-addon1" name="dob" value="" required>
</div>

<div class="input-group m-2" style="width:300px;" >
 <input type="text" class="form-control" placeholder="E-mail Addresse" aria-label="Username" aria-describedby="basic-addon1" name="email" value="" required>
</div>

<!--Email Addresse-->
<div class="input-group m-2" style="width:300px">
  <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password" value="" required>
</div>

<!--         uploading photo             -->
<div class="mb-1">
 
  <input class="form-control m-2" type="file" id="formFile" style="width:300px" name="file" value="" required>
</div> 




<select class="form-select m-2" aria-label="Default select example" style="width:fit-content" name="link">
  <option selected>Select Status</option>
  <option value="Active" name="link">Active</option>
  
  <option value="Paused" name="link">Paused</option>
</select>



<button class="btn btn-outline-success m-1" type="submit" name="submit" style="width:100px"  value=""> SUBMIT</button><br>
<!--<button class="btn btn-outline-success m-1" type="submit" name="submittedProjects" style="width:100px"  value=""> Submited Projects</button><br>-->
</div>
<section>
 
</form>
</div>

  </body>
</html>