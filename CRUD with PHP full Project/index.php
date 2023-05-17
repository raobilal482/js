<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admissions</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
  <body>
    <?php
    include 'connection.php';
   
    ?>
    <div class="container ">
        <h1 class="text-center" >Admissions Portal</h1>
    <table id="mytable" class="table table-striped" style="width:100%">
  <thead>
    <tr>
      <th scope="col">Sr</th>
      <th scope="col">First Name</th>
      <th  scope="col">Last Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Father Name</th>
      <th scope="col">Surname</th>
      <th scope="col">Province</th>
      <th scope="col">Edit</th>
      <th scope="col">View</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
    <?php
    
  include 'select.php';
  $a=1;
  While($inst=mysqli_fetch_assoc($ins)){
  ?>
    <tr  >
      <td ><?php echo $a; ?></td>
      <td ><?php echo $inst['first_name']; ?></td>
      <td ><?php echo $inst['last_name']; ?></td>
      <td ><?php echo $inst['gender']; ?></td>
      <td ><?php echo $inst['father_name']; ?></td>
      <td ><?php echo $inst['surname']; ?></td>
      <td ><?php echo $inst['province']; ?></td>
      <td><a href="edit.php?id=<?php echo $inst['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
        </td>
      <td ><a href="showrecord.php?id=<?php echo $inst['id']; ?>"><button class="btn btn-sm btn-warning">View</button></a></td>
      <td ><a href="delete.php?id=<?php echo $inst['id']; ?>"><button class="btn btn-sm btn-danger">Delete</button></a></td>
    </tr>
    
   <?php
   $a++;
  }
   ?>
  </tbody>
</table>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script>
 $(document).ready(function () {
        $('#mytable').DataTable();
    });
</script>
</body>
</html>