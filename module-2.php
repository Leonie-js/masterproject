<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body>
	<?php 
		$language = $_GET["language"];
		$userID = $_GET["userID"];
	?>
	<header>

	<?php echo "<a class='navlink' href='/home?userID=".$userID."&language=".$language."'>Home</a>"?>
	

	<?php echo "<a id='helpbutton' class='navlink' href='/help.php?userID=".$userID."&language=".$language."'>Stop</a>"?>

	</header>
	<footer>

	<h1> Module 2 (<?php echo $userID; ?>) </h1>

	<?php

		if ($language == 'english'){

	?>

	<div class="instructions">
		<h2> Coditionals </h2>
		<p>Conditionals are code structures used to test if an expression returns true or not. A very common form of conditionals is the if ... else statement. For example:</p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">var</span> iceCream <span class="operator">=</span> <span class="string">'chocolate'</span>;
<span class="operator">if</span> (iceCream <span class="operator">==</span> <span class="string">'chocolate'</span>){
	text <span class="operator">=</span> <span class="string">'Yay, I love chocolate ice cream!'</span>;
} <span class="operator">else</span> {
	text <span class="operator">=</span> <span class="string">'Awww, but chocolate is my favorite...'</span>;
}</span></code></pre><br/> 
		<p>The expression inside the if( ... ) is the test. This uses the equality operator (as described above) to compare the variable iceCream with the string chocolate to see if the two are equal. If this comparison returns true, the first block of code runs. If the comparison is not true, the second block of code—after the else statement—runs instead.</p><br/>
		<p> These operators are used to make comparisons:
			<ul>
				<li>'==' is used to look if to things are equal.</li>
				<li>'<' what is on the left side must be smaller than what is on the right side of the operator. Works only with numbers.</li>
				<li>'>' what is on the left side must be bigger than what is on the right side of the operator. Works only with numbers.</li>
				<li>'<=' what is on the left side must be smaller OR equal than what is on the right side of the operator. Works only with numbers.</li>
				<li>'>=' what is on the left side must be bigger OR equal than what is on the right side of the operator. Works only with numbers.</li>
			</ul>
		</p>
		<p>
	</div>

	<div class="example">
		<h3> Exercise: </h3>
		<p> Fix the if statement so that the text says "Hello World" if x is greater than y, otherwise let the text say "Goodbye".</p>

		<pre style="width: 500px;" ><code style="padding:initial;">
<input id="2-1-1" type="text" data-answer="if">(x <input id="2-1-2" type="text" data-answer=">"> y){
	text <span class="operator">=</span> <span class="string">'Hello World'</span>;
} <input id="2-1-3" type="text" data-answer="else"> {
	text <span class="operator">=</span> <span class="string">'Goodbye'</span>;
}</span></code></pre><br/> 

		<input class="exercise" id="exercise2-1" type="submit" value="Check Code"/>
	</div>

	<div class="instructions">
		<p>You can also add multiple if statements in one go by using 'if else'. It will check in other of the the if statements and when one is true it will run the block of code and will not check the rest of the statements. </p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">var</span> iceCream <span class="operator">=</span> <span class="string">'chocolate'</span>;
<span class="operator">if</span> (iceCream <span class="operator">==</span> <span class="string">'chocolate'</span>){
	text <span class="operator">=</span> <span class="string">'Yay, I love chocolate ice cream!'</span>;
} <span class="operator">if else</span> (iceCream <span class="operator">==</span> <span class="string">'vanilla'</span>){
	text <span class="operator">=</span> <span class="string">'Yes vanilla is the best!'</span>;
} <span class="operator">else</span> {
	text <span class="operator">=</span> <span class="string">'Well I love all kinds of icecream!'</span>;
}</span></code></pre><br/> 
		<h2> Loops and iteration </h2>
		<p>Loops offer a quick and easy way to do something repeatedly. <br/> A for loop repeats until a specified condition evaluates to false. A for statement looks as follows: </p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">for</span> (i <span class="operator">= </span> <span class="number">0</span>; i <span class="operator"> < </span> <span class="number">5</span>; i<span class="operator">++</span>;) {
	text <span class="operator">=</span> <span class="string">'The number is '</span> <span class="operator">+</span> i;
}</code></pre><br/> 
		<p>When a for loop executes, the following occurs:
			<ol>
				<li>The initializing expression, 'var i = 0' ,is executed. This declares the variables used in the loop.</li>
				<li>The coditional expression, 'i < 5', is evaluated. If the value of conditionExpression is true, the loop statements execute. If the value of condition is false, the for loop terminates. So as long as i is smaller than 5 the loop will run in this example.</li>
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
				<li>The number is 4 <br/> The loop stops because the number is changed to 5 after the run and is now not smaller than 5 anymore.</li>
			</ol>
		</p>
	</div>

	<div class="example">
		<h3> Exercise: </h3>
		<p> Create a loop that runs from 0 to 9 in the text.</p>

		<pre ><code style="padding:initial;"><span class="keyword">for</span> (<span class="keyword">var</span>i <span class="operator">= </span> <input id="2-2-1" type="text" data-answer="0">; i <span class="operator"> < </span> <input id="2-2-2" type="text" data-answer="10">; i<input id="2-2-3" type="text" data-answer="++">;) {
	text <span class="operator">=</span> <span class="string">'The number is '</span> <span class="operator">+</span> i;
}</code></pre><br/>

		<input class="exercise" id="exercise2-2" type="submit" value="Check Code"/>
	</div>

	<?php echo "<a class='navlink' target='_blank' href='/exercise-2?userID=".$userID."&language=".$language."'>Go to module 2 exercise</a>"?>


	<?php   
		} else if ($language == 'dutch'){
	?>
	<div class="instructions">
		<h2> Vergelijkingen </h2>
		<p>Vergelijkingen zijn code structuren die testen of een uitdrukking waar of nietWaar is. De meest bekende vorm is de als ... anders verklaring. Als voorbeeld:</p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">var</span> ijs <span class="operator">=</span> <span class="string">'chocolade'</span>;
<span class="operator">als</span> (ijs <span class="operator">===</span> <span class="string">'chocolade'</span>){
	tekst <span class="operator">=</span> <span class="string">'Yes, ik hou van chocoladeijs!'</span>;
} <span class="operator">anders</span> {
	tekst <span class="operator">=</span> <span class="string">'Awww, maar chocoladeijs is mijn favoriet...'</span>;
}</span></code></pre><br/> 
		<p>De uitdrukking binnen de als( ... ) is de test. Deze uitdrukking gebruikt de vergelijking operator om de variabele ijs met de streng te vergelijken. Als deze vergelijking waar is dan zou de code onder de uitdrukking worden uitgevoerd. Als de vergelijking nietWaar is zal het tweede blok- na de anders uitdrukking - worden uitgevoerd.</p><br/>
		<p> Met deze operators worden vergelijkingen gemaakt:
			<ul>
				<li>'==' wordt gebruikt om te kijken of twee dingen gelijk zijn aan elkaar. </li>
				<li>'<' wat aan de linkerkant staat moet kleiner zijn dan wat aan de rechterkant van de operator staat. Werkt alleen bij nummers</li>
				<li>'>' wat aan de rechterkant staat moet kleiner zijn dan wat aan de linkerkant van de operator staat. Werkt alleen bij nummers</li>
				<li>'<=' wat aan de linkerkant staat moet kleiner OF gelijk zijn dan wat aan de rechterkant van de operator staat. Werkt alleen bij nummers</li>
				<li>'>=' wat aan de rechterkant staat moet kleiner OF gelijk zijn dan wat aan de linkerkant van de operator staat. Werkt alleen bij nummers</li>
			</ul>
		</p>
	</div>

	<div class="example">
		<h3> Oefening: </h3>
		<p> Zorg ervoor dat de als anders verklaring wordt gerepareerd. Als x groter is dan y moet de tekst "Hallo wereld" zeggen als dit niet zo is moet de tekst "Doei" zeggen.</p>

		<pre style="width: 500px;" ><code style="padding:initial;">
<input id="2-1-1" type="text" data-answer="als">(x <input id="2-1-2" type="text" data-answer=">"> y){
	tekst <span class="operator">=</span> <span class="string">'Hallo Wereld'</span>;
} <input id="2-1-3" type="text" data-answer="anders"> {
	tekst <span class="operator">=</span> <span class="string">'Doei'</span>;
}</span></code></pre><br/> 

		<input class="exercise" id="exercise2-1" type="submit" value="Check de code"/>
	</div>

	<div class="instructions">
		<p>Je kunt ook meerdere vergelijkingen maken door de als anders verklaring te gebruiken. De code checkt dan van boven na beneden een voor een of de uitdrukking waar is. Wanneer dit zo is wordt de code eronder uitgevoerd en kijk hij niet meer verder naar de andere uitdrukkingen die er daarna nog eronder staan.</p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">var</span> ijs <span class="operator">=</span> <span class="string">'chocolade'</span>;
<span class="operator">als</span> (ijs <span class="operator">==</span> <span class="string">'chocolade'</span>){
	tekst <span class="operator">=</span> <span class="string">'Yes, ik hou van chocoladeijs!'</span>;
} <span class="operator">als anders</span> (ijs <span class="operator">==</span> <span class="string">'vanille'</span>){
	tekst <span class="operator">=</span> <span class="string">'Ja vanille is het beste!'</span>;
} <span class="operator">anders</span> {
	tekst <span class="operator">=</span> <span class="string">'Nou ik vind al het ijs wel lekker!'</span>;
}</span></code></pre><br/> 
		<h2> Loops and iteratie </h2>
		<p>Loops geven een makkelijke manier om code vaker achter elkaar te laten uitvoeren.<br/> Een loop herhaalt zichzelf todat de uitdrukking nietWaar wordt. Een loop ziet er bijvoorbeeld zo uit:</p>
		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">voor</span> (<span class="keyword">var</span> i <span class="operator">= </span> <span class="number">0</span>; i <span class="operator"> < </span> <span class="number">5</span>; i<span class="operator">++</span>;) {
	tekst <span class="operator">=</span> <span class="string">'Het nummer is '</span> <span class="operator">+</span> i;
}</code></pre><br/> 
		<p>Wanneer de loop wordt uitgevoerd gebeurd het volgende:
			<ol>
				<li>Bij de uitvoering van de 'var i = 0' uitdrukking word i als nieuwe variabele gemaakt en wordt de waar 0 eraan toegevoegd.</li>
				<li>Bij de vergelijkings uitdrukking 'i < 5' word na elke keer dat de code in het blok is uitgevoerd gecheckt of dit nog steeds waar is. Dus in dit voorbeeld wordt de code uitgevoerd totdat i niet meer kleiner is dan 5</li>
				<li>De code die elke keer wordt uitgevoerd staat tussen { en }.</li>
				<li>Wanneer de code is uitgevoerd wordt de uitdrukking 'i++' uitgevoerd. Hiermee wordt i met 1 verhoogd. Dus na de eerste keer wordt i 2 en daar 3 enz. </li>
				<li>De loop gaat nu weer verder vanaf stap 2</li>
			</ol>
			Dit is wat de tekst zegt:
			<ol>
				<li>De eerste keer is de waarde waarmee de variable wordt aangemaakt.<br/> Het nummer is 0</li>
				<li>Het nummer is 1</li>
				<li>Het nummer is 2</li>
				<li>Het nummer is 3</li>
				<li>Het nummer is 4 <br/> De loop stopt omdat het nummer hierna naar 5 wordt verandert en dat is niet meer kleiner dan 5.</li>
			</ol>
		</p>
	</div>

	<div class="example">
		<h3> Oefening: </h3>
		<p> Maak een loop die van 0 naar 9 loopt in de tekst.</p>

		<pre ><code style="padding:initial;"><span class="keyword">voor</span> (i <span class="operator">= </span> <input id="2-2-1" type="text" data-answer="0">; i <span class="operator"> < </span> <input id="2-2-2" type="text" data-answer="10">; i<input id="2-2-3" type="text" data-answer="++">;) {
	tekst <span class="operator">=</span> <span class="string">'Het nummer is '</span> <span class="operator">+</span> i;
}</code></pre><br/>

		<input class="exercise" id="exercise2-2" type="submit" value="Check de code"/>
	</div>

	<?php echo "<a class='navlink' target='_blank' href='/exercise-2?userID=".$userID."&language=".$language."'>Ga naar de opdracht van Module 2</a>"?>

	<?php
		}
	?>

</footer>
</body>
</html>