<?php //async-await.php
?>

<article id="async-await">
  <header>
    <h1>Async-await</h1>
  </header>
  <div class="article-content" style="">
    <p style="">Often in web development, we need to handle asynchronous actions— actions we can wait on while moving on to other tasks. We make requests to networks, databases, or any number of similar operations. JavaScript is non-blocking: instead of stopping the execution of code while it waits, JavaScript uses an <a href="https://youtu.be/8aGhZQkoFbQ" target="_blank" rel="noopener noreferrer"> event-loop</a> which allows it to efficiently execute other tasks while it awaits the completion of these asynchronous actions.</p>
<p>Originally, JavaScript used callback functions to handle asynchronous actions. The problem with callbacks is that they encourage complexly nested code which quickly becomes difficult to read, debug, and scale. With ES6, JavaScript integrated native <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise" target="_blank" rel="noopener noreferrer">promises</a> which allow us to write significantly more readable code. JavaScript is continually improving, and ES8 provides a new syntax for handling our asynchronous action, <em><code>async...await</code></em>. The <code>async...await</code> syntax allows us to write asynchronous code that reads similarly to traditional synchronous, imperative programs. </p>
<p>The <code>async...await</code> syntax is <a href="https://en.wikipedia.org/wiki/Syntactic_sugar" target="_blank" rel="noopener noreferrer">syntactic sugar</a>— it doesn’t introduce new functionality into the language, but rather introduces a new syntax for using promises and <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Generator" target="_blank" rel="noopener noreferrer">generators</a>. Both of these were already built in to the language. Despite this, <code>async...await</code> powerfully improves the readability and scalability of our code. Let’s learn how to use it!</p>
<div class="grid-wrap">


<pre><code class="language-js">/*Here are three ways of reading and printing from two files in a specified order:

    The first version uses callback functions.
    The second version uses native promise syntax
    The third version uses async...await.
    First we set up our txt files and function library
*/

/*file.txt*/
This is the first sentence.
/*file2.txt*/
This is the second sentence.

/*promisifiedReadfile.js*/
const fs = require('fs');
// Below we create a function for reading files that returns a promise. We converted the fs.readfile() function which uses callbacks. Many of the asynchronous functions you'll encounter already return promises, so this extra step is seldom necessary. 
const promisifiedReadfile = (file, encoding) => 
  new Promise((resolve, reject) => {
    fs.readFile(file, encoding, (err, text) => {
			if (err) {
				return reject(err.message);
      }
        resolve(text);
      });
});

module.exports = promisifiedReadfile

/*app.js*/
const fs = require('fs');
const promisifiedReadfile = require('./promisifiedReadfile');
      
// Here we use fs.readfile() and callback functions:
fs.readFile('./file.txt', 'utf-8', (err, data) => {
  if (err) throw err;
  let firstSentence = data;
  fs.readFile('./file2.txt',  'utf-8', (err, data) => {
    if (err) throw err;
    let secondSentence = data;
    console.log(firstSentence, secondSentence)
  });
});

// Here we use native promises with our "promisified" version of readfile:
let firstSentence
promisifiedReadfile('./file.txt', 'utf-8')
  .then((data) => {
    firstSentence = data;
    return promisifiedReadfile('./file2.txt', 'utf-8')
  })
  .then((data) => {
    let secondSentence = data;
    console.log(firstSentence, secondSentence)
  })
  .catch((err) => {console.log(err)});

// Here we use promisifiedReadfile() again but instead of using the native promise .then() syntax, we declare and invoke an async/await function:
//we wrap our asynchronous logic inside a function prepended with the async keyword. Then, we invoke that function. 
async function readFiles() {
  let firstSentence = await promisifiedReadfile('./file.txt', 'utf-8')
  let secondSentence = await promisifiedReadfile('./file2.txt', 'utf-8')
  console.log(firstSentence, secondSentence)
}
readFiles()
/*The await keyword can only be used inside an async function.
 *await is an operator: it returns the resolved value of a promise.
 *Since promises resolve in an indeterminate amount of time, await halts, or pauses, the execution of our async function
 *until a given promise is resolved.

 *In most situations, we’re dealing with promises that were returned from functions.*/
    </code>
</pre>
<pre><code class="language-js">/*This function takes in a number. If the number is 0, it returns a promise that resolves to the string 'zero'. If the number is not 0,  it returns a promise that resolves to the string 'not zero'*/
function withConstructor(num){
  return new Promise((resolve, reject) => {
    if (num === 0){
      resolve('zero');
    } else {
      resolve('not zero');
    }
  })
}

withConstructor(0)
  .then((resolveValue) => {
  console.log(` withConstructor(0) returned a promise which resolved to: ${resolveValue}.`);
})

// async version:
async function withAsync(num){
      if (num === 0){
      return 'zero';
    } else {
      return 'not zero';
    }
};

// Leave this commented out until step 3:

withAsync(100)
  .then((resolveValue) => {
  console.log(` withAsync(100) returned a promise which resolved to: ${resolveValue}.`);
})

/*BONUS: here's codecadamy's test file for this code
 * test.js */
console.log = function () { }
const { expect } = require('chai')
const rewire = require('rewire');
const fs = require('fs');
const code = fs.readFileSync('app.js', 'utf8');

describe('', function () {
    it('', async function () {

        let appModule;
        try {
            appModule = rewire("../app.js")
        } catch (e) {
            expect(true, 'Try checking your code again. You likely have a syntax error.').to.equal(false);
        }
        let withAsync
        try {
            withAsync = appModule.__get__("withAsync");
        } catch (e) {
            expect(true, 'Did you create `withAsync`?').to.equal(false);
        }
        expect(withAsync, "`withAsync()` should be a function. Make sure to use the `async` keyword.").to.be.an.instanceOf(Function);
        let usedAsync = /async/.test(code)
        expect(usedAsync, "`withAsync()` should be an `async` function.").to.equal(true);
				let test1 = await withAsync(0);
        let test2 = await withAsync(100);
        expect(test1, "Your `async` function should return 'zero' if the argument passed to it is `0`.").to.equal('zero')
        expect(test2, "Your `async` function should return 'not zero' if the argument passed to it is not `0`.").to.equal('not zero')
    });
});

    </code>
</pre>
<pre><code class="language-js">/*library.js
This is the shopForBeans function. It uses a setTimeout() function to simulate a time-consuming asynchronous action. The function returns a promise with a resolved value of a string representing a type of bean. It settles on a random beanType from the beanTypes array using Math.random().
*/
const shopForBeans = () => {
  return new Promise((resolve, reject) => {
	const beanTypes = ['kidney', 'fava', 'pinto', 'black', 'garbanzo'];
  setTimeout(()=>{
    let randomIndex = Math.floor(Math.random() * 5)
    let beanType = beanTypes[randomIndex];
    console.log(`I bought ${beanType} beans because they were on sale.`)
   resolve(beanType);
  }, 1000)
})
}

//other bean related functions
let soakTheBeans = (beanType) => {
   return new Promise((resolve, reject) => {
     console.log('Time to soak the beans.')
    setTimeout(()=>{
      console.log(`... The ${beanType} beans are softened.`)
      resolve(true)
      }, 1000)
  })
}

let cookTheBeans = (isSoftened) => {
  return new Promise((resolve, reject) => {
    console.log('Time to cook the beans.')
    setTimeout(()=>{
      if (isSoftened) {
        console.log('... The beans are cooked!') 
        resolve('\n\nDinner is served!')
      }
    }, 1000)
  })
}

  
module.exports = {shopForBeans, soakTheBeans, cookTheBeans} 
    </code>
</pre>
<pre><code class="language-js">/*we can do a couple of things with this library*/

//first a fairly simple operation, getBeans
const shopForBeans = require('./library.js');

async function getBeans() {
  console.log(`1. Heading to the store to buy beans...`);
  let value = await shopForBeans();
  console.log(`3. Great! I'm making ${value} beans for dinner tonight!`);
}

getBeans();

//The true beauty of async...await is when we have a series of asynchronous actions which depend on one another. For example, we may make a network request based on a query to a database. In that case, we would need to wait to make the network request until we had the results from the database. With native promise syntax, we use a chain of .then() functions 
//using the async...await syntax can save us some typing, the length reduction isn’t the main point. Given the two versions of the function, the async...await version more closely resembles synchronous code, which helps developers maintain and debug their code. The async...await syntax also makes it easy to store and refer to resolved values from promises further back in our chain which is a much more difficult task with native promise syntax.

const {shopForBeans, soakTheBeans, cookTheBeans} = require('./library.js');

// Write your code below:
async function makeBeans(){
  let type = await shopForBeans();
  let isSoft = await soakTheBeans(type);
  let dinner = await cookTheBeans(isSoft);
  console.log(dinner);
};

makeBeans();

    </code>
</pre>
<pre><code class="language-js">/*error handling
*library.js
With async...await, we use try...catch statements for error handling.
By using this syntax, not only are we able to handle errors in the same way we do with synchronous code
we can also catch both synchronous and asynchronous errors.
we’ve been working with a lot of promises that never reject, but this isn’t very realistic!

This time we’ve required in a function, cookBeanSouffle() which returns a promise that resolves or rejects randomly*/

//This function returns true 50% of the time.
let randomSuccess = () => {
 let num = Math.random();
 if (num < .5 ){
   return true;
 } else {
   return false;
 }
};

//This function returns a promise that resolves half of the time and rejects half of the time
let cookBeanSouffle = () => {
 return new Promise((resolve, reject) => {
   console.log('Fingers crossed... Putting the Bean Souffle in the oven');
   setTimeout(()=>{
     let success = randomSuccess();
     if(success){
       resolve('Bean Souffle');
     } else {
       reject('Dinner is ruined!');
     }
   }, 1000);
 })
};

module.exports = cookBeanSouffle;

/*app.js*/
const cookBeanSouffle = require('./library.js');

// Write your code below:


async function hostDinnerParty(){
  try{
    let dinner = await cookBeanSouffle();
    console.log( dinner + ' is served!')
  }
    catch(error){
      console.log(error);
      console.log('Ordering a pizza!');
    }
}

hostDinnerParty();



    </code>
</pre>
<pre><code class="language-js">/*Handling Independent Promises

Remember that await halts the execution of our async function. This allows us to conveniently write synchronous-style code to handle dependent promises. But what if our async function contains multiple promises which are not dependent on the results of one another to execute? 
*library.js*/
//modified version of our cooking library
let cookBeans = () => {
  return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('beans')
   }, 1000)
 })
}

let steamBroccoli = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('broccoli')
   }, 1000)
 })
}

let cookRice = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('rice')
   }, 1000)
 })
}

let bakeChicken = () => {
 return new Promise ((resolve, reject) => {
   setTimeout(()=>{
     resolve('chicken')
   }, 1000)
 })
}

module.exports = {cookBeans, steamBroccoli, cookRice, bakeChicken}

//app.js

let {cookBeans, steamBroccoli, cookRice, bakeChicken} = require('./library.js')

// Write your code below:

async function serveDinner(){
 const vegetablePromise = steamBroccoli();
 const starchPromise = cookRice();
 const proteinPromise = bakeChicken();
 const sidePromise = cookBeans();
 console.log(`Dinner is served. We're having ${await vegetablePromise}, ${await starchPromise}, ${await proteinPromise}, and ${await sidePromise}.`)
}

serveDinner();
    </code>
</pre>
<pre><code class="language-js">/*Another way to take advantage of concurrency when we have multiple promises which can be executed simultaneously is to await a Promise.all().

We can pass an array of promises as the argument to Promise.all(), and it will return a single promise. This promise will resolve when all of the promises in the argument array have resolved. This promise’s resolve value will be an array containing the resolved values of each promise from the argument array. */

//app.js
let {cookBeans, steamBroccoli, cookRice, bakeChicken} = require('./library.js')

// Write your code below:

async function serveDinnerAgain(){
  let foodArray = await Promise.all([steamBroccoli(), cookRice(), bakeChicken(),cookBeans() ]);
  let vegetable = foodArray[0];
let starch =  foodArray[1];
let protein =  foodArray[2];
let side =  foodArray[3];

console.log(`Dinner is served. We're having ${vegetable}, ${starch}, ${protein}, and ${side}.`);

}
serveDinnerAgain();

    </code>
</pre>
<div>
<h3>Let’s review</h3>
<ul>
<li><code>async...await</code> is syntactic sugar built on native JavaScript promises and generators.</li>
<li>We declare an async function with the keyword <code>async</code>.</li>
<li>Inside an <code>async</code> function we use the <code>await</code> operator to pause execution of our function until an asynchronous action completes and the awaited promise is no longer pending .</li>
<li><code>await</code> returns the resolved value of the awaited promise.</li>
<li>We can write multiple <code>await</code> statements to produce code that reads like synchronous code.</li>
<li>We use <code>try...catch</code> statements within our <code>async</code> functions for error handling.</li>
<li>We should still take advantage of concurrency by writing <code>async</code> functions that allow asynchronous actions to happen in concurrently whenever possible.</li></ul>
</p>
</div>
</div>
  </div>
</article>
