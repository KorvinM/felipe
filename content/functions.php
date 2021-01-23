<?php //functions.php
?>

<article id="">
  <header>
    <h1>Functions</h1>
  </header>
  <div class="article-content col" style="">
  <div class="column-wrap">
<p>Function declarations are simple enough
<pre data-src = "js/sleep-debt.js"></pre>
<pre data-src = "js/console2.js"></pre>
</div>
<div class="column-wrap">

<p style="">Function expressions use a different syntax, allowing anonymous functions, useful for passing in as arguments. Unlike function declarations, function expressions are not hoisted so they cannot be called before they are defined.
<pre><code>const plantNeedsWater = function(day){
  if(day === 'Wednesday'){
    return true;
  } else{
    return false;
  }
}
plantNeedsWater('Tuesday');
console.log(plantNeedsWater('Tuesday'));
</code></pre>
<p>ES6 introduces <em><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/Default_parameters">default parameters</a></em>. The following code demostrates this, as well as embedded expressions using <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals">template literals</a>.
<pre><code>function makeShoppingList(item1='milk', item2='bread', item3='eggs'){
  console.log(`Remember to buy ${item1}`);
  console.log(`Remember to buy ${item2}`);
  console.log(`Remember to buy ${item3}`);
}
makeShoppingList();
</code></pre>
<p>We can use <a href="https://www.sitepoint.com/babel-beginners-guide/">babel</a> to <a href="transpilation-test/index.html">transpile</a> modern js down into old-school js, for browsers that haven't caught up.
<p style="">Helper functions: functions called within another function
<pre><code>  function monitorCount(rows, columns) {
    return rows * columns;
  }

  function costOfMonitors(rows,columns){
    return monitorCount(rows,columns) * 200;
  }

  const totalCost = costOfMonitors(5,4);

  console.log(totalCost);
</code></pre>

<p style="">Arrow functions can be used for function expressions:
<pre><code>const plantNeedsWater = (day) => {
  if (day === 'Wednesday') {
    return true;
  } else {
    return false;
  }
};

/*these can be refactored to make very concise function expressions
  known as concise body.
  Techniques:
    * No parenthesis are needed to enclose single parameters</li>
    * A function body composed of a single-line block can dispense with:
      curly braces and the return keyword.
    * The block should immediately follow the arrow =>
    * This is referred to as implicit return.

  Using these techniques and the ternary operator
      plantNeedsWater() can be refactored to a single line:
*/

const plantNeedsWater = day => day === 'Wednesday' ? true : false;
</code></pre>

<div style="border: 1px ridge whitesmoke">
  <h2>Rock Paper Scissors</h2>
  <div style="text-align: center;font-size: 1.14em">
<p>Enter your move and press 'Play!':
<p><input type="text" id ="player-move" name="player-move">
  <button id="playRps" style="">Play!</button>
  <div id ="result" style="height:3em;"></div>
</div>
</div>
<pre data-src = "js/rps.js"></pre>


</div>
  </div>
</article>
