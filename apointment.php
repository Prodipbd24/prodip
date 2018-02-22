<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" type="text/css" href="apointmentform.css ">
  </head>
  <body>
    <div class="all">
    <div class="head">
      <div class="ad">
      <h1>Hello Admin ! </h1>
    </div>
      <div class="f1">
        <a href="index.php?">Logout</a>
      </div>
    </div>
      <div class="f2">
        <h1>HOSPITAL MANGMENT SYSTEM </h1>
      </div>
      <div class="menu">
          <a href="">Doctor's</a>
          <a href="">Patients</a>
          <a class="visit" href="">Apointments</a>
          <a href="">Stuff</a>
          <a href="">Payment</a>
          <a href="">Report</a>
      </div>
      <div class="add">
        <a href="adapointment.php?">Add New Apointments</a>
        </div>
        <div class="list">
        <a href="">Apointments list</a>
        </div>
        <?php
        //PROGRAM : CRUD operation on hospital management project
        //CODED BY : PRODIP
        //DATE : 2-Feb-2018
        //DATABASE NAME : project
        //Table Name : doctors
        //Read INTO THE DATABASE
        session_start();
        $user = 'root';
        $password = '';
        $ip = 'localhost';
        $dbname = 'hpt';
        $connection_read = mysqli_connect($ip, $user, $password, $dbname);
          if (!mysqli_connect_errno()) {
            $query = "SELECT * FROM apointment WHERE `visible` = 1";
            $result = mysqli_query($connection_read, $query);

            if($result){
              echo "<table id='tb1'>
            <tr>
              <th>Sl. No.</th>
              <th>ID</th>
              <th>Patient Name</th>
              <th>Rfd Name</th>
              <th>Mobile No</th>
              <th>Room No</th>
              <th>Adrress</th>
              <th>Joint Date</th>
              <th>Joint Time</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>";
            $sl_no = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
              $sl_no = $sl_no + 1;
              $id = $row['id'];
              echo "<tr>";
              echo "<td>".$sl_no."</td>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".ucwords($row['PN'])."</td>";
              echo "<td>".ucwords($row['RD'])."</td>";
              echo "<td>".$row['MB']."</td>";
              echo "<td>".$row['RN']."</td>";
              echo "<td>".$row['AD']."</td>";
              echo "<td>".$row['Date']."</td>";
              echo "<td>".$row['Time']."</td>";
              echo "<td>"."<a href = 'docupdate.php?id=$id' id='update'>Edit</a>"."</td>";
              echo "<td>"."<a href = 'delete.php?id=$id' id='delete'>Release</a>"."</td>";
              echo "</tr>";
          }
          echo "</table>";
            }
          }else{
            die("ERROR : ".mysqli_connect_error());
          }
          mysqli_close($connection_read);
         ?>

        <div class="del">
        <a href="">Delete record</a>
        </div>
        <?php
        //PROGRAM : CRUD operation on hospital management project
        //CODED BY : PRODIP
        //DATE : 2-Feb-2018
        //DATABASE NAME : project
        //Table Name : doctors
        //Read INTO THE DATABAS
        $user = 'root';
        $password = '';
        $ip = 'localhost';
        $dbname = 'hpt';
        $connection_read = mysqli_connect($ip, $user, $password, $dbname);
          if (!mysqli_connect_errno()) {
            $query = "SELECT * FROM apointment WHERE `visible` = 1";
            $result = mysqli_query($connection_read, $query);

            if($result){
              echo "<table id='tb1'>
            <tr>
              <th>Sl. No.</th>
              <th>ID</th>
              <th>Patient Name</th>
              <th>Rfd Name</th>
              <th>Mobile No</th>
              <th>Room No</th>
              <th>Adrress</th>
              <th>Joint Date</th>
              <th>Joint Time</th>
              <th>Update</th>
              <th>Delete</th>
            </tr>";
            $sl_no = 0;
            while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
              $sl_no = $sl_no + 1;
              $id = $row['id'];
              echo "<tr>";
              echo "<td>".$sl_no."</td>";
              echo "<td>".$row['id']."</td>";
              echo "<td>".ucwords($row['PN'])."</td>";
              echo "<td>".ucwords($row['RD'])."</td>";
              echo "<td>".$row['MB']."</td>";
              echo "<td>".$row['RN']."</td>";
              echo "<td>".$row['AD']."</td>";
              echo "<td>".$row['Date']."</td>";
              echo "<td>".$row['Time']."</td>";
              echo "<td>"."<a href = 'docupdate.php?id=$id' id='update'>Edit</a>"."</td>";
              echo "<td>"."<a href = 'delete.php?id=$id' id='delete'>Release</a>"."</td>";
              echo "</tr>";
          }
          echo "</table>";
            }
          }else{
            die("ERROR : ".mysqli_connect_error());
          }
          mysqli_close($connection_read);
         ?>
        <div class="footer">
        <h1>copyright&copy;prodip roy lict batch -29</h1>
        </div>
      </div>

  </body>
</html>
