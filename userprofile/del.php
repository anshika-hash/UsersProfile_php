<?php

include 'connection.php';
$did = $_GET['did'];




if(isset($_POST['yes'])){
    $did = $_GET['did'];
$del = " DELETE FROM `usersprofile`  where `id` = '$did' ";
$query = mysqli_query($conn,$del);



    echo "<meta http-equiv='refresh' content='0;url=login.php' >";

 
}
if(isset($_POST['no'])){

 
echo "<meta http-equiv='refresh' content='0;url=usersprofile.php'>";
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body class="bg-dark" >
    <h1></h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
   <!- Flexbox container for aligning the toasts -->
<!-- Flexbox container for aligning the toasts -->
<section  >
<div class="card text-white bg-danger m-auto mt-3" style="max-width: 18rem;">

<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div class="text-center" style="display:flex">
  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-exclamation-triangle-fill m-1" viewBox="0 0 16 16">
  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg><h3 class="m-1">!! Alert</h3>
  </div>
</div>

  <div class="card-body" >
   
    <p class="card-text">Do You Really Want To Sign Out.</p>
    <div class="align-items:center">
      <form method="post" style="display:flex">
    <button class="btn btn-primary m-1" type="submit" name="no" style="width:auto"  value=""> No</button><br>
    <button class="btn btn-success m-1" type="submit" name="yes" style="width:auto"  value=""> Yes</button><br>
    <form>
<div>
  </div>
</div>
<section>
  </body>
</html>