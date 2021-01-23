<?php //promises2.php
?>

<article>
  <header>
    <h1>Promises 2</h1>
  </header>
  <div class="article-content" style="">
    <p>It's perhaps more important to know how to consume promises. The following notes simulate this, with a ready made library and code to handle promises in a separate file.
<div class ="grid-wrap">
<img class="c-svg" src ="https://s3.amazonaws.com/codecademy-content/courses/learn-javascript-promises/image2.svg">
<pre data-src = "js/promises/then/library.js"></pre>
<pre data-src = "js/promises/then/app.js"></pre>

<pre><code>/* We can also use .catch with promises*/
const {checkInventory} = require('./library.js');

const order = [['sunglasses', 1], ['bags', 2]];

const handleSuccess = (resolvedValue) => {
  console.log(resolvedValue);
};

const handleFailure = (rejectReason) => {
  console.log(rejectReason);
};

// Write your code below:

checkInventory(order).then(handleSuccess).catch(handleFailure);
</code></pre>

</div>
  </div>
</article>
