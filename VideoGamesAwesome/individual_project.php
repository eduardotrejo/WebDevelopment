<!DOCTYPE html>
<html lang="en">
	<style>
		body {
			background: #D56E27;
		}
		button:hover{
			cursor:pointer;
		}	
	</style>
	
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Individual Project</title>
  <meta name="description" content="">
  <meta name="author" content="Eduardo">

  <meta name="viewport" content="width=device-width; initial-scale=1.0">

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico">
  <link rel="apple-touch-icon" href="/apple-touch-icon.png">
  
</head>

<body>
    <div align="center">
    <header>
      
    </header>
    <nav>
      <p><a href="http://hosting.otterlabs.org/classes/trejoeduardol/CST336/index.html">Home</a></p>
    </nav>
	<img src="img/videogames.png" style= width="288" height="300" ></a><br>
    
    <button onclick="window.location.href='login.php'">Admins</button><br></br>
    </div>
</body>

</html>
<?php
require 'connection.php'; 

$sql = "SELECT DISTINCT(devName)
		FROM videoGames_developers";

//Prepare query.
$stmt = $dbConn -> prepare($sql); 
// Execute query.
$stmt -> execute(); // Not passing any array, since no place holder.
// Fetch query.
$games = $stmt->fetchALL();

echo "<center>";
echo '<form action="users.php" method="post">';
echo "Developer:" . '<select name="devName">';
echo "<option selected></option>";
foreach($games as $game){
	echo "<option value=\"".$game['devName']."\">".$game['devName']."</option>";
}
echo "</select>";
echo "<br>";

$sql = "SELECT DISTINCT(genre)
		FROM videoGames";

//Prepare query.
$stmt = $dbConn -> prepare($sql); 
// Execute query.
$stmt -> execute(); // Not passing any array, since no place holder.
// Fetch query.
$games = $stmt->fetchALL();

echo "Genre:" . '<select name="genre">';
echo "<option selected></option>";
foreach($games as $game){
	echo "<option value=\"".$game['genre']."\">".$game['genre']."</option>";
}
echo "</select>";
echo "<br>";

$sql = "SELECT DISTINCT(game_console)
		FROM videoGames_console";

//Prepare query.
$stmt = $dbConn -> prepare($sql); 
// Execute query.
$stmt -> execute(); // Not passing any array, since no place holder.
// Fetch query.
$games = $stmt->fetchALL();

echo "Console" . '<select name="game_console">';
echo "<option selected></option>";
foreach($games as $game){
	echo "<option value=\"".$game['game_console']."\">".$game['game_console']."</option>";
}
echo "</select>";
echo "<br>";
echo '<input type="submit"/>';
echo '</form>';
echo "</center>";

?>
<div align="center">
 <footer>
     <p>&copy; Copyright  by Eduardo</p>
    </footer>
</div>

