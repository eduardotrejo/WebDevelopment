<?
require 'connection.php';

if (isset($_POST['delete'])) {
    echo "<h3>Deleting record... <h3>";
    $sql = "DELETE 
            FROM videoGames 
            WHERE gameid = :gameid";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute( array(":gameid" => $_POST['gameid']) );
    
    $sql = "DELETE 
            FROM videoGames_console
            WHERE gameid = :gameid";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute( array(":gameid" => $_POST['gameid']) );

	
	$sql = "DELETE 
            FROM videoGames_developers
            WHERE gameid = :gameid";
    $stmt = $dbConn -> prepare($sql);
    $stmt -> execute( array(":gameid" => $_POST['gameid']) );
	
    echo "<h3> Record successfully deleted. <h3>";
   
  }

include 'main.php';

?>
