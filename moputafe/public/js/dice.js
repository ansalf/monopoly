var diceFaces = [
    "https://bit.ly/dice-unknown",
    "https://bit.ly/dice-one",
    "https://bit.ly/dice-two",
    "https://bit.ly/dice-three",
    "https://bit.ly/dice-four",
    "https://bit.ly/dice-five",
    "https://bit.ly/dice-six",
];

// Cleans up code later
var image = document.getElementById("dice");
var audio = document.getElementById("audio");

// Gets a random integer, min & max inclusive
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

function rollThatDice() {
    audio.currentTime = 0;
    image.style.animation = "spindice 0.25s";
    setTimeout(function () {
        image.setAttribute("src", diceFaces[getRandomInt(1, 6)]);
    }, 125);

    setTimeout(function () {
        image.style.animation = "none";
    }, 250);
    audio.play();
}

document.addEventListener("DOMContentLoaded", function (event) {
    rollThatDice();
});
