<?php //higherorderfuncs.php
?>

<article id="higher-order-functions">
  <header>
    <h1>Higher order functions</h1>
  </header>
  <div class="article-content col" style="">
<p style="">Higher order functions accept other functions as arguments, and/or return functions as output.
<br>The following code declares a stupid function, with a stupidly long name, using the <code>const</code> keyword, and then reassigns it to a more usable name.
<pre><code>const checkThatTwoPlusTwoEqualsFourAMillionTimes = () => {
  for(let i = 1; i <= 1000000; i++) {
    if ( (2 + 2) != 4) {
      console.log('Something has gone very wrong :( ');
    }
  }
}

//assign announceThatIAmDoingImportantWork without parentheses as the value to the busy variable.
//We want to assign the value of the function itself, not the value it returns when invoked.
const is2p2 = checkThatTwoPlusTwoEqualsFourAMillionTimes;
is2p2();
console.log(is2p2.name);
</code></pre>
<p>Here's a more realistic example from the faq for this excercise
Let's say we have two functions, makeSubarray and isEven:
<pre><code>function makeSubarray (arr, select) {
   return arr.filter(select);
}
function isEven (n) {
   return n % 2 === 0;
}

const array = [0, 1, 2, 3, 4, 5];
//if we pass our array and isEven
makeSubarray (array, isEven); /* returns [0, 2, 4] */
</code></pre>
<p>So this gives us callbacks.
<br>In the case of assigning functions to variables with shorter names, this can be helpful with libraries. If you only need to to use one of many named distance functions, assigning it: <br><code>const dist = EuclideanDistance;</code>.




</div>
</article>
