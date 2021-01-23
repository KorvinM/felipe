/* kelvin weather*
 * demos usage of the const and let keywords in ES6 */
//set a constant var to the required integer
const kelvin = 0;
//do the kelvin>celsius conversion
var celsius = kelvin-273;
//do the celsius>fahrenheit conversion
let fahrenheit = celsius * (9/5)+32;
//round down. we could do	 this on libe 6, but doing it on another line potentially gives us access to the accurate value if we need it.
fahrenheit = Math.floor(fahrenheit);
console.log(`The temperature is ${fahrenheit} degrees Fahrenheit`);
/* If you’d like extra practice, try this:

    Convert celsius to the Newton scale using the equation below

Newton = Celsius * (33/100)

    Round down the Newton temperature using the .floor() method
    Use console.log and string interpolation to log the temperature in newton to the console
*/

/* dog years
 * */
//set two vars
var myAge = 13.41,
    earlyYears=2;
//multiply earlyYears by 10.5 and reassign
var earlyYears = earlyYears*10.;
//
let laterYears = myAge-2;
//multiply operator
laterYears*=4;
//
console.log(earlyYears, laterYears);
//
var myAgeInDogYears=earlyYears+laterYears;
//console.log('My age in dog years:'+myAgeInDogYears+' years');
let myName = 'Korvin'.toLowerCase();
console.log(`My name is ${myName}. I am ${myAge} years old in human years, which is ${myAgeInDogYears} years old in dog years`);

/* Training Days
 * The program assigns a random event to individuals, and logs their event and the training time they should put in
 */

const getRandEvent = () => {
// random should have block scope here
  const random = Math.floor(Math.random() * 3);
  if (random === 0) {
    return 'Marathon';
  } else if (random === 1) {
    return 'Triathlon';
  } else if (random === 2) {
    return 'Pentathlon';
  }
};

const getTrainingDays = event => {
  let days;
  if (event === 'Marathon') {
     days = 50;
  } else if (event === 'Triathlon') {
     days = 100;
  } else if (event === 'Pentathlon') {
     days = 200;
  }

  return days;
};

//define some constants in global scope to use as parameters for the functions below
const name = 'Nala',
      event = getRandEvent(),
      days = getTrainingDays(event);

const name2 = 'Warren',
      event2 = getRandEvent(),
      days2 = getTrainingDays(event2);

const logEvent = (name, event) => {
  console.log(`${name}'s event is: ${event}`);
};

const logTime =(name, days) => {
  console.log(`${name}'s time to train is: ${days} days`);
};

//with our variables carefully scoped in this way, we can reuse our logEvent and logTime functions as follows
logEvent(name,event);
logTime(name,days);

logEvent(name2, event2);
logTime(name2, days2);
