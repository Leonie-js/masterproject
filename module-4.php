<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body id="module">
	<h1> Module 4 </h1>
	<?php 
		$language = $_GET["language"];

		if ($language == 'english'){

	?>

	<div class="instructions">
		<h3>On click event</h3>
		<p>Real interactivity on a website requires events handlers. These are code structures that listen for activity in the browser, and run code in response. The most obvious example is handling the click event, which is fired by the browser when you click on something with your mouse. To demonstrate this, enter the following into your console, then click on the current webpage:</p>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">document</span>.<span class="keyword">querySelector</span>(<span class="string">'html'</span>).<span class="function">onclick</span> <span class="operator">=</span> <span class="keyword">function</span>(){
	<span class="keyword">document</span>.<span class="keyword">write</span>(<span class="string">'Ouch! Stop poking me!'</span>);
}</code></pre><br/>

		<p>There are many ways to attach an event handler to an element. Here we select the html element (with the use of the querySelector method), setting its onclick handler property equal to an anonymous (i.e. nameless) function, which contains the code we want the click event to run.<br/><br/>
		Note that</p><br/>

		<code><span class="keyword">document</span>.<span class="keyword">querySelector</span>(<span class="string">'html'</span>).<span class="function">onclick</span> <span class="operator">=</span> <span class="keyword">function</span>(){};</code><br/>

		<p>is equivalant to </p><br/>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">var</span> myHTML <span class="operator">=</span><span class="keyword">document</span>.<span class="keyword">querySelector</span>(<span class="string">'html'</span>);
myHTML.<span class="function">onclick</span> <span class="operator">=</span> <span class="keyword">function</span>(){};</code></pre></pre><br/>

		<p>It's just shorter.</p>

		<h3>On change event</h3>
		<p>The onchange event occurs when the value of an element has been changed. This event is mostly used when a 'select' element is added in the text. See below an example of an 'select' element where you can pick your cake. The code example below will show you how the text changes.</p>

		<select>
			<option>Cheesecake</option>
			<option>Chocolate cake</option>
			<option>Red velvet cake</option>
			<option>Carrot cake</option>
		</select>

		<p id="demo"></p>

		<script>
			document.querySelector('select').onchange = function(){
			  var x = document.querySelector('select').value;
			  document.querySelector("#demo").innerHTML = "You selected: " + x;
			}
		</script>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">document</span>.<span class="keyword">querySelector</span>(<span class="string">'select'</span>).<span class="function">onchange</span> <span class="operator">=</span> <span class="keyword">function</span>(){
	<span class="keyword">var</span> x <span class="operator">=</span> <span class="keyword">document</span>.<span class="keyword">querySelector</span>(<span class="string">'select'</span>).value;
	<span class="keyword">document</span>.<span class="keyword">querySelector</span>(<span class="string">'#demo'</span>).innerHTML <span class="operator">=</span> <span class="string">'You selected: ' <span class="operator">+</span></span> x;
}</code></pre>

	</div>
	<div class="example">
		<h3> Exercise:</h3>
		<p>Finish the code to give a on click event to the 'button' element. When its clicked change the text of the button to 'You clicked on me!' with the innerHTML option.</p>

		<button>I am a button</button>

		<pre><code style="padding:initial;"><input id="ex1event" type="text"> <span class="operator">=</span> <span class="keyword">function</span>(){
	<input id="ex1text" type="text"><span class="operator">=</span><span class="string">'You clicked on me!'</span>;
}</code></pre>

		<input id="checkex1" type="submit" value="Check and run code"/>
	</div>



	<?php   
		} else if ($language == 'dutch'){
	?>

	<?php
		}
	?>


</body>
</html>