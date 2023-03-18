const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
	event.preventDefault();
	const numPlayers = document.getElementById('numPlayers').value;
	const playerPiece = document.getElementById('playerPiece').value;
	const playerColor = document.getElementById('playerColor').value;
	const specialRules = document.getElementById('specialRules').value;
	
	// Code for saving settings to local storage
	localStorage.setItem('numPlayers', numPlayers);
	localStorage.setItem('playerPiece', playerPiece);
	localStorage.setItem('playerColor', playerColor);
	localStorage.setItem('specialRules', specialRules);
	
	// Code for navigating to the game board page
	window.location.href = "board.html";
});
