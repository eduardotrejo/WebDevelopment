<?
require 'connection.php';
$sql = "SELECT *
        FROM videoGames V
		LEFT JOIN videoGames_console C ON V.gameId = C.gameId
		LEFT JOIN videoGames_developers D On V.gameId = D.gameId
        WHERE V.gameid = :gameid";      
$stmt = $dbConn -> prepare($sql);
$stmt -> execute( array(":gameid" => $_POST['gameid']) );
$game = $stmt->fetch();
?>

<html>
	<style>
	body {
			background: #D56E27;
	}
	input[type=submit]:hover{
			cursor:pointer;
		}
	span{
			font-size: 22px;
		}
	</style>
<center>
<?
if (isset($_POST['update'])) {
?>
  <title>Update</title>
  <header>
      <h1>Editing Game</h1>
    </header>
  <form method="post">
      <span>Title:</span> <input type="text" name="title" value="<?= $game['title'] ?>" /> <br />
      <span>Genre:</span> <input type="text" name="genre" value="<?= $game['genre'] ?>" /> <br />
      <span>Release Year:</span> <input type="text" name="releaseDate" value="<?= $game['releaseDate'] ?>" /> <br />
      <span>Console:</span> <input type="text" name="game_console" value="<?= $game['game_console'] ?>" /> <br />
      <span>Developer:</span> <input type="text" name="devName" value="<?= $game['devName'] ?>" /> <br />
      <input type="hidden" name="gameid" value="<?= $game['gameId'] ?>" />
      <input type="submit" value="Save" name="save" />  
  </form>
  <footer>
     <p>&copy; Copyright  by Eduardo</p>
  </footer>
<?
  }//endIf
?>
</center>
</html>
<?
require 'connection.php';

if (isset($_POST['save'])) {    
    $sql = "UPDATE videoGames V
			LEFT JOIN videoGames_console C ON V.gameId = C.gameId
			LEFT JOIN videoGames_developers D On V.gameId = D.gameId
            SET title = :title,
            genre = :genre,
            releaseDate= :releaseDate,
            game_console = :game_console,
            devName = :devName
            WHERE V.gameId = :gameId";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute( array(":title" => $_POST['title'],
    						 ":genre" => $_POST['genre'],
                             ":releaseDate" => $_POST['releaseDate'],
                             ":game_console" => $_POST['game_console'],
                             ":devName" => $_POST['devName'],
                             ":gameId" => $_POST['gameid']) );      

    echo "<h3>Record Updated" . "</h3>";
	include 'main.php';
} else { 
$sql = "SELECT *
        FROM videoGames
        WHERE gameId = :gameId";      
$stmt = $dbConn -> prepare($sql);
$stmt -> execute( array(":gameId" => $_POST['gameid']) );
$friend = $stmt->fetch();
}
?>



