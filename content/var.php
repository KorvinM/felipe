<?php //var.php
?>

<article id="">
  <header>
    <h1>Data and Functions</h1>
  </header>
  <div class="article-content" style="">
    <div class="grid-wrap">
      <div>
        <div class="game">
          <h2 id="game-title"></h2>
          <p id="instructions" class="center small">
            <div class= "grid-wrap q-grid" style="margin: 0 1em;">
              <button id="play" style=""></button>
              <p style="height:2em;justify-self:center">
                <span id = "game-result" style="background:black;border-radius: 50%;transition: all 0.25s"></span></p>
            </div>
          </div>
            <h3>Code</h3>
            <pre data-src = "js/eightball.js"></pre>
      </div>

      <div class="">
        <h3>How it works</h3>
        <p>
          This excercise uses only variables and an
          array. No control statement is needed.

        <p>
          First we set up variables using the ES6 <code>const</code> and <code>let</code>
          keywords, instead of the generic <code>var</code> keyword used in previous versions of JS.
          <br>We use const to declare variables that will not change. Attempting to change them will
          throw errors. We use let for variables that will change.<br>
          There are six datatypes available (boolean, number, string, null, undefined, and objects).
          <br>With <code>const</code>, we assign two strings, and the HTMLElement objects we'll need.
          With <code>let</code>, we declare eightBall as undefined, set randomNumber to null and
          declare answer as an empty string.
          <p>
          We then have three functions, as ES6 function expressions:
          <br>
          <code>init()</code>
          I decided to set all the text in the script, keeping the html
          semantically generic, so it could be the structure of any 'game' with a button
          and an empty node to hold a response. I like how this function adds that
          layer of game-specific meaning to the bare bones of the html. The function
          also adds an event listener to the button. Note the callback passed to the
          listener hasn't been defined yet.
          <p>
          <code>getAnswer()</code>
          This is pretty self-explanatory. Because our eightBall variable was
          declared with let, we can assign it to anything we want, in this case an <a href=
          "https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array">array</a>.
          Let has block scope, which means this array will only be available within this
          function's curly braces. Elements in an array declared with const remain mutable.
          We can change the contents, but cannot reassign a new array or a different value.
          <span class="small">
          Arrays in js are objects, with indexed properties, and a generous collection
          of powerful methods this program doesn't even touch. It simply accesses one
          index defined by an random integer between 0 and 7 we've set using js's built in
          Math object. This could be done as one line, but broken down into 2 makes it very clear.
        </span>
          If the array's length mutates, we could incorporate the array.length method into the
          one-line, which has been included commented out.

          <p>
          <code>playEightBall()</code>
          This function runs getAnswer() and assigns the return value to answer.
          It then messes with the style of the empty result DOM node, to provide some
          instant feedback. Then the answer is set and faded in. This delay covers cases
          when the same random answer is selected consecutively: without this it would seem as if
          nothing had occured.
      </div>
    <div class="col">
      <div class="column-wrap">

        <pre><code>const mottos = [
    'The world is not enough.',
    'Reductio ad absurdium',
    "Crows gather in the meadow where we meet.""];
const saying1 = famousSayings[0];
console.log(listItem);
console.log(famousSayings[2]);
console.log(famousSayings[3]);
/* output:
Fortune favors the brave.
Where there is love there is life.
undefined
* notice trying to access an array item beyond the end of the array produces an undefined variable */
//the following line would update the second item
famousSayings[1] = 'You cannot be serious";
        </code></pre>
</div>
<div>
      <p>The <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array">
        array object</a>'s built in methods include
        <a href="https://www.sitepoint.com/sort-an-array-of-objects-in-javascript/"><code>Array.sort</code></a>
        The following program demos more methods:
        <pre><code>let secretMessage = ['Learning', 'is', 'not', 'about', 'what', 'you', 'get', 'easily', 'the', 'first', 'time,', 'it', 'is', 'about', 'what', 'you', 'can', 'figure', 'out.', '-2015,', 'Chris', 'Pine,', 'Learn', 'JavaScript'];
    console.log(secretMessage.length);
    secretMessage.pop();
    console.log(secretMessage.length);
    secretMessage.push('to', 'program');
    secretMessage[7] = 'right';
    secretMessage.shift();
    secretMessage.unshift('Programming');
    secretMessage.splice(6, 5, 'know');
    console.log(secretMessage.join(' '));
        </code></pre>
        <p class="small">
          Good stuff on arrays
          <ul class="grid-wrap">
<li><a href="https://areknawo.com/exploring-the-hidden-potential-of-javascript-arrays/">
More methods unlock the 'hidden potential of JavaScript arrays!'</a></li>
<li><a href="https://www.freecodecamp.org/news/the-first-shall-be-last-with-javascript-arrays-11172fe9c1e0/">Getting the first and last elements</a></li>
<li></li>
    </div>
  </div>
</article>
