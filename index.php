<?php
/*****************************
 * TIC TAC TOE		     *
 *			     *
 * Created by Ayoub Djenidi  *
 *****************************
 */

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tic Tac Toe!</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet' type='text/css'>
</head>
<body>
<section>
<div class="main">
    <h1>Tic Tac Toe</h1>
<form action="game.php" method="post">
    <p>Please pick your piece:</p>


    <p class="x">X
    <input type="radio" name="piece" value="X" checked>
    </p>
    <p class="o">O
    <input type="radio" name="piece" value="O">
    </p>
    <input type="hidden" name="turnNum" value="1">
    <button type="submit" name="submit" value="Submit">Submit</button>
</form>

    </div>

</section>

</body>
</html>
