var randomNumber = 5 + 6;
// console.log(randomNumber);

randomNumber = Math.floor(Math.random() * 99) + 1;
console.log(randomNumber);
//document.getElementById("numberToGuess").innerHTML = randomNumber;

var guesses = document.querySelector('#guesses');
var lastResult = document.querySelector('#lastResult');
var lowOrHi = document.querySelector('#lowOrHi');

var guessSubmit = document.querySelector('.guessSubmit');
var guessField = document.querySelector('.guessField');

var guessCount = 1;
var resetButton = document.querySelector('#reset');

var won = 0;
var lost = 0;
resetButton.style.display = 'none';
guessField.focus();

function checkGuess() {
    //alert('I am a placeholder');
     winLoss.innerHTML = 'You have won: ' + won + ' times, and lost ' + lost + ' times.';

    var userGuess = Number(guessField.value);
    if (guessCount === 1) {
        guesses.innerHTML = 'Previous guesses: ';
    }
    guesses.innerHTML += userGuess + ' ';

    if (userGuess === randomNumber) {
        lastResult.innerHTML = 'Congratulations! You got it right!';
        lastResult.style.backgroundColor = 'green';
        lowOrHi.innerHTML = '';
        
        won++;
        setGameOver();
    }
    else if (userGuess > 99)
    {
        lastResult.innerHTML = 'ERROR: Number must not be higher than 99';
        lastResult.style.backgroundColor = 'red';
        lastResult.style.color = 'white';
        
    }
    else if (guessCount === 7) {
        lastResult.innerHTML = 'Sorry, you lost!';
        lost++;
        setGameOver();
    }
    else {
        lastResult.innerHTML = 'Wrong!';
        lastResult.style.backgroundColor = 'red';
        if (userGuess < randomNumber) {
            lowOrHi.innerHTML = 'Last guess was too low!';
        }
        else if (userGuess > randomNumber) {
            lowOrHi.innerHTML = 'Last guess was too high!';
        }
    }

    guessCount++;
    guessField.value = '';
    guessField.focus();
}

guessSubmit.addEventListener('click', checkGuess);

function setGameOver() {
    guessField.disabled = true;
    guessSubmit.disabled = true;
    resetButton.style.display = 'inline';
    resetButton.addEventListener('click', resetGame);
}

function resetGame() {
    guessCount = 1;

    var resetParas = document.querySelectorAll('.resultParas p');
    for (var i = 0; i < resetParas.length; i++) {
        resetParas[i].textContent = '';
    }

    resetButton.style.display = 'none';

    guessField.disabled = false;
    guessSubmit.disabled = false;
    guessField.value = '';
    guessField.focus();

    lastResult.style.backgroundColor = 'white';

    randomNumber = Math.floor(Math.random() * 99) + 1;
}
