<?php
// ' or 1 or // People can do SQL injection.
session_start();

	if(isset($_POST['loginForm'])){ //login form has been submitted. Without prepared statements.
		include 'connection.php';
	             //"SELECT * FROM admin " .
            	 // " WHERE username = :username " .
             	 //"AND password = :password  ";
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
               				   $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
               				   header("Location: main.php");
		  }else{ // Error array, display the content of error array.
			   	 $errorArray = array("Wrong username/password");  
		  }
	} //end If loginForm was submitted.
?>
<!DOCTYPE html>
<html lang="en">
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
  <div>
    <header>
      <h1>login</h1>
    </header>

    <div>
      <form method="post">
      	Username: <input type="text" name="username" /> <br />
      	Password: <input type="password" name="password"  />
      	<input type="submit" name="loginForm" />
      </form>

      <?php 
              //check whether errorArray is set, if so, display items.
              if(isset($errorArray)){
              	 echo "<br>";
              	 echo $errorArray[0];
			  }
      ?>

    </div>

    <footer>
     <p>&copy; Copyright  by Eduardo</p>
    </footer>
  </div>
</body>
</html>
