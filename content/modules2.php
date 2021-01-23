<?php //modules2.php
?>

<article>
  <header>
    <h1>Modules in ES6</h1>
  </header>
  <div class="article-content" style="">
<p>As of ES6, JavaScript has implemented a new more readable and flexible syntax for exporting modules. These are usually broken down into one of two techniques, default export and named exports.
<div class="grid-wrap">
<pre><code>/*modules.js
*named and default exports can be combined*/
export let availableAirplanes =[
  {name: 'AeroJet',
  fuelCapacity: 800,
  availableStaff: ['pilots', 'flightAttendents', 'engineers', 'medicalAssistance', 'sensorOperations'],
   maxSpeed: 1200,
   minSpeed: 300
  },
  {name: 'SkyJet',
  fuelCapacity: 500,
  availableStaff: ['pilots', 'flightAttendents'],
  maxSpeed: 800,
  minSpeed: 200
  }
];

export let flightRequirements = {
  requiredStaff: 4,
  requiredSpeedRange: 700
}
function meetsSpeedRangeRequirements(maxSpeed, minSpeed,requiredSpeedRange){
  let range = maxSpeed - minSpeed;
  if (range>requiredSpeedRange){return true;}else{return false;}

};
export function meetsStaffRequirements(availableStaff, requiredStaff){
  if (availableStaff.length>=requiredStaff){
    return true;
  }else{
    return false;
  }
};

export default meetsSpeedRangeRequirements;
    </code>
</pre>
<pre><code>/*
    The import keyword begins the statement.
    The keyword Menu here specifies the name of the variable to store the default export in.
    from specifies where to load the module from.
    './menu' is the name of the module to load. When dealing with local files, it specifically refers to the name of the file without the extension of the file.
*/
import {availableAirplanes, flightRequirements, meetsStaffRequirements} from './modules';
import meetsSpeedRangeRequirements from './modules';
function displaySpeedRangeStatus(){
  availableAirplanes.forEach(function(element){
    console.log(element.name + ' meets speed range requirements: ' + meetsSpeedRangeRequirements(element.maxSpeed, element.minSpeed, flightRequirements.requiredSpeedRange));
  });
}
function displayFuelCapacity(){
  availableAirplanes.forEach(function(element){
    console.log('Fuel Capacity of '+ element.name +': ' + element.fuelCapacity);
  });
}

function displayStaffStatus() {
  availableAirplanes.forEach(function(element){
    console.log(element.name + ' meets staff requirements: ' + meetsStaffRequirements(element.availableStaff, flightRequirements.requiredStaff));
  });
}

displayFuelCapacity();
displayStaffStatus();
displaySpeedRangeStatus();
</code></pre>
</div>
  </div>
</article>
