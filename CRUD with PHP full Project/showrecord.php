<?php
include 'connection.php';
$ids=$_GET['id'];
$query="SELECT  admission_personal_information.id,admission_personal_information.first_name,
admission_personal_information.last_name,admission_personal_information.gender,
admission_personal_information.father_name,admission_personal_information.surname,
admission_personal_information.province,
admission_education_details.bs_degree,admission_education_details.bs_department,
admission_education_details.bs_marks,admission_education_details.bs_board
FROM admission_personal_information 
 JOIN
admission_education_details on
admission_personal_information.id=admission_education_details.personal_id 
JOIN
admission_registration on
admission_personal_information.registration_id=admission_registration.id
where admission_personal_information.status=1 AND admission_registration.verify_applications=1";
$ins=mysqli_query($con,$query) or die("query error".mysqli_error($con));
$inst=mysqli_fetch_assoc($ins);
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
<h2>Student Data</h2>
<form>
    <div >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" name="fname" disabled placeholder="First Name" value="<?php echo $inst['first_name']; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" name="lname" disabled placeholder="Last Name" value="<?php echo $inst['last_name']; ?>">
    </div>
  </div>
  
  <div class="form-group col-md-6">
    <label for="gender">Gender</label>
    <input type="text" class="form-control" name="gender" disabled placeholder="Male/Female" value="<?php echo $inst['gender']; ?>">
  </div>
  <div class="form-group col-md-6" >
    <label for="fathername">Father Name</label>
    <input type="text" class="form-control" name="fathername" disabled placeholder="Father Name" value="<?php echo $inst['father_name']; ?>">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="surname">SurName</label>
      <input type="text" class="form-control" name="surname" disabled value="<?php echo $inst['surname']; ?>">
    </div>
   
    <div class="form-group col-md-6">
      <label for="province">Province</label>
      <input type="text" class="form-control" name="province" disabled value="<?php echo $inst['province']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="surname">SurName</label>
      <input type="text" class="form-control" name="degree" disabled value="<?php echo $inst['bs_degree']; ?>">
    </div>
   
    <div class="form-group col-md-6">
      <label for="province">Province</label>
      <input type="text" class="form-control" name="marks" disabled value="<?php echo $inst['bs_marks']; ?>">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="surname">SurName</label>
      <input type="text" class="form-control" name="department" disabled value="<?php echo $inst['bs_department']; ?>">
    </div>
   
    <div class="form-group col-md-6">
      <label for="province">Province</label>
      <input type="text" class="form-control" name="board" disabled value="<?php echo $inst['bs_board']; ?>">
    </div>
  </div>
  </div>
</form>
<br>
<a href="index.php"><button type="submit" class="btn btn-success">Back</button></a>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>