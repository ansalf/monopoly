const players = document.querySelectorAll('.player');
const numPlayers = players.length;
let currentPlayer = 0;

function rollDice() {
  const result = Math.floor(Math.random() * 6) + 1;
  diceResult.textContent = result;
  
  // Move current player's token
  const currentToken = players[currentPlayer];
  let currentPosition = parseInt(currentToken.dataset.position);
  currentPosition += result;
  if (currentPosition > 40) {
    currentPosition -= 40;
  }
  currentToken.dataset.position = currentPosition;
  currentToken.style.left = `${getPosition(currentPosition)}px`;
  
  // Move to next player
  currentPlayer++;
  if (currentPlayer >= numPlayers) {
    currentPlayer = 0;
  }
}

function getPosition(position) {
  const boardWidth = 600;
  const boardStart = 30;
  const squareWidth = (boardWidth - 2 * boardStart) / 11;
  let pos = boardStart;
  let row = 1;
  while (position > 1) {
    pos += squareWidth;
    position--;
    if (position === 1 || position === 11 || position === 21 || position === 31) {
      pos += squareWidth / 2;
      row++;
    }
  }
  if (row === 1 || row === 3) {
    return pos;
  } else {
    return boardWidth - pos;
  }
}

const rollDiceBtn = document.querySelector('.roll-dice');
const diceResult = document.querySelector('.dice-result');
rollDiceBtn.addEventListener('click', rollDice);
