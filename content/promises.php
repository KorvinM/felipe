<?php //promises.php
?>

<article>
  <header>
    <h1>Promises</h1>
  </header>
  <div class="article-content col" style="">
    <p>A Promise is an object representing the eventual completion or failure of an asynchronous operation. A Promise object can be in one of three states:
<img class="c-svg" src="https://s3.amazonaws.com/codecademy-content/courses/learn-javascript-promises/Art-346-01.svg">
<p>
<pre><code>/*a promise is constructed thus*/
const inventory = {
  sunglasses: 0,
  pants: 1088,
  bags: 1344
};


function myExecutor(resolve,reject){
  if (inventory.sunglasses >0){
    resolve('Sunglasses order processed.');
  } else{
    reject('That item is sold out.')
  }
}

function orderSunglasses(){
  return new Promise(myExecutor);
}
let orderPromise = orderSunglasses();

console.log(orderPromise);
    </code>
</pre>
  </div>
</article>
