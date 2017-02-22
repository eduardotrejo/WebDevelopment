<link type="text/css" rel="stylesheet" href="css/team_project.css"> 
<div id="phpwrapper">
	<img src="Pictures/title.png" style= width="288" height="80" align="center"><br>
<?php
if(isset($_GET['lastName'], $_GET['genre'], $_GET['sortOrder'])){
	$lastName=$_GET['lastName'];
	$genre=$_GET['genre'];
	$sortOrder=$_GET['sortOrder'];

}
if(empty($lastName) && empty($genre)){
	require 'connection.php';
	$sql = "SELECT lastName, title, genre FROM netflix
			JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
			ORDER BY title " . $_GET['sortOrder'];
	$stmt = $dbConn -> prepare ($sql);
	$stmt -> execute( array ());
	echo "<table border=1>";
	echo "<tr><th>Director's Last Name</th><th>Title</th><th>Genre</th></tr>";
	while($row = $stmt -> fetch()){
		echo "<tr>";
		echo "<td>" . $row['lastName'] . "</td><td>" . $row['title'] . "</td><td>" . $row['genre'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
}
if(empty($lastName)){
 	//echo "Director's last name field is empty" . "<br><br>";
	if(isset($_GET['genre'],$_GET['sortOrder'])){
		require 'connection.php';
		$sql = "SELECT title FROM netflix 
	  		 	WHERE genre = :genre
	  	        ORDER BY title " . $_GET['sortOrder'];
		$stmt = $dbConn -> prepare ($sql);
		$stmt -> execute( array (":genre"=>$_GET['genre']));
		$movies = $stmt -> fetchAll(); 
		echo "<br>";
		foreach($movies as $movie)
		{
			echo $movie['title'] . "<br>";
		}
		
		if(!empty($genre)){
			echo "<br>Use of aggregate functions<br>Based on the genre<br></br>";
			// Count the number of films for the genre.
			$sql = "SELECT count(1) AS Films
					FROM netflix 
	   				WHERE genre = :genre";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":genre"=>$_GET['genre']));
			$movies = $stmt -> fetchAll();
			echo "Number of films in genre: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}
		
			// SUM ratings for the genre based on the films.
			$sql = "SELECT SUM(ratings) AS Films
					FROM netflix 
				    WHERE genre = :genre";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":genre"=>$_GET['genre']));
			$movies = $stmt -> fetchAll();
			echo "SUM ratings for the genre: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}

			// AVG ratings for the genre based on the films.
			$sql = "SELECT AVG(ratings) AS Films
					FROM netflix 
			    	WHERE genre = :genre";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":genre"=>$_GET['genre']));
			$movies = $stmt -> fetchAll();
			echo "AVG ratings for the genre: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}
		}
	}
}
if(empty($genre)){
 	//echo "Director's last name field is empty" . "<br><br>";
	if(isset($_GET['genre'],$_GET['sortOrder'])){
		require 'connection.php';
		$sql = "SELECT title FROM netflix 
				JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
	  		 	WHERE lastName = :lastName
	  	        ORDER BY title " . $_GET['sortOrder'];
		$stmt = $dbConn -> prepare ($sql);
		$stmt -> execute( array (":lastName"=>$_GET['lastName']));
		$movies = $stmt -> fetchAll(); 
		echo "<br>";
		foreach($movies as $movie)
		{
			echo $movie['title'] . "<br>";
		}
		
		if(!empty($lastName)){
			echo "<br>Use of aggregate functions<br>Based on the director<br></br>";
			// Count the number of films for the genre.
			$sql = "SELECT count(1) AS Films
					FROM netflix 
					JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
	   				WHERE lastName = :lastName";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":lastName"=>$_GET['lastName']));
			$movies = $stmt -> fetchAll();
			echo "Number of films for director: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}
		
			// SUM ratings for the genre based on the films.
			$sql = "SELECT SUM(ratings) AS Films
					FROM netflix 
					JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
				    WHERE lastName = :lastName";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":lastName"=>$_GET['lastName']));
			$movies = $stmt -> fetchAll();
			echo "SUM ratings for the genre: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}

			// AVG ratings for the genre based on the films.
			$sql = "SELECT AVG(ratings) AS Films
					FROM netflix 
					JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
			    	WHERE lastName = :lastName";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":lastName"=>$_GET['lastName']));
			$movies = $stmt -> fetchAll();
			echo "AVG ratings for the director: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}
		}
	}
}
else{
	//echo "Genre field is empty" . "<br><br>";
	if(isset($_GET['lastName'],$_GET['sortOrder'])){
		require 'connection.php';
		$sql = "SELECT title FROM netflix 
				JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
	  		 	WHERE lastName = :lastName
	  		 	AND
	  		 	genre = :genre
	  	      	ORDER BY title " . $_GET['sortOrder'];
		$stmt = $dbConn -> prepare ($sql);
		$stmt -> execute( array (":lastName"=>$_GET['lastName'], ":genre"=>$_GET['genre']));
		$movies = $stmt -> fetchAll(); 
		echo "<br>";
		if(!empty($lastName) && !empty($genre) && empty($movies)){
			echo "<h1>" . "No films were found" . "</h1>";
		}
		foreach($movies as $movie)
		{
			echo $movie['title'] . "<br>";
		}
		
		if(!empty($lastName) && !empty($genre)&& !empty($movies)){
			echo "<br>Use of aggregate functions<br>Based on the director in the genre<br></br>";
			// Count the number of films for the director.
			$sql = "SELECT count(1) AS Films
					FROM netflix 
	   				JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
	   			 	WHERE 
	    			lastName = :lastName
	    			AND
	    			genre = :genre";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":lastName"=>$_GET['lastName'], ":genre"=>$_GET['genre']));
			$movies = $stmt -> fetchAll();
			echo "<br>" . "Number of films for director in the genre: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}
		
			// SUM ratings for the director based on the films.
			$sql = "SELECT SUM(ratings) AS Films
					FROM netflix 
				    JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
	   			 	WHERE    	
	    			lastName = :lastName
	    			AND
	    			genre = :genre";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":lastName"=>$_GET['lastName'], ":genre"=>$_GET['genre']));
			$movies = $stmt -> fetchAll();
			echo "SUM ratings for the director in the genre: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}
		
			// AVG ratings for the director based on the films.
			$sql = "SELECT AVG(ratings) AS Films
					FROM netflix 
					JOIN netflix_directors ON netflix.filmId = netflix_directors.filmId
	   			 	WHERE 
	    			lastName = :lastName
	    			AND
	    			genre = :genre";
			$stmt = $dbConn -> prepare ($sql);
			$stmt -> execute( array (":lastName"=>$_GET['lastName'], ":genre"=>$_GET['genre']));
			$movies = $stmt -> fetchAll();
			echo "AVG ratings for the director in the genre: ";
			foreach($movies as $movie)
			{
				echo $movie['Films'] . "<br>";
			}
		}
	}
}
?> 
</div>