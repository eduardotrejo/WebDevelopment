<link rel="stylesheet" type="text/css" href="css/assign4.css">
<center>
<h1>
<?php echo "Thank you for shopping" ."<br>"; ?>
</h1>
<h2>
<?php echo "Order Summary: " . "<br>"; ?>
</h2>
<div id="wrap">
<?php

echo "Diablo III: " .$_POST['i1']. "<br>";
echo "Bioshock Infinite: " .$_POST['i2']. "<br>";
echo "The Last of Us: " .$_POST['i3']. "<br>";
echo "S&H: $" .$_POST['shipping']. "<br>";
echo "Tax: $" .$_POST['tax']. "<br>";
echo "Total: $" .$_POST['total']. "<br>";

?>
</div>
</center>