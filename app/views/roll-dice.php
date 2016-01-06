<?php
// Add a view named roll-dice.php. Instead of just returning the random number, show the view and have it display the random number.
// Modify the route and view so that you can display the guess in addition to the roll and also tell if the guess matches the roll.
	$random = rand(1, 6);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll Dice</title>
</head>
<body>
    <h1>The random number is: <?= $random; ?></h1>
    <h1>Your guessed number is: <?= $number; ?></h1>
</body>
</html>