<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.css">
	<link rel="stylesheet" type="text/css" href="https://codemirror.net/addon/lint/lint.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.35.0/codemirror.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jshint/r07/jshint.js"></script>
	<script src="https://codemirror.net/mode/javascript/javascript.js"></script>
	<script src="https://codemirror.net/addon/lint/lint.js"></script>
	<script src="https://codemirror.net/addon/lint/javascript-lint.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body id="module">
	<h1> Module 3 </h1>
	<?php 
		$language = $_GET["language"];

		if ($language == 'english'){

	?>

	<div class="instructions">
		<h3>Functions</h3>
		<p>Functions are a way of packaging functionality that you wish to reuse. It's possible to define a body of code as a function that executes when you call the function name in your code. This is a good alternative to repeatedly writing the same code. <br/>
		Some of these functions are built into the browser which you might have noticed in previous exercises. For example:</p>
		<pre class="ex"><span class="keyword">document</span>.<span class="keyword">write</span>();</pre><br/>

		<p>If you see something which looks like a variable name, but it's followed by parentheses— () —it is likely a function. Functions often take arguments: bits of data they need to do their job. Arguments go inside the parentheses, separated by commas if there is more than one argument.<br/>
		For example, the document.write() function writes a message on the document (the browser), but we need to give it a string as an argument to tell the function what message to display.<br/><br/></p>

		<h3>Building your own function</h3>
		<p>You can also define your own functions. In the next example, we create a simple function which takes two numbers as arguments and multiplies them:</p>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">function</span> <span class="function">multiply</span> (<span class="array">num1</span>, <span class="array">num2</span>) {
	<span class="keyword">var</span> result <span class="operator">=</span> num1 <span class="operator">*</span> num2;
	<span class="operator">return</span> result;
}</code></pre><br/>

	</div>

	<div class="example">
		<p>Try running the function with different argument.The return statement tells the browser to return the result variable out of the function so it is available to use. This is necessary because variables defined inside functions are only available inside those functions. This is called variable scoping.</p>

		<code><span class="keyword">multiply</span> (<input id="ex1argument1" type="text">,  <input id="ex1argument2" type="text">);</code><br/>

		<input id="checkex1" type="submit" value="Run Function"/>
	</div>

	<div class="instructions">
		<h3> Javascript Date</h3>
		<p> A javascript inbedded function that you also already have seen and will use later on is 'Date'. This example was used in the switch statement:</p><br/>

		<pre class="ex"><span class="operator">new</span> <span class="keyword">Date</span>().<span class="keyword">getDay</span>()</pre><br/>

		<p>The operator 'new' is used to make a new Date object. JavaScript Date objects represent a single moment in time in a platform-independent format. Date objects contain a Number that represents milliseconds since 1 January 1970 UTC. The object gives you a lot of information, the demo below gives you the information of right now. You can refresh the page to see the seconds changing.</p>

		<pre class="ex"><span class="operator">new</span> <span class="keyword">Date</span>();</pre>

		<p id="demo"></p>

		<script>
			var d = new Date();
			document.getElementById("demo").innerHTML = d;
		</script>

		<p>So to select what data you want the Date has Instance methods which are functions you can add with a . after the Date(). See here a small list of the methods. You can find them all at <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date#Instance_methods">the mozilla developers site</a>.</p>

		<table class="standard-table">
			<tr>
				<th>Method</th>
				<th>Explanation</th>
			</tr>
			<tr>
				<th>getDate()</th>
				<td>Returns the day of the month (1–31) for the specified date according to local time.</td>
			</tr>
			<tr>
				<th>getDay()</th>
				<td>Returns the day of the week (0–6) for the specified date according to local time.</td>
			</tr>
			<tr>
				<th>getFullYear()</th>
				<td>Returns the year (4 digits for 4-digit years) of the specified date according to local time.</td>
			</tr>
			<tr>
				<th>getHours()</th>
				<td>Returns the hour (0–23) in the specified date according to local time.</td>
			</tr>
			<tr>
				<th>getMilliseconds()</th>
				<td>Returns the milliseconds (0–999) in the specified date according to local time.</td>
			</tr>
			<tr>
				<th>getMinutes()</th>
				<td>Returns the minutes (0–59) in the specified date according to local time.</td>
			</tr>
			<tr>
				<th>getMonth()</th>
				<td>Returns the month (0–11) in the specified date according to local time.</td>
			</tr>
			<tr>
				<th>getSeconds()</th>
				<td>Returns the seconds (0–59) in the specified date according to local time.</td>
			</tr>
		</table><br/>
	</div>

	<div class="example">
		<h3>Exercise:</h3>
		<p>Fill in the methods to find the right data to give the date in a DD-MM-YYYY format.</p>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">var</span> dateobject <span class="operator">=</span> <span class="operator">new</span> <span class="keyword">Date</span>();
<span class="keyword">document</span>.<span class="keyword">write</span>(dateobject.<input id="ex2date" type="text"> <span class="operator">+</span> <span class="string">'-'</span> <span class="operator">+</span> dataobject.<input id="ex2month" type="text"> <span class="operator">+</span> <span class="string">'-'</span> <span class="operator">+</span> dataobject.<input id="ex2year" type="text">;</pre></code><br/>

		<input id="checkex2" type="submit" value="Run Function"/>
	</div>



	<?php   
		} else if ($language == 'dutch'){
	?>

	<?php
		}
	?>


</body>
</html>