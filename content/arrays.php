<?php //arrays.php
?>

<article id="">
  <header>
    <h1>Variables and Control</h1>
  </header>
  <div class="article-content" style="">
    <div class="col">
      <div class="column-wrap">
        <h2 id="eightBall"></h2>
        <p>
          <button id="askQuestion" style="">Ask!</button>
          <p id ="eight-result" style="height:3em;"></p>
        <pre data-src = "js/eightball.js"></pre>
      </div>
      <div class="column-wrap">
        <p>Arrays are declared and accessed thus:
    <pre><code>
const famousSayings = ['Fortune favors the brave.', 'A joke is a very serious thing.', 'Where there is love there is life.'];
const listItem = famousSayings[0];
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
    <p>Elements in an array declared with <code>const</code> remain mutable. We can change the contents, but cannot reassign a new array or a different value.
    <p>The <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array">array object</a>'s built in methods include
     <a href="https://www.sitepoint.com/sort-an-array-of-objects-in-javascript/"><code>Array.sort</code></a>
    <p>The following program demos more methods:
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

      </div>

<p>The next two slides cover functions declarations and expressions, and ES6 syntax
  </div>
</article>
