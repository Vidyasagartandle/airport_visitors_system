<margin: 0px;">
    <div class="container-fluid">
        <img class="img-responsive center-block" src="s1.jpeg" alt="Wrong Path" style="height:50% ; width:100%">
        <div class="row" style="margin-top:10px; margin-bottom: 20px;">
		    <div class="col-md-12" style="background:#F5EEE3">
		    	<h3 shtml>
<head>
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="tyle="text-align:center;margin-bottom:20px;margin-top:20px;"> Airport Visitor's Management System </h3>
		    </div>
        </div>
        <div style="position: absolute; border:solid 0.5px #888888; left: 30%; width:40%;">
            <div>
                <h3 class="text-center"  style="margin-bottom:10px;"> STAFF LOGIN </h3>
            </div>
            <form method="post">
                <div class="input-group" style="margin-bottom:10px; left: 20%; width: 60%;">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input class="form-control" name="input1"id="input1" type="text" placeholder="Enter your Name" required/>
                </div>
                <div class="input-group" style=" left: 20%; width: 60%; margin-bottom:10px;">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input class="form-control" name="input2" id="input2" type="password" placeholder="Enter your Password" required/>
                </div>
                <button class="btn btn-primary center-block"style=" width:20%;">Log In </button>
                <h4 class="text-center"><Strong><a href="staff_reg.php">Create new account</a></Strong></h4>
            </form>
        </div>
    </div>
        <?php
             $submit = $_POST;
             if($submit) {
                 $inputValue1 = $_POST["input1"];
                 $inputValue2 = $_POST["input2"];
                 $server = "localhost";
                 $user = "root";
                 $pass = "veerumysql";
                 $db = "AIR_VIS_INFO";
                 $conn = mysqli_connect($server,$user,$pass,$db);
                 $query = "select * from Login";
                 $result = mysqli_query($conn,$query);
                 $found = false;
                 session_start();
                 while($row = mysqli_fetch_array($result)) 
              {
                     if($row["USER_NAME"] == $inputValue1) {
                         if($row["PASSWORD"] == $inputValue2) {
                             $_SESSION["username"] = $row["name"];
                             echo "
                                    <script type='text/javascript'>
                                        window.location.href = '\NavBar.php';
                                    </script>
                                    <h1 style='position: absolute; top:95%; left:40%;'>Login Successful</h1>
                             ";
                        }
                        else {
                             echo "<h1 style='position: absolute; top:95%; left:40%;'>Wrong Password</h1>";
                        }
                        $found = true;
                    }
                }
                if($found == false) {
                    echo "<h1 style='position: absolute; top:95%; left:40%;'>User Not Found</h1>";
                }
            }
            ?>
</body>

</html>