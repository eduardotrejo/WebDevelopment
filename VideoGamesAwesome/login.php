<?php
// ' or 1 or // People can do SQL injection.
session_start();

	if(isset($_POST['loginForm'])){ //login form has been submitted. Without prepared statements.
		include 'connection.php';
	        
		  $sql = "SELECT * FROM admin
            	  WHERE username = :username
             	  AND password = :password";
          $stmt = $dbConn->prepare($sql);
          $stmt->execute( array (":username" => $_POST['username'],
		        				 ":password" => hash("sha1",$_POST['password'])));
		  $record = $stmt->fetch();

		  if(!empty($record)){ //if record with username and password was found.
               				   // storing the variables into session variables.
               				   $_SESSION['username'] = $record['username'];
							   $adminId = $record['adminId'];
			
			$sql = "UPDATE admin
					SET lastLogin = NOW()
					WHERE adminId = :adminId";
			$stmt = $dbConn->prepare($sql);
			$stmt->execute( array (":adminId" =>$adminId));
			
			$sql = "INSERT INTO admin_login_log
					(adminId, loginTimestamp)
					VALUES
					(:adminId, now())";
			$stmt = $dbConn->prepare($sql);
			$stmt->execute( array (":adminId" =>$adminId));
               				   header("Location: main.php");
		  }else{ // Error array, display the content of error array.
			   	 $errorArray = array("Wrong username/password");  
		  }
	} //end If loginForm was submitted.
?>
<!DOCTYPE html>
<html lang="en">
	<style>
		body {
			background: #D56E27;
		}
		input[type=submit]:hover{
			cursor:pointer;
		}
	</style>
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>login</title>
  <meta name="description" content="">
  <meta name="author" content="Eduardo">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
</head>

<body>
   
	<a href="http://hosting.otterlabs.org/classes/trejoeduardol/CST336/final_project/individual_project.php"><img src="img/back.png" style= width="288" height="60"></a>
    <div align="center">
      <img src="img/admin2.png" style= width="288" height="250" ></a><br>
    
      <form method="post">
     	<table>
     		<tr>
      		<td>Username:</td> <td><input type="text" id="username" name="username" onchange="getLogInfo()"/></td>
      		</tr>   		
      		<tr>
      		<td>Password:</td> <td><input type="password" name="password"  /></td> </tr>
      	</table>
      	<div id="logData"></div>
      	<input type="submit" name="loginForm"/>
      </form>
      <?php 
              //check whether errorArray is set, if so, display items.
              if(isset($errorArray)){
              	 echo "<br>";
              	 echo $errorArray[0];
			  }
      ?>
	<footer>
     <p>&copy; Copyright  by Eduardo</p>
    </footer>
    </div>

    
</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
$("input").keydown(function(){
    $("input").css("background-color","lightblue");
});
$("input").keyup(function(){
    $("input").css("background-color","white");
});
function getLogInfo(){
		    $.ajax({
            type: "post",
            url: "logdata.php",
            data: { "username": $("#username").val() },
            success: function(data,status) {
                 $("#logData").html(data);
              },
              complete: function(data,status) { //optional, used for debugging purposes
                  //alert(status);
              }
         });

}
</script>
</html>
