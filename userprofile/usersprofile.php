<?php include 'connection.php'; 

$id = $_GET['id'];

?>
                   

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--Google icons-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Users</title>
<!--Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    
  </head>
  <body style="background-color:rgb(208, 233, 230);font-family: 'Itim', cursive;">
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  <section>

 <div class="d-flex flex-row  bd-highlight ">
  <div class=" bd-highlight m-3" style="width:100vw;" >
  
  
<h1 style="text-align:center;margin:50px">  Users Profile      </h1>

 
<div class="table-responsive">

  <table class="table table-dark table-hover m-auto p-3" style="width:70%; " >

  <thead class=" text-center "  >
    <tr  >
  <th >Id  </th>
  <th>Name </th>
 <th>Date Of Birth </th>
  <th > Status </th>
  <th >Delete </th>
</tr>

</thead>

<?php 

$selectquery = "SELECT * from `usersprofile`  ";

$query = mysqli_query($conn,$selectquery);
$numOfrows = mysqli_num_rows($query);
//echo $numOfrows;
//echo $uid;
$i = 0;
while($res = mysqli_fetch_assoc($query)){
  $i= $i+1;
  ?>
  <tr class="text-center">
    
  <td ><?php  echo $i;?>  </td>
   <td ><?php  echo $res['name']; ?>  </td>
  <td ><?php echo $res['dob'];  ?>  </td>
  <td><?php echo $res['status'] ?>  </td>
  

  <td> <?php echo '<a href="del.php?did='.$res['id']. '"><button  class="btn btn-outline-primary"  type="button" name="btnn" > <i class="material-icons">delete</span> </button></i>';?></td>
  <?php
 
}
?>
  </td>
</tr>

</table>

</div>
</div>
</div>



</section>
    


  </body>
</html>

