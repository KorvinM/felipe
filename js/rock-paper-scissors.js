/* rock, paper, scissors
 * demos functions and scope */

var userInput = 'paper';

function getUserChoice(userInput){
  userInput = userInput.toLowerCase();
  if(userInput === 'rock'||userInput==='paper'||userInput ==='scissors'){
    return userInput;
  } else{
    console.log('Not a valid move');
  }
}

function getComputerChoice(){
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

function determineWinner(userChoice, computerChoice){
  if (userChoice === computerChoice){
    return 'tie';
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
  }//secret cheat code
  if (userChoice ==='bomb'){
    return 'You win';
  }
}

function playGame(){
  var userChoice = userInput,
      computerChoice = getComputerChoice();
  let moves = 'User choice: ' + userChoice + '. Computer choice: '+ computerChoice;
  let result = determineWinner(userChoice, computerChoice);
  console.log(moves);
  console.log(result);

}
playGame();
