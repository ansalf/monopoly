<!DOCTYPE html>
<html>
<head>
	<title>MOPUTA</title>
	<link rel="stylesheet" type="text/css" href="css/settings.css">
</head>
<body style="background-image: url(img/bg_ijo.png);">
	<h1>Moputa Game Settings</h1>
	<form>
		<label for="numPlayers">Number of Players:</label>
		<input type="number" id="numPlayers" name="numPlayers" min="2" max="6">
		<br><br>
		<label for="playerPiece">Player Piece:</label>
		<select id="playerPiece" name="playerPiece">
			<option value="car">Car</option>
			<option value="shoe">Shoe</option>
			<option value="hat">Hat</option>
			<option value="dog">Dog</option>
			<option value="ship">Ship</option>
			<option value="cat">Cat</option>
		</select>
		<br><br>
		<label for="playerColor">Player Color:</label>
		<select id="playerColor" name="playerColor">
			<option value="red">Red</option>
			<option value="green">Green</option>
			<option value="blue">Blue</option>
			<option value="yellow">Yellow</option>
			<option value="purple">Purple</option>
			<option value="orange">Orange</option>
		</select>
		<br><br>
		<label for="specialRules">Special Rules:</label>
		<textarea id="specialRules" name="specialRules" rows="4" cols="50"></textarea>
		<br><br>
		<input type="submit" value="Save Settings">
	</form>
    <script src="js/settings.js"></script>
</body>
</html>
