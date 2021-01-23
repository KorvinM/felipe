<?php //requests1.php 
?>

<article>
  <header>
    <h1>GET Requests</h1>
  </header>
  <div class="article-content" style="">
    <p style="">The four most commonly used types of HTTP requests are GET, POST, PUT, and DELETE. In this lesson, we’ll cover GET and POST requests.<a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods" target="_blank" rel="noopener noreferrer">Mozilla Developer Network: HTTP methods</a></p>

<p>With a GET request, we’re retrieving, or <em>getting</em>, information from some source (usually a website). For a POST request, we’re <em>posting</em> information to a source that will process the information and send it back.</p>
<p>Were using the Datamuse API for GET requests and the Rebrandly URL Shortener API for POST requests.
<div class="grid-wrap">
<div>
<h2>JSON Generator</h2>
<a href="./js/requests/json-gen/">Project link</a>
<pre data-src = "js/requests/json-gen/main.js"></pre>
</div>
<div>
<h2>The event loop</h2>
<p>Consider the following code in the context of the event loop
<pre><code>console.log('First message!');
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/EventLoop#Zero_delays
setTimeout(() => {
   console.log('This message will always run last...');
}, 0);
console.log('Second message!');
    </code>
</pre>
<h2>XHR GET requests</h2>
<img class="c-svg" src="https://s3.amazonaws.com/codecademy-content/courses/intermediate-javascript-requests/diagrams/XHR+GET+transparent.svg" style="border: 1px inset whitesmoke;border-radius:.5em;">
<pre><code>/*XHR GET request boilerplate*/
const xhr = new XMLHttpRequest();

const url = 'https://api-to-call.com/endpoint';

xhr.responseType = 'json';

xhr.onreadystatechange = () => {
  if (xhr.readyState === XMLHttpRequest.DONE) {
    return xhr.response;
  }
};

xhr.open('GET', url);
xhr.send();
</code></pre>
<a href="js/requests/wordsmith/">Project link: Wordsmith</a>
</div>
  </div>
</article>
