<?
require 'connection.php';
		  $sql = "SELECT MIN(loginTimestamp) firstLogin,
		  	      MAX(loginTimestamp) lastLogin
		  	      FROM admin_login_log LL
		  	      JOIN admin L
		  	      ON LL.adminId = L.adminId
            	  WHERE username = :username";
          $stmt = $dbConn->prepare($sql);
          $stmt->execute( array (":username" => $_POST['username']));
		  $record = $stmt->fetch();
		  
		  echo "First logged in: " . $record['firstLogin'] . "<br />" ;
		  echo "Last logged in: " . $record['lastLogin'] . "<br />";
?>