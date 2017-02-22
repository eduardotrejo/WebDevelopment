<html>
<head>
	<link type="text/css" rel="stylesheet" href="css/users.css"> 
	<title>Video Games</title>
	
<body>
<a href="http://hosting.otterlabs.org/classes/trejoeduardol/CST336/final_project/individual_project.php"><img src="img/back.png" style= width="288" height="60"></a><br>
<div id="wrapper">
	<center>
<?
require "connection.php";
if(isset($_POST['devName'], $_POST['genre'], $_POST['game_console'])){
	$devName = $_POST['devName'];
	$genre = $_POST['genre'];
	$game_console = $_POST['game_console'];
}
$sql = "SELECT *
       	FROM videoGames V
		LEFT JOIN videoGames_console C ON V.gameId = C.gameId
		LEFT JOIN videoGames_developers D On V.gameId = D.gameId";
// When only genre is selected.		
if(!empty($genre) && empty($game_console) && empty($devName)){
	$sql = $sql . " WHERE genre = :genre
					ORDER BY title";

	$stmt = $dbConn -> prepare ($sql);
	$stmt -> execute( array (":genre"=>$genre));
	$games = $stmt -> fetchAll(); 
	echo "<br>";
	echo '<button id="toggle">Hide/Show</button>';
	echo "<br>";
	echo "<span>" . "Genre: " . $genre . "</span>";
	echo "<br>Double click on title for more information</br>";
	echo "<table border=2 id=\"alertData\">";
	echo "<tr><th>Title</th><th>Developer</th><th>Console</th><th>Release Year</th></tr>";
	foreach($games as $game)
	{
		echo "<tr>";
		echo "<td id=\"".$game['title']."\">" . $game['title'] . "</td><td>" . $game['devName'] . "</td><td>" . $game['game_console'] . "</td><td>" . $game['releaseDate'] . "</td>";
	}
	echo "</table>";
}
// When only the developer is selected.
if(!empty($devName) && empty($game_console) && empty($genre)){
	$sql = $sql . " WHERE devName = :devName
					ORDER BY title";

	$stmt = $dbConn -> prepare ($sql);
	$stmt -> execute( array (":devName"=>$devName));
	$games = $stmt -> fetchAll(); 
	echo "<br>";
	echo '<button id="toggle">Hide/Show</button>';
	echo "<br>";
	echo "<span>" . "Developer: " . $devName . "</span>";
	echo "<br>Double click on title for more information</br>";
	echo "<table border=2 id=\"alertData\">";
	echo "<tr><th>Title</th><th>Genre</th><th>Console</th><th>Release Year</th></tr>";
	foreach($games as $game)
	{
		echo "<tr>";
		echo "<td id=\"".$game['title']."\">" . $game['title'] . "</td><td>" . $game['genre'] . "</td><td>" . $game['game_console'] . "</td><td>" . $game['releaseDate'] . "</td>";
	}
	echo "</table>";
}
// When only the game console is selected.
if(!empty($game_console) && empty($devName) && empty($genre)){
	$sql = $sql . " WHERE game_console = :game_console
					ORDER BY title";
		
	$stmt = $dbConn -> prepare ($sql);
	$stmt -> execute( array (":game_console"=>$game_console));
	$games = $stmt -> fetchAll(); 
	echo "<br>";
	echo '<button id="toggle">Hide/Show</button>';
	echo "<br>";
	echo "<span>" . "Console: " . $game_console . "</span>";
	echo "<br>Double click on title for more information</br>";
	echo "<table border=2 id=\"alertData\">";
	echo "<tr><th>Title</th><th>Genre</th><th>Developer</th><th>Release Year</th></tr>";
	foreach($games as $game)
	{
		echo "<tr>";
		echo "<td id=\"".$game['title']."\">" . $game['title'] . "</td><td>" . $game['genre'] . "</td><td>" . $game['devName'] . "</td><td>" . $game['releaseDate'] . "</td>";
	}
	echo "</table>";
}
// When genre and console is selected. Also, checks if any games in that
// genre were found for that console.
if(!empty($genre) && !empty($game_console) && empty($devName)){
	$sql = $sql . " WHERE game_console = :game_console
					AND genre = :genre
					ORDER BY title";				

	$stmt = $dbConn -> prepare ($sql);
	$stmt -> execute( array (":game_console"=>$game_console, ":genre"=>$genre));
	$games = $stmt -> fetchAll(); 
	echo "<br>";
	if(empty($games) && !empty($genre) && !empty($game_console)){
		echo "<h3>" . "There are no games in that genre for the console</h3>";
	}else{
		echo '<button id="toggle">Hide/Show</button>';
		echo "<br>";
		echo "<span>" . "Console: " . $game_console . "</span>";
		echo "<br>";
		echo "<span>" . "Genre: " . $genre . "</span>";
		echo "<br>Double click on title for more information</br>";
		echo "<table border=2 id=\"alertData\">";
		echo "<tr><th>Title</th><th>Developer</th><th>Release Year</th></tr>";
		foreach($games as $game)
		{
			echo "<tr>";
			echo "<td id=\"".$game['title']."\">" . $game['title'] . "</td><td>" . $game['devName'] . "</td><td>" . $game['releaseDate'] . "</td>";
		}
		echo "</table>";
	}
}
// When developer and console is selected. Also, checks if any games with that
// specific console and developer were found.
if(empty($genre) && !empty($game_console) && !empty($devName)){
	$sql = $sql . " WHERE game_console = :game_console
					AND devName = :devName
					ORDER BY title";				

	$stmt = $dbConn -> prepare ($sql);
	$stmt -> execute( array (":game_console"=>$game_console, ":devName"=>$devName));
	$games = $stmt -> fetchAll(); 
	echo "<br>";
	if(empty($games) && !empty($devName) && !empty($game_console)){
		echo "<h3>" . "There are no games with that specific console and developer</h3>";
	}else{
		echo '<button id="toggle">Hide/Show</button>';
		echo "<br>";
		echo "<span>" . "Console: " . $game_console . "</span>";
		echo "<br>";
		echo "<span>" . "Developer: " . $devName . "</span>";
		echo "<br>Double click on title for more information</br>";
		echo "<table border=2 id=\"alertData\">";
		echo "<tr><th>Title</th><th>Genre</th><th>Release Year</th></tr>";
		foreach($games as $game)
		{
			echo "<tr>";
			echo "<td id=\"".$game['title']."\">" . $game['title'] . "</td><td>" . $game['genre'] . "</td><td>" . $game['releaseDate'] . "</td>";
		}
		echo "</table>";
	}
}
// When developer and genre is selected. Also, checks if any games with that
// specific genre and developer were found.
if(!empty($genre) && empty($game_console) && !empty($devName)){
	$sql = $sql . " WHERE genre = :genre
					AND devName = :devName
					ORDER BY title";				

	$stmt = $dbConn -> prepare ($sql);
	$stmt -> execute( array (":genre"=>$genre, ":devName"=>$devName));
	$games = $stmt -> fetchAll(); 
	echo "<br>";
	if(empty($games) && !empty($devName) && !empty($genre)){
		echo "<h3>" . "There are no games under that genre for that developer</h3>";
	}else{
		echo '<button id="toggle">Hide/Show</button>';
		echo "<br>";
		echo "<span>" . "Developer: " . $devName . "</span>";
		echo "<br>";
		echo "<span>" . "Genre: " . $genre . "</span>";
		echo "<br>Double click on title for more information</br>";
		echo "<table border=2 id=\"alertData\">";
		echo "<tr><th>Title</th><th>Console</th><th>Release Year</th></tr>";
		foreach($games as $game)
		{
			echo "<tr>";
			echo "<td id=\"".$game['title']."\">" . $game['title'] . "</td><td>" . $game['game_console'] . "</td><td>" . $game['releaseDate'] . "</td>";
		}
		echo "</table>";
	}
}
// When nothing is selected.
if(empty($game_console) && empty($devName) && empty($genre)){
	$sql = $sql . " ORDER BY title";
	
	$stmt = $dbConn -> prepare ($sql);
	$stmt -> execute( array ());
	$games = $stmt -> fetchAll(); 
	echo "<br>";
	echo '<button id="toggle">Hide/Show</button>';
	echo "<br>Double click on title for more information</br>";
	echo "<table border=2 id=\"alertData\">";
	echo "<tr><th>Title</th><th>Genre</th><th>Developer</th><th>Console</th><th>Release Year</th></tr>";
	foreach($games as $game)
	{
		echo "<tr>";
		echo "<td id=\"".$game['title']."\">" . $game['title'] . "</td><td>" . $game['genre'] . "</td><td>" . $game['devName'] . "</td><td>" . $game['game_console'] . "</td><td>" . $game['releaseDate'] . "</td>";
	}
	echo "</table>";
}
?>
<footer>
     <p>&copy; Copyright  by Eduardo</p>
</footer>
<div id="titleGenre"></div>
</center>
	</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/final_project.js"></script>  
</body>  
</html>
