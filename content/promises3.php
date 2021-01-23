<?php //promises3.php
?>

<article>
  <header>
    <h1>Chaining Multiple Promises</h1>
  </header>
  <div class="article-content" style="">
    <p>Chaining promises together is called composition. Promises are designed with composition in mind
<div class ="grid-wrap">
<pre data-src = "js/promises/multiplePromises/library.js"></pre>
<pre data-src = "js/promises/multiplePromises/app.js"></pre>
</div>
<p><code>Promise.all()</code> accepts an array of promises as its argument and returns a single promise. That single promise will settle in one of two ways: </p>
<ul>
<li>If every promise in the argument array resolves, the single promise returned from <code>Promise.all()</code> will resolve with an array containing the resolve value from each promise in the argument array.</li>
<li>If any promise from the argument array rejects, the single promise returned from <code>Promise.all()</code> will immediately reject with the reason that promise rejected. This behavior is sometimes referred to as <em>failing fast</em>. </li>
</ul>
<div class ="grid-wrap">
<pre data-src = "js/promises/promiseAll/library.js"></pre>
<pre data-src = "js/promises/promiseAll/app.js"></pre>
</div>
  </div>
</article>
