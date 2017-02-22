<?
require_once 'connection.php'; 

$sql ="INSERT INTO videoGames
		(title, genre, releaseDate)
		VALUES
		(:title, :genre, :releaseDate)";
		
//Prepare query.
$stmt = $dbConn -> prepare ($sql); 
// Execute query.
$stmt -> execute( array(":title" =>$_POST['title'],
						":genre" =>$_POST['genre'],
						":releaseDate" =>$_POST['releaseDate']
						)); 

// Gets autoincrement value of the primary key, the last one.
$gameid = $dbConn->lastInsertId();

$sql="INSERT INTO videoGames_console
		(gameId, game_console)
		VALUES
		(:gameId, :game_console)";
		
$stmt = $dbConn -> prepare ($sql); 
// Execute query.
$stmt -> execute( array(":gameId" => $gameid,
						":game_console" => $_POST['game_console']
						)); 
						
$sql="INSERT INTO videoGames_developers
		(gameId, devName)
		VALUES
		(:gameId, :devName)";
		
$stmt = $dbConn -> prepare ($sql); 
// Execute query.
$stmt -> execute( array(":gameId" => $gameid,
						":devName" => $_POST['devName']
						)); 
echo "<h3>A new game has been succesfully added!</h3>";


include 'main.php';
?>