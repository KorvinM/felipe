<?php //objects.php collates stuff from the free course
?>

<article>
  <header>
    <h1>Objects</h1>
  </header>
  <div class="article-content grid-wrap" style="">
    <div>
    <p>Objects are js's seventh datatype. The following code goes over the basics
<pre><code>/*spaceship object*/
let spaceship = {
  homePlanet: 'Earth',
  color: 'silver',
  'Fuel Type': 'Turbo Fuel',
  numCrew: 5,
  flightPath: ['Venus', 'Mars', 'Saturn'],
  'Active Mission': true,
  'Secret Mission' : 'Discover life outside of Earth.',
  passengers: null,
  telescope: {
    yearBuilt: 2018,
    model: "91031-XLT",
    focalLength: 2032
  },
  crew: {
    captain: {
      name: 'Sandra',
      degree: 'Computer Engineering',
      encourageTeam() { console.log('We got this!') },
     'favorite foods': ['cookies', 'cakes', 'candy', 'spinach'] },
    'chief officer': {
      name: 'Dan',
      degree: 'Aerospace Engineering',
      agree() { console.log('I agree, captain!') }
        },
    medic: {
      name: 'Clementine',
      degree: 'Physics',
      announce() { console.log(`Jets on!`) } },
    translator: {
      name: 'Shauna',
      degree: 'Conservation Science',
      powerFuel() { console.log('The tank is full!') }
        }
  },
  engine: {
    model: "Nimbus2000"
  },
  nanoelectronics: {
    computer: {
      terabytes: 100,
      monitors: "HD"
    },
    backup: {
      battery: "Lithium",
      terabytes: 50
    }
  }
};
</code></pre>
</div>
<div>
<pre><code>/*access properties*/
/*using dot notation*/
let crewCount = spaceship.numCrew,
    planetArray = spaceship.flightPath;
/*using bracket notation
 *We *must* use bracket notation when accessing keys that have numbers, spaces, or special characters in them.*/
let propName =  'Active Mission';
let isActive = spaceship['Active Mission'];
console.log(spaceship[propName]);
/*properties are mutable*/
//change a prop
spaceship.color = 'glorious gold';
//add and set a prop
spaceship.numEngines = 8;

delete spaceship['Secret Mission'];
/*objects can have both objects and methods nested as properties of the parent object
 *the following accesses these properties*/
let capFave = spaceship.crew.captain['favorite foods'][0];
spaceship.passengers = [
  {name: 'Korv',
  seat: 1},
  {name: 'Mary',
  seat: 2}
];

let firstPassenger = spaceship.passengers[0];
/*passing by reference
 */
let greenEnergy = spaceship =>{
  spaceship['Fuel Type'] = 'avocado oil';
}

let remotelyDisable = spaceship =>{
  spaceship.disabled = true;
}

greenEnergy(spaceship);
remotelyDisable(spaceship);

console.log(spaceship);

//looping
for (let member in spaceship.crew){
  console.log(`${member}: ${spaceship.crew[member].name}`
)};

for (let member in spaceship.crew){
  console.log(`${spaceship.crew[member].name}: ${spaceship.crew[member].degree}`
)};

</code></pre>
</div>
  <div>
  <h2>The <code>this</code> keyword, getters and setters</h2>
<pre><code>/*The this keyword
*/
const robot = {
  //the _ indicates a private prop, by convention
  _energyLevel: 100,
  //if a dev failed to follow the convention, and set the prop to a string, bugs would be introduced into the follwing method, which uses the prop
  recharge(){
    this._energyLevel += 30;
    console.log(`Recharged! Energy is currently at ${this._energyLevel}%.`)
  },
  //* key takeaway from the example below is to avoid using arrow functions when using 'this' in a method!
  checkEnergy () {
    console.log(`Energy is currently at ${this.energyLevel}%.`)
  },
  //we can flag errors caused by setting _energyLevel incorrectly with this getter method:
  get energyLevel(){
    if (typeof this._energyLevel==='number'){
      return 'My current energy level is '+ this._energyLevel;
    } else{
      return 'System malfunction: cannot retrieve energy level';
    }
  },
  //and we could create a setter method as follows
    set energyLevel(num){
    if (typeof num === 'number'&& num >= 0){
      this._energyLevel = num;
    } else{
      console.log('Pass in a number that is greater than or equal to 0')
    }
  }
}//end of robot obj
//this code will run fine
robot.checkEnergy();
//but this will produce unwanted side effects on the recharge function
//the developer has indicated the _energyLevel property as private
//she doesn't want it changed to another datatype, as in this example
robot._energyLevel='high';
robot.recharge();
</code></pre>
</div>
<div>
  <h2>Object factory functions, built in methods</h2>
<pre><code>/*a factory is a function used to create objects
*The robotFactory uses property value shorthand
*/
function robotFactory(model, mobile){
  return {
    model,
    mobile,
    functionality: {
      beep() {
        console.log('Beep Boop');
      },
      fireLaser() {
        console.log('Pew Pew');
      }
    }
  }
}

// To check that the property value shorthand technique worked:
const robot = robotFactory('P-501', false)
console.log(robot.model)
console.log(robot.mobile)
//destructured assignment we create a variable with the name of an object’s key that is wrapped in curly braces { } and assign to it the object.
const {functionality} = robot;
functionality.beep();
//object methods keys(), entries(), and assign()
//https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Object#Methods_of_the_Object_constructor

const robotKeys = Object.keys(robot);

console.log(robotKeys);

// Declare robotEntries below this line:
const robotEntries = Object.entries(robot);

console.log(robotEntries);

// Declare newRobot below this line:
const newRobot = Object.assign({laserBlaster: true, voiceRecognition: true},robot);

console.log(newRobot);
</code></pre>
</div>
  </div>
</article>
