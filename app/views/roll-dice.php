<?php
// Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
	$random = rand(1, 6);

// Modify the route to take in a parameter named guess. Someone will access the route by visiting http://blog.dev/rolldice/1, where 1 is their guess.
// Modify the route and view so that you can display the guess in addition to the roll and also tell if the guess matches the roll.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>Your random number is: <?= $random; ?></h1>
</body>
</html>