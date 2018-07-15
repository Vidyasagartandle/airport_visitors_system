<!DOCTYPE html>
<html>
    <head>
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="/Login2.css"></link>
    </head>
        <body align="center">
          <b><i><a href="#" data-toggle="modal" data-target="#login-modal">VIEW</a></i></b>
            
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <h1>VIEW THE DETAILS OF THE VISITOR</h1><br>
                              <form method="POST">
                                <input type="text" name="GENDER" placeholder="GENDER">
                                <input type="text" name="DATE_IN" placeholder="DATE_IN">
                                <input type="text" name="TIME_IN" placeholder="TIME_IN">
                                <input type="text" name="TIME_OUT" placeholder="TIME_OUT">
                                <input type="submit" name="login" class="login loginmodal-submit" value="VIEW">
                              </form>
                            </div>
                        </div>
                      </div>            

                      <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
/*$link = mysqli_connect("localhost", "root", "veerumysql", "AIR_VIS_INFO");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}*/
$VIEW = $_POST;
$servername = "localhost";
$username = "root";
$password = "veerumysql";
$dbname = "AIR_VIS_INFO";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$GENDER = $_POST['GENDER'];
$DATE_IN = $_POST['DATE_IN'];
$TIME_IN =$_POST['TIME_IN'];
$TIME_OUT = $_POST['TIME_OUT'];

// Attempt select query execution
$sql = "SELECT GENDER,DATE_IN,TIME_IN,TIME_OUT FROM VISITORS WHERE GENDER='$GENDER' AND DATE_IN='$DATE_IN' AND TIME_IN = '$TIME_IN' AND TIME_OUT='$TIME_OUT'";
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>GENDER </th>";
                echo "<th>DATE_IN </th>";
                echo "<th>TIME_IN </th>";
                echo "<th>TIME_OUT </th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['GENDER'] . "</td>";
                echo "<td>" . $row['DATE_IN'] . "</td>";
                echo "<td>" . $row['TIME_IN'] . "</td>";
                echo "<td>" . $row['TIME_OUT'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>

                </body>
</html>
