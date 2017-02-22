<?php
session_start();// tells php that we're using sessions. Continues with the the session.

// to keep them away from accessing main page if not set.
if(!isset($_SESSION['username'])){
  header("Location: login.php");
}
echo "<h1>Admin Page</h1>";
echo "Welcome Administrator: " . $_SESSION['adminName'] . "<br></br>";
?> 
<html>
<body>
  <div>
      <form action="logoff.php">
           <input type="submit" value="Sign out" />
      </form>  
      
 </div>
</body>
</html>