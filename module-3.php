<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body id="module">
	<?php 
		$language = $_GET["language"];
		$userID = $_GET["userID"];
	?>

	<header>

	<?php echo "<a class='navlink' href='/home?userID=".$userID."&language=".$language."'>Home</a>"?>
	
	

	<?php echo "<a id='helpbutton' class='navlink' href='/help.php?userID=".$userID."&language=".$language."'>Stop</a>"?>
	</header>
	<footer>
	<h1> Module 3 (<?php echo $userID; ?>) </h1>
	<?php

		if ($language == 'english'){

	?>

	<div class="instructions">
		<h3>Functions</h3>
		<p>Functions are a way of packaging functionality that you wish to reuse. It's possible to define a body of code as a function that executes when you call the function name in your code. This is a good alternative to repeatedly writing the same code. <br/>
		Some of these functions are built into the browser which you might have noticed in previous exercises. For example:</p>
		<pre class="ex"><span class="keyword">var</span> element <span class="operator">=</span> <span class="keyword">document</span>.<span class="property">getElementById</span>(<span class="string">'textelement'</span>);</pre><br/>

		<p>If you see something which looks like a variable name, but it's followed by parentheses— () —it is likely a function. Functions often take arguments: bits of data they need to do their job. Arguments go inside the parentheses, separated by commas if there is more than one argument.<br/>
		For example, the document.getElementById() function gives an element on the page, but we need to give it a string as an argument to tell the function what id this element has.<br/><br/></p>

		<p>There are also functions that don't have a () behind them. An example is 'innerHTML'. This can be used behind the getElementById function with a period. This will change the HTML of the element. This is what shows the text in a webbrowser.</p>
		<pre class="ex"> element.<span class="property">innerHTML</span> <span class="keyword">=</span> <span class="string">'Hi this will become the HTML text of the element that is found with the id textelement. '</span>;</pre><br/>


		<h3>Building your own function</h3>
		<p>You can also define your own functions. In the next example, we create a simple function which multiplies two numbers:</p>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">function</span> <span class="function">multiply</span> () {
	<span class="keyword">var</span> result <span class="operator">=</span> 5 <span class="operator">*</span> 4;
}</code></pre><br/>
		
		<p>To execute the function you can do this:</p>
		<pre class="ex"> multiply();</pre><br/>

	</div>

	<!-- <div class="example">
		<p> Probeer de functie uit te laten voeren met verschillence argumenten.</p>

		<code>vermenigvuldigen (<input id="ex1argument1" type="text">,  <input id="ex1argument2" type="text">);</code><br/>

		<input id="checkex1" type="submit" value="Run Function"/>
	</div> -->

	<div class="instructions">

		<p>You can also use the setInterval function. This uses two arguments: the function you want to use and the amount of time it has to wait to execute the function in milliseconds (1000 miliseconds is 1 second). Arguments are put in the () if they are neccesary. Here is an example:</p>

		<pre class="ex"> setInterval(multiply, <span class="number">1000</span>);</pre><br/>

		<p>The multiply function is now executed every second. This can by handy if you function changes with time. </p>

		<h3> Javascript Date</h3>
		<p> A javascript inbedded function is Date().The operator 'new' is used to make a new Date object. JavaScript Date objects represent a single moment in time in a platform-independent format. Date objects contain a Number that represents milliseconds since 1 January 1970 UTC. The object gives you a lot of information, the demo below gives you the information of right now. You can refresh the page to see the seconds changing.</p>

		<pre class="ex"><span class="operator">new</span> Date();</pre>

		<p id="demo"></p>

		<script>
			var d = new Date();
			document.getElementById("demo").innerHTML = d;
		</script>

		<p>So to select what data you want the Date has Instance methods which are functions you can add with a . after the Date(). See here a small list of the methods. You can find them all at <a id="nothing" href="https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Date#Instance_methods">the mozilla developers site</a>.</p>

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

		<pre  ><code style="padding:initial;"><span class="keyword">var</span> dateobject <span class="operator">=</span> <span class="operator">new</span> Date();
<span class="keyword">var</span> dateformat <span class="operator">=</span> dateobject.<input id="3-1-1" type="text" data-answer="getDay()"> <span class="operator">+</span> <span class="string">'-'</span> <span class="operator">+</span> dataobject.<input id="3-1-2" type="text" data-answer="getMonth()"> <span class="operator">+<br></span> <span class="string">'-'</span> <span class="operator">+</span> dataobject.<input id="3-1-3" type="text" data-answer="getFullYear()">;</pre></code><br/>

		<input class="exercise" id="exercise3-1" type="submit" value="Run Function"/>
	</div>

	<?php echo "<a class='navlink' target='_blank' href='/exercise-3?userID=".$userID."&language=".$language."'>Go to excercise of Module 3</a>"?>



	<?php   
		} else if ($language == 'dutch'){
	?>

		<div class="instructions">
		<h3>Functies</h3>
		<p>Functies zijn een manier om functionaliteit te verpakken, die u opnieuw wilt gebruiken. Wanneer u de functie wilt gebruiken, kunt u die aanroepen met zijn naam en hoeft u niet constant de hele code te herschrijven. U hebt hierboven al een paar keer zo'n functie gebruikt. Bijvoorbeeld:  </p>
		<pre class="ex"><span class="keyword">var</span> element <span class="keyword">=</span> <span class="keyword">document</span>.<span class="property">vindElementMetId</span>(<span class="string">'tekstelement'</span>);</pre><br/>

		<p>Als je iets ziet dat eruitziet als de naam van een variabele, maar met haakjes  — () — erachter, dan is het waarschijnlijk een functie. Functies krijgen vaak argumenten — stukjes data die ze nodig hebben om hun werk te doen. Deze staan tussen de haakjes. Als er meerdere zijn, worden ze met komma's van elkaar gescheiden.<br/>
		Sommige functies zijn standaard ingebouwd zoals vindElementMetId() waarmee je elementen kan vinden op basis van hun id.<br/></p>

		<p>Er kunnen ook andere functies gebruikt worden die geen () achter zich hebben staan. Een voorbeeld hiervan is 'inHTML'. Dit kan met een punt achter de vindElementMetId worden gezet of achter een variable die daarvan is gemaakt om de HTML van dit element te veranderen. Dit is de tekst wat wordt getoond in een webbrowser.</p>
		<pre class="ex"> element.<span class="property">inHTML</span> <span class="keyword">=</span> <span class="string">'Hoi dit wordt HTML tekst van het element dat hierboven is gevonden met het id tekstelement.'</span>;</pre><br/>

		<h3>Eigen functies maken</h3>
		<p>Je kunt je eigen functies definiëren — in het volgende voorbeeld schrijven we een eenvoudige functie die twee nummers vermenigvuldigt:</p>

		<pre style="width: 500px;" ><code style="padding:initial;"><span class="keyword">functie</span> <span class="function">vermenigvuldigen</span>(){
	<span class="keyword">var</span> resultaat <span class="operator">=</span> <span class="number">5</span> <span class="operator">*</span> <span class="number">4</span>;
}</code></pre><br/>

		<p>Om je functie uit te voeren kun dit doen:</p>
		<pre class="ex"> vermenigvuldigen();</pre><br/>

	</div>

	<!-- <div class="example">
		<p> Probeer de functie uit te laten voeren met verschillence argumenten.</p>

		<code>vermenigvuldigen (<input id="ex1argument1" type="text">,  <input id="ex1argument2" type="text">);</code><br/>

		<input id="checkex1" type="submit" value="Run Function"/>
	</div> -->

	<div class="instructions">

		<p>Je kunt ook nog de functie gebruikInterval gebruiken. Die heeft twee argumenten: de functie die je wil gebruiken en de tijd van hoelang de functie moet wachten om jou functie te laten uitvoeren in miliseconden (1000 miliseconden is 1 seconde). Argumenten zet je tussen de haakjes als dat nodig is. Hier is een voorbeeld:</p>

		<pre class="ex"> gebruikInterval(vermenigvuldigen, <span class="number">1000</span>);</pre><br/>

		<p>De mijnFunctie wordt nu elke seconde uitgevoert. Dit is soms handig om te gebruiken als je functie constant veranderd.</p>

		<h3> Javascript Datum</h3>
		<p> Een als standaard ingebouwde Javascript functie is Datum().</p>

		<p>De operator 'nieuwe' wordt gebruikt om een nieuwe Date object te maken. Een JavaScript Datum creeert een instantie die een enkel punt in tijd voorstelt. Date objecten zijn gebaseerd op een tijdwaarde die gelijk staat aan het aantal milliseconden sinds 1 Januari, 1970 UTC. Een voorbeeld van welke informatie je terug krijgt staat hieronder. Door de pagina te refreshen (ctrl + 5) kun je de seconden voorbij zien tikken.</p>

		<pre class="ex"><span class="operator">nieuwe</span> Datum();</pre>

		<p id="demo"></p>

		<script>
			var d = new Date();
			document.getElementById("demo").innerHTML = d;
		</script>

		<p>Om te selecteren welke informatie je precies wil hebben zijn er instantie methodes. Deze kun je toevoegen met een . achter Datum(). Hier is een kleine lijst van methodes die je kunt gebruiken. Meer kan je vinden <a id="nothing" href="https://developer.mozilla.org/nl/docs/Web/JavaScript/Reference/Global_Objects/Date">op deze website</a>.</p>

		<table class="standard-table">
			<tr>
				<th>Methode</th>
				<th>Uitleg</th>
			</tr>
			<tr>
				<th>verkrijgDatum()</th>
				<td>Geeft de dag van de maand (1–31) voor de datum in de locale tijd.</td>
			</tr>
			<tr>
				<th>verkrijgDag()</th>
				<td>Geeft de dag van de week (0–6) voor de datum in de locale tijd.</td>
			</tr>
			<tr>
				<th>verkrijgVolledigJaar()</th>
				<td>Geeft het jaar in 4 cijfers voor de datum in de locale tijd.</td>
			</tr>
			<tr>
				<th>verkrijgUren()</th>
				<td>Geeft het aantal uur (0–23) voor de datum in de locale tijd.</td>
			</tr>
			<tr>
				<th>verkrijgMiliseconden()</th>
				<td>Geeft het aantal milliseconden (0–999) voor de datum in de locale tijd.</td>
			</tr>
			<tr>
				<th>verkrijgMinuten()</th>
				<td>Geeft het aantal minuten (0–59) voor de datum in de locale tijd.</td>
			</tr>
			<tr>
				<th>verkrijgMaanden()</th>
				<td>Geeft de maand (0–11) voor de datum in de locale tijd.</td>
			</tr>
			<tr>
				<th>verkrijgSeconden()</th>
				<td>Geeft het aantal seconden (0–59) voor de datum in de locale tijd.</td>
			</tr>
		</table><br/>
	</div>

	<div class="example">
		<h3>Oefening:</h3>
		<p>Vul in de methodes om de datum in een DD-MM-JJJJ formaat te laten zien.</p>

		<pre  ><code style="padding:initial;"><span class="keyword">var</span> datum <span class="operator">=</span> <span class="operator">nieuwe</span> Datum();
<span class="keyword">var</span> datumformaat <span class="operator">=</span> datum.<input id="3-1-1" type="text" data-answer="verkrijgDag()"> <span class="operator">+</span> <span class="string">'-'</span> <span class="operator">+</span> datum.<input id="3-1-2" type="text" data-answer="verkrijgMaanden()"> <span class="operator">+<br></span> <span class="string">'-'</span> <span class="operator">+</span> datum.<input id="3-1-3" type="text" data-answer="verkrijgVolledigJaar()">;</pre></code><br/>

		<input class="exercise" id="excercise3-1" type="submit" value="Check code"/>
	</div>

	<?php echo "<a class='navlink' target='_blank' href='/exercise-3?userID=".$userID."&language=".$language."'>Ga naar de opdracht van Module 3</a>"?>


	<?php
		}
	?>

</footer>
</body>
</html>