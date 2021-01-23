/*rock paper scissors
function expressions and web interface */

//select input
const inputField = document.querySelector('#player-move'),
      play = document.querySelector('#playRps'),
      resultDiv = document.querySelector('#result');
let userInput = '';

const getUserChoice = userInput =>{
  userInput = inputField.value;
  userInput = userInput.toLowerCase();
  if(userInput === 'rock'||userInput==='paper'||userInput ==='scissors'){
    return userInput;
  } else{
    console.log('Not a valid move');
  }
};

const getComputerChoice = () =>{
  var num = Math.floor(Math.random()*3);
  switch(num){
    case 0 :
      return'rock';
      break;
    case 1 :
      return'paper';
      break;
    case 2:
      return'scissors';
      break;
  }
};

const determineWinner = (userChoice, computerChoice) =>{
  if (userChoice === computerChoice){
    return 'Tie';
  }
  if (userChoice === 'rock'){
    if (computerChoice==='paper'){
      return 'Computer wins';
    } else{
      return 'You win';
    }
  }
  if (userChoice === 'paper'){
    if (computerChoice==='scissors'){
      return 'Computer wins';
    } else{
      return 'You win';
    }
  }
  if (userChoice === 'scissors'){
    if (computerChoice==='rock'){
      return 'Computer wins';
    } else{
      return 'You win';
    }
  }
  if (userChoice ==='bomb'){
    return 'You win';
  }
}

/*sleep function https://www.sitepoint.com/delay-sleep-pause-wait*/
function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}
const playGame = () => {
  var userChoice = getUserChoice(userInput),
      computerChoice = getComputerChoice();
      let moves = 'User choice: ' + userChoice + '. Computer choice: '+ computerChoice;
      let cMove = 'Computer move: '+ computerChoice;
      let result = determineWinner(userChoice, computerChoice);
      console.log(moves + ' ' + result);
      resultDiv.insertAdjacentHTML= '<span>Loading...</span>';
      sleep(500);
      resultDiv.innerHTML= cMove + '<br>' + result;
}

play.addEventListener('click', playGame);
