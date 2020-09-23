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
<body>
	<h1> Module 2 </h1>
	<?php 
		$language = $_GET["language"];

		if ($language == 'english'){

	?>

	<div class="instructions">
		<h2> Coditionals </h2>
		<p>Conditionals are code structures used to test if an expression returns true or not. A very common form of conditionals is the if ... else statement. For example:</p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">var</span> iceCream <span class="operator">=</span> <span class="string">'chocolate'</span>;
<span class="operator">if</span> (iceCream <span class="operator">===</span> <span class="string">'chocolate'</span>){
	<span class="keyword">document</span>.<span class="keyword">write</span>(<span class="string">'Yay, I love chocolate ice cream!'</span>);
} <span class="operator">else</span> {
	<span class="keyword">document</span>.<span class="keyword">write</span>(<span class="string">'Awww, but chocolate is my favorite...'</span>);
}</span></code></pre><br/> 
		<p>The expression inside the if( ... ) is the test. This uses the identity operator (as described above) to compare the variable iceCream with the string chocolate to see if the two are equal. If this comparison returns true, the first block of code runs. If the comparison is not true, the second block of code—after the else statement—runs instead.</p><br/>
		<p>
	</div>

	<div class="example">
		<h3> Exercise: </h3>
		<p> Fix the if statement to alert "Hello World" if x is greater than y, otherwise alert "Goodbye".</p>

		<pre style="width: 500px;" ><code style="padding:initial;">
<input id="2-1-1" type="text" data-answer="if">(x <input id="2-1-2" type="text" data-answer=">"> y){
	<span class="keyword">document</span>.<span class="keyword">write</span>(<span class="string">'Hello World'</span>);
} <input id="2-1-3" type="text" data-answer="else"> {
	<span class="keyword">document</span>.<span class="keyword">write</span>(<span class="string">'Goodbye'</span>);
}</span></code></pre><br/> 

		<input class="exercise" id="exercise2-1" type="submit" value="Check Code"/>

		<h3>Switch</h3>
		<p> The switch statement is used to perform different actions based on different conditions. This is widely used when you have a lot of different values that needs to be checked with the variable. <br/>
		For example the getDay() method returns the weekday as a number between 0 and 6. <br/>
		(Sunday=0, Monday=1, Tuesday=2 ..) <br/>
		This example uses the weekday number to calculate the weekday name:</p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">switch</span> (<span class="operator">new</span> <span class="keyword">Date</span>().<span class="keyword">getDay</span>()) {
	<span class="keyword">case</span> <span class="number">0</span>:
		day <span class="operator">=</span> <span class="string">'Sunday'</span>;
		<span class="keyword">break</span>;
	<span class="keyword">case</span> <span class="number">1</span>:
		day <span class="operator">=</span> <span class="string">'Monday'</span>;
		<span class="keyword">break</span>;
	<span class="keyword">case</span> <span class="number">2</span>:
		day <span class="operator">=</span> <span class="string">'Tuesday'</span>;
		<span class="keyword">break</span>;
	<span class="keyword">case</span> <span class="number">3</span>:
		day <span class="operator">=</span> <span class="string">'Wednesday'</span>;
		<span class="keyword">break</span>;
	<span class="keyword">case</span> <span class="number">4</span>:
		day <span class="operator">=</span> <span class="string">'Thursday'</span>;
		<span class="keyword">break</span>;
	<span class="keyword">case</span> <span class="number">5</span>:
		day <span class="operator">=</span> <span class="string">'Friday'</span>;
		<span class="keyword">break</span>;
	<span class="keyword">case</span> <span class="number">6</span>:
		day <span class="operator">=</span> <span class="string">'Saturday'</span>;	
}</code></pre><br/> 

		<p>When JavaScript reaches a break keyword, it breaks out of the switch block. This will stop the execution of inside the block. This is to make sure that the computer doesn't have to checked more than it needs so if you can try to put the most use case above.
		It is not necessary to break the last case in a switch block. The block breaks (ends) there anyway.
		The default keyword specifies the code to run if there is no case match:</p>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">switch</span> (<span class="keyword">new</span> Date().getDay()) {
	<span class="keyword">case</span> <span class="number">0</span>:
		day <span class="operator">=</span> <span class="string">'Today is Sunday'</span>;
		<span class="keyword">break</span>;
	<span class="keyword">case</span> <span class="number">6</span>:
		day <span class="operator">=</span> <span class="string">'Today is Saterday'</span>;
		<span class="keyword">break</span>;
	<span class="keyword">default</span>:
		day <span class="operator">=</span> <span class="string">'Looking forward to the Weekend'</span>;
}</code></pre><br/> 

	</div>

	<div class="instructions">
		<h2> Loops and iteration </h2>
		<p>Loops offer a quick and easy way to do something repeatedly. <br/> A for loop repeats until a specified condition evaluates to false. A for statement looks as follows: </p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">for</span> (i <span class="operator">= </span> <span class="number">0</span>; i <span class="operator"> < </span> <span class="number">5</span>; i<span class="operator">++</span>;) {
	text <span class="operator">=</span> <span class="string">'The number is '</span> <span class="operator">+</span> i;
}</code></pre><br/> 
		<p>When a for loop executes, the following occurs:
			<ol>
				<li>The initializing expression, 'i = 0' ,is executed. This declares the variables used in the loop.</li>
				<li>The coditional expression, 'i < 5', is evaluated. If the value of conditionExpression is true, the loop statements execute. If the value of condition is false, the for loop terminates. So as long as i is not bigger than 5 the loop will run in this example.</li>
				<li>The statement in the loop, everything between { and }, executes.</li>
				<li>The update expression, 'i++', is executed. Which means that i will be one number higher, so in this example will become 2 after the first time run.</li>
				<li>Starts the loop again from step 2</li>
			</ol>
			This is what the text will say after every run:
			<ol>
				<li>First run, i will be the number it is declared with. <br/> The number is 0</li>
				<li>The number is 1</li>
				<li>The number is 2</li>
				<li>The number is 3</li>
				<li>The number is 4 <br/> The loops stops because the number is changed to 5 after the run and is now not smaller than 5 anymore.</li>
			</ol>
		</p>
	</div>

	<div class="example">
		<h3> Exercise: </h3>
		<p> Create a loop that runs from 0 to 9.</p>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">for</span> (i <span class="operator">= </span> <input id="2-2-1" type="text" data-answer="0">; i <span class="operator"> < </span> <input id="2-2-2" type="text" data-answer="10">; i<input id="2-2-3" type="text" data-answer="++">;) {
	text <span class="operator">=</span> <span class="string">'The number is '</span> <span class="operator">+</span> i;
}</code></pre><br/>

		<input class="exercise" id="exercise2-2" type="submit" value="Check Code"/>
	</div>


	<?php   
		} else if ($language == 'dutch'){
	?>

	<?php
		}
	?>


</body>
</html>