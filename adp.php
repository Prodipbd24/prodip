<?php
if (isset($_POST['submit'])) {
$ip ='localhost';
$user ='root';
$password ='';
$dbname ='hpt';
$P_Name =$_POST['pname'];
$Bed_No=$_POST['bno'];
$Mobile =$_POST['mobile'];
$Adrress=$_POST['txa'];
$Word=$_POST['word'];
$Gender=$_POST['gender'];
$Date =$_POST['date'];
$Time=$_POST['tm'];
$connection_write =mysqli_connect($ip,$user,$password,$dbname);
if (!mysqli_connect_errno()) {
$visibility=1;
$query ="INSERT INTO patient(`PN`,`BN`,`MB`,`TX`,`WRD`,`GEN`,`Date`,`Time`,`visible`)
VALUES('{$P_Name}','{$Bed_No}','{$Mobile}','{$Adrress}','{$Word}','{$Gender}','{$Date}','{$Time}','{$visibility}')";
if(mysqli_query($connection_write,$query)){
  echo "<b><script>alert('SUCCESS:Doctor add successfully');</script></b>";
  echo "<script>window.location.href = 'patient.php'</script>";
}else {
  echo "Database Insert Failed";
}
}else {
  die("ERROR :".mysqli_connect_errno());
}
mysqli_close($connection_write);
}
?>
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
        <h1>copyright&copy;prodip roy lict batch-29</h1>
        </div>
        </div>

</body>
</html>
