<!DOCTYPE html>
<html>
    <head>
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href=""></link>
    </head>
        <body align="center" Background-image="ss1.jpeg">
          <b><i> <a href="Parking.php" data-toggle="modal" data-target="#login-modal">PARKING_ADD</a></i></b>
            
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <h1>PARKIGN DETAILS</h1><br>
                              <form method="POST">
                                <input type="text" name="ID" placeholder="Enter ID">
                                <input type="text" name="NAME" placeholder="Enter the Name">
                                <input type="text" name="VEHICAL_TYPE" placeholder="Enter age">
                                <input type="text" name="MOBILE" placeholder="Enter Gender">
                                <input type="text" name="FEE" placeholder="Enter Mobile">
                              <!--  <input type="text" name="ADDRESS" placeholder="Enter Address">
                                <input type="text" name="DATE_IN" placeholder="Enter Date">
                                <input type="text" name="TIME_IN" placeholder="Time in">
                                <input type="text" name="TIME_OUT" placeholder="Time out">
                                <input type="texts" name="ENTRY_FEE" placeholder="Enter fee">
-->                             <input type="submit" name="submit" class="login loginmodal-submit" value="ADD">
                              </form>
                            
                            </div>
                        </div>
                     </div> 
<?php
$ADD = $_POST;
$servername = "localhost";
$username = "root";
$password = "veerumysql";
$dbname = "PARKING";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*
$sql = "INSERT INTO VISITORS (ID,NAME,AGE,GENDER,MOBILE,ADDRESS,DATE_IN,TIME_IN,TIME_OUT,ENTRY_FEE)
VALUES (2,'b',6,'f',9450,'ecity','2017-11-17','11:20:30','11:30:20',10)";
*/
$ID=$_POST['ID'];
$NAME=$_POST['NAME'];
$VEHICAL_TYPE=$_POST['VEHICAL_TYPE'];
$MOBILE=$_POST['MOBILE'];
$FEE=$_POST['FEE'];
$sql = "INSERT INTO VISITORS(ID,NAME,VEHICAL_TYPE,MOBILE,FEE) VALUES ($ID,'$NAME',$VEHICAL_TYPE,$MOBILE,$FEE)";
   
if (mysqli_query($conn, $sql)) {
    echo "$ID th ";
    echo  "New record created successfully";
} /*else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}*/

mysqli_close($conn);
?>          
        </body>
</html>

