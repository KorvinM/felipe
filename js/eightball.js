/* Magic Eight Ball */
const game = 'Magic Eight Ball',
      instructions =
        "Yes or No? Form your question in your mind. 'Ask' when ready.",
      title = document.querySelector('#game-title'),
      instruct = document.querySelector('#instructions'),
      result = document.querySelector('#game-result'),
      button=document.querySelector('#play');
let eightBall, randomNumber = null, answer = '';

const init = () =>{
  title.innerHTML = game;
  instruct.innerHTML = instructions;
  button.innerHTML = 'Ask!';
  button.addEventListener('click', playEightBall);
}

const getAnswer = () => {
  //create an array to hold our eight-ball answer strings
  eightBall = [
    'Yes, indeed', 'No, not at all', 'You are right', 'You are wrong',
    'You may be right, but proceed cautiously',
    'Conditions are against you, but persevere',
    'The outlook is promising', 'The outlook is poor'
  ];
  /* get a random string from the array using the [Math object](
    https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Math) */
  randomNumber = Math.floor(Math.random()*8);
  answer = eightBall[randomNumber];
  //answer = eightBall[Math.floor(Math.random()*eightBall.length)];
  return answer;
}

const playEightBall = () =>{
  answer = getAnswer();
  setTimeout(function(){
    result.style.padding= "1em";
    result.style.border= "2px solid #4D4D4D";
    result.style.opacity= "0.1";
  }, 236);
  setTimeout(function(){
    result.innerHTML= answer;
    result.style.opacity= "1"
  }, 500);
}

init();
