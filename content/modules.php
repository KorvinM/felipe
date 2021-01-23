<?php //modules.php
?>

<article>
  <header>
    <h1>Modules</h1>
  </header>
  <div class="article-content grid-wrap" style="">
<pre><code>/*modules.js
*modules can easily be made available*/
let Menu = {};
Menu.speciality = "Roasted Beet Burger with Mint Sauce";
module.exports = Menu;

let Airplane ={
  myAirplane: "StarJet"
};
module.exports = Airplane;
</code></pre>
<pre><code>/*main.js
in another file, we can use require() to import the available modules*/
const Airplane = require('./modules.js');

function displayAirplane(){
	console.log(Airplane.myAirplane);
}

displayAirplane();
    </code>
</pre>
<pre><code>/*modules.js
* we can also wrap our data and functions in an object, and export by assigning the object to module.exports*/
let Airplane = {};
module.exports = {
  myAirplane: "CloudJet",
  displayAirplane: function(){
    return this.myAirplane;
  }
};
</code></pre>
<pre><code>/*main.js*/
const Airplane = require('./modules.js');

console.log(Airplane.displayAirplane());
</code></pre>
  </div>
</article>
