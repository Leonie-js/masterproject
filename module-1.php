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
	<h1> Module 1 </h1>
	<?php 
		$language = $_GET["language"];

		if ($language == 'english'){

	?>

	<div class="instructions">
		<h2> Variables </h2>
		<p> Variables are containers that store values. You start by declaring a variable with the var keyword, followed by the name you give to the variable: </p>
		<pre><span class="keyword">var</span> myVariable;</pre>
		<pre><span class="keyword">var</span> myOtherVariable;</pre>
		<p> After declaring a variable, you can give it a value: </p>
		<pre class="ex">myVariable <span class="operator">=</span> <span class="string">'text'</span>;</pre>
		<p> Also, you can do both these operations on the same line and later still change the value:</p>
		<pre class="ex"><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="string">'text'</span>;</pre>
		<pre class="ex">myVariable <span class="operator">=</span> <span class="string">'new text'</span>;</pre>
		<p> Some points to remember: </p>
		<ul> 
			<li>No two variables can have the same name </li>
			<li>'camelCase' is used with naming variables <br/>
			This means the first word is lowercase and the words after that with uppercase </li>
			<li>After declaring a variable you don't put 'var' in front of the name anymore. You only need to do this ones at the start of using the variable. So you can not give it a value and after that declare it.</li>
		</ul>
	</div>
	<div class="example">
		<h3> Exercise: </h3>
		<p> Create a variable called 'carName' and assign the value Volvo to it.</p>

		<code class="ex1"><span class="keyword">var</span> <input id="ex1name" type="text"> <span class="operator">=</span> <span class="string">"</span><input id="ex1value" type="text"><span class="string">"</span>;</code>

		<input id="checkex1" type="submit" value="Check Code"/>

		<!-- <div id="box"><p>id="box"</p></div> -->
	</div>
	<div class="instructions">
		<h2> Data types </h2>
		<p> Variables can hold different data types: </p>
		<table class="standard-table">
			<tr>
				<th>Data type</th>
				<th>Explanation</th>
				<th>Example</th>
			</tr>
			<tr>
				<th>String</th>
				<td>This is a sequence of text known as a string. To signify that the value is a string, enclose it in single quote marks.</td>
				<td><code><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="string">'text'</span>;</code></td>
			</tr>
			<tr>
				<th>Number</th>
				<td>This is a number. Numbers don't have quotes around them.</td>
				<td><code><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="number">10</span>;</code></td>
			</tr>
			<tr>
				<th>Boolean</th>
				<td>This is a True/False value. The words true and false are special keywords that don't need quote marks.</td>
				<td><code><span class="keyword">var</span> myVariable <span class="operator"><span class="operator">=</span></span> <span class="operator">true</span>;</code></td>
			</tr>
			<tr>
				<th>Array</th>
				<td>This is a structure that allows you to store multiple values in a single reference.</td>
				<td><code><span class="keyword">var</span> myVariable <span class="operator">=</span> [<span class="number">1</span>,<span class="string">'Bob'</span>,<span class="string">'Streve'</span>,<span class="number">10</span>];</code><br>Refer to each member of the array like this:<br><code>myVariable[0]</code> will say 1,<br/> <code>myVariable[1]</code> will say Bob, etc.</td>
			</tr>
		</table>

		<h2> Operators </h2>
		<p>An operator is a mathematical symbol which produces a result based on two values (or variables). In the following table you can see some of the simplest operators, along with some examples to try in the JavaScript console.</p>
		<table class="standard-table">
			<tr>
				<th>Operator</th>
				<th>Explanation</th>
				<th>Symbol(s)</th>
				<th>Example</th>
			</tr>
			<tr>
				<th>Addition</th>
				<td>Add two numbers together or combine two strings.</td>
				<td><code><span class="operator">+</span></code></td>
				<td><code><span class="number">6</span> <span class="operator">+</span> <span class="number">9</span>;</code> will say 15.<br><span class="string">'Hello '</span> <span class="operator">+</span> <span class="string">'world!'</span>;</code>wil say 'Hello world!'.</td>
			</tr>
			<tr>
				<th>Subtraction, Multiplication, Division</th>
				<td>These do what you'd expect them to do in basic math. Only possible with numbers.</td>
				<td><code><span class="operator">-</span></code> <code><span class="operator">*</span></code> <code><span class="operator">/</span></code></td>
				<td><code><span class="number">9</span> <span class="operator">-</span> <span class="number">3</span>;</code> Substract<br><code><span class="number">8</span> <span class="operator">*</span> <span class="number">2</span>;</code> multiply in JS is an asterisk<br><code><span class="number">9</span> <span class="operator">/</span> <span class="number">3</span>;</code> Divide</td>
			</tr>
			<tr>
				<th>Assignment</th>
				<td>As you've seen already: this assigns a value to a variable.</td>
				<td><code><span class="operator">=</span></code></td>
				<td><code><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="string">'Bob'</span>;</code></td>
			</tr>
			<tr>
				<th>Equality</th>
				<td>This performs a test to see if two values are equal. It returns a true/false (Boolean) result.</td>
				<td><code><span class="operator">===</span></code></td>
				<td><code><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="number">3</span>;</code><br><code>myVariable <span class="operator">===</span> <span class="number">4</span>;</code>will say false.</td>
			</tr>
			<tr>
				<th>Not, Does-not-equal</th>
				<td>This returns the logically opposite value of what it precedes. It turns a true into a false, etc.. When it is used alongside the Equality operator, the negation operator tests whether two values are <em>not</em> equal.</td>
				<td><code><span class="operator">!</span></code> <code><span class="operator">!==</span></code></td>
				<td>
					<p>For "Not", the basic expression is true, but the comparison returns false because we negate it:</p>

					<code><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="number">3</span>;</code><br>
					<code> <span class="operator">!</span>(myVariable <span class="operator">===</span> <span class="number">3</span>);</code>

					<p>"Does-not-equal" gives basically the same result with different syntax. Here we are testing "is myVariable NOT equal to 3". This returns false because myVariable IS equal to 3:</p>

					<code><span class="number"> var</span> myVariable <span class="operator">=</span> <span class="number">3</span>;</code><br>
					<code>myVariable <span class="operator">!==</span> <span class="number">3</span>;</code>
				</td>
			</tr>
		</table>
	</div>

	<div class="example">
		<h3> Exercise: </h3>
		<p> Declare the variable 'age' with 12, after that divide it by 6 and check if it equals 2.</p>

		<code class="ex2"><span class="keyword">var</span> age <span class="operator">=</span><input id="ex2value" type="text">;</code><br/>
		<code class="ex2">age <span class="operator">=</span> age <span class="operator">/</span> <input id="ex2divide" type="text">;</code><br/>
		<code class="ex2"><span class="keyword">document</span>.<span class="keyword">write</span>(<input id="ex2equal" type="text">);</code><br/>

		<input id="checkex2" type="submit" value="Check Code"/>
	</div>

	<div class="instructions">
		<p> A point to remember: </p>
		<ul> 
			<li>When adding a number to a string, Javascript will treat it as a string too.<br/>
			<code style="display: inline-block;"><span class="keyword">var</span> x = <span class="number">16</span> + <span class="string">"Volvo"</span>;</code> will be treated as<code style="display: inline-block;"><span class="keyword">var</span> x = <span class="string">"16"</span> + <span class="string">"Volvo"</span>;</code> and will say: '16Volvo'.</li>
		</ul>
		<h2> Comments </h2>
		<p> Comments are snippets of text that can be added along with code. The browser ignores text marked as comments. You have two different kind of comments, multiline and signle line.</p>

		<pre style="width: 300px;" ><code style="padding:initial;"><span class="comment">/*
Everything in between is a comment.
*/</span></code></pre><br/>
		<pre style="width: 300px;"><span class="comment">// This is a one line comment.</span></pre> <br/><br/>

		<button href="nextpage">Go to module exercise</button>
	</div>

	<div class="codeeditor">
		<h1>Code input</h1>
		<p> use id "voorbeeld" to put text in the output below.</p>
		<textarea id="codeinput"></textarea>

		<input id="checkcode" type="submit" value="Check Code"/>

		<h1>Code output</h1>
		<div id="voorbeeld" ></div>
	</div>
	<?php   
		} else if ($language == 'dutch'){
	?>
	<?php
		}
	?>

</body>
</html>