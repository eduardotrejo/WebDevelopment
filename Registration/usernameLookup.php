<?php
// In the real world you would check with a database.
$usernames = array("eddy","ted","teddy","eddie","edward");
if  (in_array($_GET['username'], $usernames)) {
  echo "Unavailable";
} else {
  echo "Available";
}
?>
