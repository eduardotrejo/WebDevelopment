<?php
session_start();// tells php that we're using sessions. Continues with the the session.

// to keep them away from accessing main page if not set.
if(!isset($_SESSION['username'])){
  header("Location: login.php");
}
echo "<center>" . "<h2>Admin Page</h2>" . "</center>";
echo "<center>" . "Welcome Administrator: " . $_SESSION['username'] . "</center>" . "<br>";
?> 

<?
require_once 'connection.php'; 

$sql = "SELECT *
		FROM videoGames V
		LEFT JOIN videoGames_console C ON V.gameId = C.gameId
		LEFT JOIN videoGames_developers D On V.gameId = D.gameId";

//Prepare query.
$stmt = $dbConn -> prepare ($sql); 
// Execute query.
$stmt -> execute(); // Not passing any array, since no place holder.
// Fetch query.
$games = $stmt->fetchAll();

?>
<html>
	<style>
		body {
			background: #D56E27;
		}
		th {
    	 	font-size: 18px;
    	 }
    	td {
        	 text-align: center;
        	 font-size: 18px;
    	 }
		button:hover{
			cursor:pointer;
		}	
		table {
    	 	background-color: lightgreen;
    	}
    	input[type=submit]:hover{
			cursor:pointer;
		}
	</style>
	<title>Admin</title>
	<script>
   		function confirmDelete(title){
   			 var removeTitle = confirm("Press OK to delete " + title )
        	 if (!removeTitle) {
           		  event.preventDefault(); // Prevents form submission.
	         } 
        }
    </script>
<body>
  <div align="center">
  	<button onclick="window.location.href='add.html'">Add a new game</button><br>
  	<form action="logoff.php">
           <input type="submit" value="Sign out" />
      </form> 
  	<table border="1">
		<tr>
			<th>Title</th><th>Genre</th><th>Release Year</th><th>Console</th><th>Developer</th><th colspan="2">Action</th>
		</tr>
		<?
			foreach($games as $game){
		?>
			<tr>
				<td> <?= $game['title'] ?></td>
				<td> <?= $game['genre'] ?></td>
				<td> <?= $game['releaseDate'] ?></td>
				<td> <?= $game['game_console'] ?></td>
				<td> <?= $game['devName'] ?></td>
				<td>       
			   	 <form method="post" action="update.php">
          			 <input type='hidden' name='gameid' value='<?= $game['gameId'] ?>' />
           			 <input type="submit" name="update" value="Edit" />
	        	 </form>
	        	</td>
	        	<td>
      			 <form method="post" action="delete.php" onsubmit="confirmDelete('<?= $game['title'] ?>')">
          			 <input type='hidden' name='gameid' value='<?= $game['gameId'] ?>' />
         		     <input type="submit" name="delete" value="Delete" />
        		 </form>     
			    </td>
			</tr>
		<?
			}//foreach, has to be surrounded by the the php tags, in the other section we are adding the records will be executed many times
			 // have to close it somewhere. Can use the echo method, whichever I prefer.
		?>
	</table>
    <footer>
     <p>&copy; Copyright  by Eduardo</p>
    </footer>
      
 </div>
</body>
</html>