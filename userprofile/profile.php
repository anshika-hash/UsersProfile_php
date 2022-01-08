<?php include 'connection.php';
//$uid = $_GET['uid'];
$id = $_GET['id'];
//echo $uid.'<br></br>';
//echo $id.'<br></br>';




 $un = "SELECT * FROM `usersprofile` where id = '$id' ";
 $un1 = mysqli_query($conn,$un);
  $ui = mysqli_fetch_assoc($un1);


///////////////////////////////////////////////////////////////////////////////////////
?>
                   

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Google icons-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--css-->
    <link href="style.css" rel="stylesheet" crossorigin="anonymous">
    
    <title> Profile</title>
 <!--Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
    
  </head>
  
  
  
  <body style="font-family: 'Itim', cursive;">
 <style>
     
     a{
         text-decoration:none;
     }
     
     
 </style>
 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  <section>

    <div class="d-flex flex-row bd-highlight pt-5"  >
  <div class="p-2 bd-highlight m-auto  pro"  >
  
  <h2 class="m-3 text-center text-white bg-dark p-2">Welcome  <?php  echo "".$ui['name'];  ?></h2>

  <img src="<?php echo$ui['url'];  ?>" class="rounded mx-auto d-block m-3 p-1" alt="..." width=130  height=140 style="border:5px solid  white">
  

<!--------------------------------------------------------Form ---------------------------------------------------------------->
<form method="post">
  <!--TABLE-->


  <table class="table m-3" style="width:fit-content;">

  
      <tr  class="m-auto bg-warning"  >
    
      <td > <?php echo '<a href="edit.php?id='.$id. '"><button  class="btn btn-outline-light "  type="button" name="btnn" > Edit Profile </button></a>';?></td>
      
    </tr> 
 

  </table>
<!--TABLE-->


 
<!--TABLE-->
<div class="table-responsive ">

<table class=" table table-dark table-hover"  >

  <thead >
    <tr class="text-center" >
   
 
  <th > Date of Birth </th>
  <th>Status </th>
 <th> Users </th>
</tr>
</thead>
  

<?php 
///////////////////////////////////////////////////////////////////////////////////

$selectquery = "SELECT * from `usersprofile` WHERE   id = '$id'";

$query = mysqli_query($conn,$selectquery);
$numOfrows = mysqli_num_rows($query);


if($res = mysqli_fetch_assoc($query)){
  
  ?>
  
  <tr class="text-center">
    
 
  <td><?php echo $res['dob']; ?>  </td>
  <td > <?php echo $res['status'] ;?> </td>
  

 
  <td> <?php echo '<a href="edit.php?id='.$res['id'].  '"><button  class="btn btn-outline-light"  type="button" name="btnn" >Users</button></a>';?></td>
 

  </tr>
  <?php     }

  ?>
  

</table>

</div>
</form>
</div>
</div>



</section>
   <script>
      $("#button1").click(function(){
    $("#button2").trigger('click');

});
      
  </script>  


  </body>
 
  
</html>