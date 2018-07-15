<!DOCTYPE html>
<html>
    <head>
            <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="c:\htmlprograms\Login2.css"></link>
    </head>
        <body align="center">
            <b><i><a href="#" data-toggle="modal" data-target="#login-modal">DELETE</a></i>></b>
            
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                            <div class="loginmodal-container">
                                <h1>Delete using user ID</h1><br>
                              <form method="POST">
                                <input type="text" name="user" placeholder="UserID">
                                <input type="submit" name="login" class="login loginmodal-submit" value="DELETE">
                              </form>
                            </div>
                        </div>
                      </div>  
                      <?php
                      $DELETE = $_POST;
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
                     $ID = $_POST['user']; 
                      $sql = "DELETE FROM visitors WHERE  ID= $ID";
                      /*$sql = "INSERT INTO VISITORS (ID,NAME,AGE,GENDER,MOBILE,ADDRESS,DATE_IN,TIME_IN,TIME_OUT,ENTRY_FEE)
                      VALUES (3,'b',6,'f',9450,'ecity','2017-11-17','11:20:30','11:30:20',10)";
                      */
                      if (mysqli_query($conn, $sql)) {
                          echo " $ID th record deleted successfully";
                      } /*else {
                          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                      }*/
                      
                      mysqli_close($conn);
                      ?>                    
        </body>
</html>
