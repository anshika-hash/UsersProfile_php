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
    <title> Login</title>
    
    <!--Google font -->
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    
     </head>
     <body style="background-color:rgb(208, 233, 230);font-family: 'Itim', cursive;">
      
      <section>
          
  <div class="col-lg-6 m-auto p-3" >
  <!--FORM-->
  
    <form method="post"  >
 <br><br>  <div class="card m-auto " style="width:fit-content;border:1px solid black">
<div class="card-header bg-dark">
<h1 class="text-white text-center"> Log in</h1>

</div><br>

<section  class ="m-2" style="background-color:rgb(208, 233, 230);">


<!--NAME
<div class="input-group m-2" style="width:300px;" >
 <input type="text" class="form-control" placeholder="Name" aria-label="Username" aria-describedby="basic-addon1" name="name" value="" >
</div>
-->

<div class="input-group m-2" style="width:300px;" >
 <input type="text" class="form-control" placeholder="E-mail Addresse" aria-label="Username" aria-describedby="basic-addon1" name="email" value="" >
</div>

<!--Email Addresse-->
<div class="input-group m-2" style="width:300px">
  <input type="text" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password" value="" >
</div>



<button class="btn btn-outline-primary m-2"  type="submit" name="submit" style="width:100px"  value=""> SUBMIT</button><br>
<table>
  <tr>
<td> <?php echo '<a href="signup.php"><button  class="btn btn-outline-primary m-2"  type="button" name="btnn" > New User</button></a>';?></td>

</tr>
</table>
</div>
</section>
</form>
</div>
 </section>
  </body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
 //$name = $_POST["name"];
 $email=$_POST["email"];
 
 $password=$_POST["password"];





$q0 = "SELECT * FROM `usersprofile` where `email`='$email' ";
$query0 = mysqli_query($conn,$q0);
$query00 = mysqli_fetch_assoc($query0);

if($query00){

  if(( $query00['email']==$email) and ($query00['password']==$password)){ 
   
    //--------------------User id from sign up table--------------------//
    $id = $query00['id'];
    
//            ---- submition id ----//
$q2 = "SELECT `id` FROM `usersprofile`";
$query2 = mysqli_query($conn,$q2);
$query2 = mysqli_fetch_assoc($query2);
echo $query2['id'];




if($id){
    echo "<meta http-equiv='refresh' content='0;url=profile.php?id=$id' >";
}






  } if((( $query00['email']!= $email) or ($query00['password'] != $password)) or (( $query00['email']!= $email) and ($query00['password'] != $password))){
    echo '<h2  class="text-center  text-danger w-25 m-auto p-2 m-2">Invalid User</h2>';
    
  }
}else{
     echo '<h2  class="text-center  text-danger w-25 m-auto p-2 m-2">Invalid User</h2>';
}
}


