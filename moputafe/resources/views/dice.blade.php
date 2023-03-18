<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dice.css">
    <link rel="text/javascript" href="js/dics.css">
    <title>MOPUTA</title>
</head>

<body>
    <h1 class="header">Dice Roller</h1>
    <!-- Shows a question mark whilst loading--><img src="https://bit.ly/dice-unknown" id="dice" />
    <!-- When you click the div, it executes rollThatDice()-->
    <div onclick="rollThatDice()">Roll That Dice</div>
    <!-- A link to the roll sound you hear-->
    <audio src="https://bit.ly/dice-sound" id="audio"></audio>
</body>

</html>
