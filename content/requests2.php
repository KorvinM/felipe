<?php //requests2.php
?>

<article>
  <header>
    <h1>POST Requests</h1>
  </header>
  <div class="article-content" style="">

    <div class="grid-wrap">
      <div>
<pre><code>/*Boilerplate AJAX POST request*/
const xhr = new XMLHttpRequest();
const url = 'https://api-to-call.com/endpoint';
const data = JSON.stringify({id: '200'});
xhr.responseType = 'json';
xhr.onreadystatechange = () =>{
  if(xhr.readyState === XMLHttpRequest.DONE){
    return xhr.response;
  }
}

xhr.open('POST', url);
xhr.send(data);
    </code></pre>
</div>
<div>
<img class="c-svg" src="https://s3.amazonaws.com/codecademy-content/courses/intermediate-javascript-requests/diagrams/XHR+POST+transparent.svg">
</div>
<div>
<h2>URL Shortener</h2>
<pre data-src = "js/requests/url-short/helperFunctions.js"></pre>
<p><a href="js/requests/url-short">Project link</a>
<br>If you want to challenge yourself:</p>
<ul>
<li>Build  <code>shortenUrl()</code>  or <code>getSuggestions()</code> from scratch.</li>
<li>Manipulate the object that is returned to display something different in the browser. </li>
<li>Use a different API to make a GET or POST request.</li>
<li>Create query strings to yield different results.</li>
</ul>
</div>
<pre data-src = "js/requests/url-short/main.js"></pre>
    <div>
<h2>Wander</h2>
<p><a href="js/requests/wander">Project link</a>

</div>
  </div>
</article>
