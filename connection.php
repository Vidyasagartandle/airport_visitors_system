<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration</title>
</head>
<body>
 
<form name="reg" action="code_exec.php" onsubmit="return validateForm()" method="post">
  <table width="274" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <td colspan="2">
        <div align="center">
          <?php 
          // $remarks=$_GET['remarks'];
          if (!isset($_GET['remarks']))
          {
            echo 'Register Here';
          }
          if (isset($_GET['remarks']) && $_GET['remarks']=='success')
          {
            echo 'Registration Success';
          }
          ?>  
        </div></td>
      </tr>
      <tr>
        <td width="95"><div align="right">ID:</div></td>
        <td width="171"><input type="text" ID="ID" /></td>
      </tr>
      <tr>
        <td><div align="right">NAME:</div></td>
        <td><input type="text" NAME="NAME" /></td>
      </tr>
      <tr>
        <td><div align="right">AGE:</div></td>
        <td><input type="text" AGE="AGE" /></td>
      </tr>
      <tr>
        <td><div align="right">GENDER:</div></td>
        <td><input type="text" GENDER="GENDER" /></td>
      </tr>
      <tr>
        <td><div align="right">MOBILE:</div></td>
        <td><input type="text" MOBILE="MOBILE" /></td>
      </tr>
      <tr>
        <td><div align="right">ADDRESS:</div></td>
        <td><input type="text" ADDRESS="ADDRESS" /></td>
      </tr>
      <tr>
        <td><div align="right">DATE_IN:</div></td>
        <td><input type="text" DATE_IN="DATE_IN" /></td>
      </tr>
      <tr>
        <td><div align="right">TIME_IN:</div></td>
        <td><input type="text" TIME_IN="TIME_IN" /></td>
      </tr>
      <tr>
        <td><div align="right">TIME_OUT:</div></td>
        <td><input type="text" TIME_OUT="TIME_OUT" /></td>
      </tr>
      <tr>
        <td><div align="right">ENTRY_FEE:</div></td>
        <td><input type="text" ENTRY_FEE="ENTRY_FEE" /></td>
      </tr>
      <tr>
        <td><div align="right"></div></td>
        <td><input name="submit" type="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
  <?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "veerumysql";
$mysql_database = "visitors";
$prefix = "";
 
$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysqli_select_db($bd, $mysql_database) or die("Could not select database");
?>
<?php
session_start();
 
include('connection.php');
 
$ID=$_POST['ID'];
$NAME=$_POST['NAME'];
$AGE=$_POST['AGE'];
$GENDER=$_POST['GENDER'];
$MOBILE=$_POST['MOBILE'];
$ADDRESS=$_POST['ADDRESS'];
$DATE_IN=$_POST['DATE_IN'];
$TIME_IN=$_POST['TIME_IN'];
 $TIME_OUT=$_POST['TIME_OUT'];
 $ENTRY_FEE=$_POST['ENTRY_FEE'];
mysqli_query($bd, "INSERT INTO VISITORS(ID,NAME,AGE, GENDER, MOBILE, ADDRESS,DATE_IN, TIME_IN, TIME_OUT,ENTRY_FEE)VALUES('$ID', '$NAME', '$AGE', '$GENDER', '$MOBILE', '$ADDRESS','$DATE_IN', '$TIME_IN', '$TIME_OUT','$ENTRY_FEE')");
 
header("location: index.php?remarks=success");
 
mysqli_close($con);
?>
<!--<script type="text/javascript">
  function validateForm()
  {
    var a=document.forms["reg"]["fname"].value;
    var b=document.forms["reg"]["lname"].value;
    var c=document.forms["reg"]["gender"].value;
    var d=document.forms["reg"]["address"].value;
    var e=document.forms["reg"]["contact"].value;
    var f=document.forms["reg"]["username"].value;
    var g=document.forms["reg"]["password"].value;
    if ((a==null || a=="") && (b==null || b=="") && (c==null || c=="") && (d==null || d=="") && (e==null || e==""))
    {
      alert("All Field must be filled out");
      return false;
    }
    if (a==null || a=="")
    {
      alert("First name must be filled out");
      return false;
    }
    if (b==null || b=="")
    {
      alert("Last name must be filled out");
      return false;
    }
    if (c==null || c=="")
    {
      alert("Gender name must be filled out");
      return false;
    }
    if (d==null || d=="")
    {
      alert("address must be filled out");
      return false;
    }
    if (e==null || e=="")
    {
      alert("contact must be filled out");
      return false;
    }
    if (f==null || f=="")
    {
      alert("username must be filled out");
      return false;
    }
    if (g==null || g=="")
    {
      alert("password must be filled out");
      return false;
    }
  }
</script>-->
</body>
</html>