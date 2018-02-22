<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="patientform.css">
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
   <div class="all">
    <div class="head">
      <div class="ad">
      <h1>Hello Admin ! </h1>
    </div>
      <div class="f1">
        <a href="">Logout</a>
      </div>
    </div>
      <div class="f2">
        <h1>HOSPITAL MANGMENT SYSTEM </h1>
      </div>
      <div class="menu">
          <a href="doctor.php">Doctor's</a>
          <a class="now" href="patient.php">Patients</a>
          <a class="visit" href="">Apointments</a>
					<a href="">Stuff</a>
          <a href="">Payment</a>
          <a href="">Report</a>
      </div>
	<div class="fm">
    <header>Apointment Form</header>
    <br>
  <form action="#" method="post">
  Patient Name :<br>
  <input type="text" name="pname" value="">
  <br>
  Bad.No:<br>
    <input type="text" name="bno" value="">
    <br>
     Mobile:<br>
    <input type="text" name="mobile" value="">
  <br>
  Adrress:<br>
  <textarea name="txa" placeholder="Enter Patient Village and Distric"></textarea>
  <br>
  Word :
  <select name="word">
    <option>select</option>
    <option>medicine</option>
    <option>orthopadics</option>
    <option>child</option>
  </select>
<br><br>
  Gender:
  <select name="gender">
    <option>female</option>
    <option>male</option>
  </select>
  <br>
    Date:<br>
  <input type="Date" name="date" value="">
	<br>
	Time:<br>
<input type="time" name="tm" value="">
<br>
<div class="btn">
<input style="border-radius: 5px;" type="submit" name="submit" value="Add">
<input style="border-radius: 5px;" type="reset" name="reset" value="Clear">
</div>
</form>
</div>
 <div class="footer">
        <h1>Add New Apointments<h1>
        </div>
        </div>

</body>
</html>
<?php
//PROGRAM : PHP program to UPDATE a Record in MySQL database for the CRUD App
//CODED BY : prodip roy
//DATABASE NAME : php_mysqli
//Table Name : userinfo
//DATE : 20-feb-2018
$id = $_GET['id'];
$user = 'root';
$password = '';
$ip = 'localhost';
$dbname = 'hpt';
$connection_update = mysqli_connect($ip, $user, $password, $dbname);
$id = $_GET['id'];
if (!mysqli_connect_errno()){
  $query = "SELECT `PN`,`BN`,`MB`,`TX`,`WRD`,`GEN`,`Date`,`Time` FROM patient WHERE `id`='{$id}'";
  $result = mysqli_query($connection_update,$query);
  if ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    $P_Name =$row['PN'];
    $Bed_No=$row['BN'];
    $Mobile =$row['MB'];
    $Adrress=$row['TX'];
    $Word=$row['WRD'];
    $Gender=$row['GEN'];
    $Date =$row['Date'];
    $Time=$row['Time'];
  }
}else{
  echo "ERROR : Database connection failed !"."<br>";
}
mysqli_close($connection_update);
//Update the data and Save it into the MySQL database;
if (isset($_POST['submit'])) {
  $user = 'root';
  $password = '';
  $ip = 'localhost';
  $dbname = 'hpt';
  $P_Name =$_POST['pname'];
  $Bed_No=$_POST['bno'];
  $Mobile =$_POST['mobile'];
  $Adrress=$_POST['txa'];
  $Word=$_POST['word'];
  $Gender=$_POST['gender'];
  $Date =$_POST['date'];
  $Time=$_POST['tm'];
  $connection_write = mysqli_connect($ip, $user, $password, $dbname);
  if (!mysqli_connect_errno()) {
    $visibility = 1;
    $query = "UPDATE patient SET `PN`='{$P_Name}',`BN`='{$Bed_No}',
             `MB`='{$Mobile}',`TX`='{$Adrress}',`WRD`='{$Word}',`GEN`='{$Gender}',`Date`='{$Date}',`Time`='{$Time}' WHERE `id`='{$id}' ";
    if(mysqli_query($connection_write, $query)){
      header("location:patient.php");
    }else{
      echo "<script>alert('ERROR : Database Insert Failed because login name exists');</script>";
    }
  }else{
    die("ERROR : ".mysqli_connect_error());
  }
  mysqli_close($connection_write);
}
?>
