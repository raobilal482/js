<?php
include 'connection.php';
$ids=$_GET['id'];
$query="SELECT id,first_name,last_name,gender,father_name,surname,province FROM admission_personal_information where id='$ids'";
$ins=mysqli_query($con,$query) or die(mysqli_error($con));
$inst=mysqli_fetch_assoc($ins);
if(isset($_POST['submit'])){
    $idss=$ids;
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $fathername=$_POST['fathername'];
    $gender=$_POST['gender'];
    $surname=$_POST['surname'];
    $province=$_POST['province'];
    $query1="UPDATE admission_personal_information SET first_name='$fname',last_name='$lname',
    gender='$gender',father_name='$fathername',surname='$surname',province='$province' where id='$idss'"; 
    $ins1=mysqli_query($con,$query1) or die("error update query".mysqli_error($con));
    header("Location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Records</title>
</head>
<body>
  <style>
    body{
      background-color: black;
    }
    .maindiv{
      margin-top: 50px;
      width: 40%;
      background: lightgray;
       box-shadow: inset 0px 0px 5px 0.5px;
      text-align: center;
      border-radius: 5px;;
    }
    *{
      margin: auto;
      padding: 0%;
    }
    input{
      width: 40%;
      box-shadow: inset 0px 0px 5px 1px;
    }
    h2{
      background-color: grey;
      color: white;
      border-radius: 5px;
      box-shadow: inset 0px 0px 5px 1px;
      border-top: 1px solid black;
      border-left: 1px solid black;
      border-right: 1px solid black;
      
    }
  </style>
  <div class="maindiv">
<h2>Student Data</h2>
<form method="POST">
    <div >
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" name="fname"  placeholder="First Name" value="<?php echo $inst['first_name']; ?>">
    </div>
    <div class="form-group col-md-8">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" name="lname"  placeholder="Last Name" value="<?php echo $inst['last_name']; ?>">
    </div>
  </div>
  
  <div class="form-group col-md-8">
    <label for="gender">Gender</label>
    <input type="text" class="form-control" name="gender"  placeholder="Male/Female" value="<?php echo $inst['gender']; ?>">
  </div>
  <div class="form-group col-md-8" >
    <label for="fathername">Father Name</label>
    <input type="text" class="form-control" name="fathername"  placeholder="Father Name" value="<?php echo $inst['father_name']; ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="surname">SurName</label>
      <input type="text" class="form-control" name="surname"  value="<?php echo $inst['surname']; ?>">
    </div>
   
    <div class="form-group col-md-8">
      <label for="province">Province</label>
      <input type="text" class="form-control" name="province"  value="<?php echo $inst['province']; ?>">
    </div>
  </div>
  </div>
  <br>
  <input type="submit" name="submit" value="Update" class="btn btn-success">
</form>
<br>
 </div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>