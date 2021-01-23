/* Sleep debt calculator
 * demos functions and scope */

function getSleepHours(day){
  switch(day){
    case 'monday':
      return 7;
      break;
    case 'tuesday':
      return 8;
      break;
    case 'wednesday':
      return 8;
      break;
    case 'thursday':
      return 7;
      break;
    case 'friday':
      return 8;
      break;
    case 'saturday':
      return 7;
      break;
    case 'sunday':
      return 7;
      break;
  }
}

function getActualSleepHours(){
  return getSleepHours('monday') + getSleepHours('tuesday') + getSleepHours('wednesday') + getSleepHours('thursday')+getSleepHours('friday') +getSleepHours('saturday') + getSleepHours('sunday');
}

function getIdealSleepHours(){
  var idealHours = 7.5;
  return idealHours * 7;
}

function calculateSleepDebt(){
  var actualSleepHours = getActualSleepHours(),
      idealSleepHours = getIdealSleepHours();
   console.log(actualSleepHours);
  console.log(idealSleepHours);
  if (actualSleepHours > idealSleepHours){
    console.log('You got' + (actualSleepHours - idealSleepHours) +' hours more sleep than you needed! Lazy bones!');
  } else if (actualSleepHours < idealSleepHours){
    console.log('You got ' + (idealSleepHours - actualSleepHours) +' hours less sleep than you needed! Make more time for sleep.');
  } else {
    console.log('You got the ideal amount of sleep. Well done!');
  }
}

calculateSleepDebt();
