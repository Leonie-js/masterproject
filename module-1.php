<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="script.js"></script>
	<title>Learn Javascript in Dutch!</title>
</head>
<body >
	<?php 
		$language = $_GET["language"];
		$userID = $_GET["userID"];
	?>

	<header>

	<?php echo "<a class='navlink' href='/home?userID=".$userID."&language=".$language."'>Home</a>"?>
	
	

	<?php echo "<a id='helpbutton' class='navlink' href='/help.php?userID=".$userID."&language=".$language."'>Stop</a>"?>

</header>

<footer>

<h1> Module 1 (<?php echo $userID; ?>) </h1>
	
	<?php

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
			<li>A semicolon at the end of a line indicates where a statement ends. It is only required when you need to separate statements on a single line </li>
			<li>No two variables can have the same name </li>
			<li>'camelCase' is used with naming variables <br/>
			This means the first word is lowercase and the words after that with uppercase </li>
			<li>JavaScript is case sensitive. This means myVariable is not the same as myvariable</li>
			<li>After declaring a variable you don't put 'var' in front of the name anymore. You only need to do this ones at the start of using the variable. So you can not give it a value and after that declare it.</li>
		</ul>
	</div>
	<div class="example">
		<h3> Exercise: </h3>
		<p> Create a variable called <b>carName</b> and assign the value Volvo to it.</p>

		<code><span class="keyword">var</span> <input id="1-1-1" type="text" data-answer="carName"> <span class="operator">=</span> <span class="string">"</span><input id="1-1-2" type="text" data-answer="Volvo"><span class="string">"</span>;</code>

		<input class="exercise" id="excercise1-1" type="submit" value="Check Code"/>

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
				<td><pre><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="string">'text'</span>;</pre></td>
			</tr>
			<tr>
				<th>Number</th>
				<td>This is a number. Numbers don't have quotes around them.</td>
				<td><pre><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="number">10</span>;</pre></td>
			</tr>
			<tr>
				<th>Boolean</th>
				<td>This is a True/False value. The words true and false are special keywords that don't need quote marks.</td>
				<td><pre><span class="keyword">var</span> myVariable <span class="operator"><span class="operator">=</span></span> <span class="operator">true</span>;</pre></td>
			</tr>
			<tr>
				<th>Array</th>
				<td>This is a structure that allows you to store multiple values in a single reference.</td>
				<td><pre><span class="keyword">var</span> myVariable <span class="operator">=</span> [<span class="number">1</span>,<span class="string">'Bob'</span>,<span class="string">'Streve'</span>,<span class="number">10</span>];</pre><br>Refer to each member of the array like this:<br><code>myVariable[0]</code> will say 1,<br/> <code>myVariable[1]</code> will say Bob, etc.</td>
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
				<td><pre><span class="number">6</span> <span class="operator">+</span> <span class="number">9</span>;</pre><br> will say 15.<br><pre><span class="string">'Hello '</span> <span class="operator">+</span> <span class="string">'world!'</span>;</pre><br>will say 'Hello world!'.</td>
			</tr>
			<tr>
				<th>Subtraction, Multiplication, Division</th>
				<td>These do what you'd expect them to do in basic math. Only possible with numbers.</td>
				<td><code><span class="operator">-</span></code> <code><span class="operator">*</span></code> <code><span class="operator">/</span></code></td>
				<td><pre><span class="number">9</span> <span class="operator">-</span> <span class="number">3</span>;</pre> <br>Substract<br><pre><span class="number">8</span> <span class="operator">*</span> <span class="number">2</span>;</pre><br> multiply in JS is an asterisk<br><pre><span class="number">9</span> <span class="operator">/</span> <span class="number">3</span>;</pre> <br>Divide</td>
			</tr>
			<tr>
				<th>Assignment</th>
				<td>As you've seen already: this assigns a value to a variable.</td>
				<td><code><span class="operator">=</span></code></td>
				<td><pre><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="string">'Bob'</span>;</pre></td>
			</tr>
			<tr>
				<th>Equality</th>
				<td>This performs a test to see if two values are equal. It returns a true/false (Boolean) result.</td>
				<td><code><span class="operator">===</span></code></td>
				<td><pre><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="number">3</span>;</pre><br><pre>myVariable <span class="operator">===</span> <span class="number">4</span>;</pre><br>will say false.</td>
			</tr>
			<tr>
				<th>Not, Does-not-equal</th>
				<td>This returns the logically opposite value of what it precedes. It turns a true into a false, etc.. When it is used alongside the Equality operator, the negation operator tests whether two values are <em>not</em> equal.</td>
				<td><code><span class="operator">!</span></code> <code><span class="operator">!==</span></code></td>
				<td>
					<p>For "Not", the basic expression is true, but the comparison returns false because we negate it:</p>

					<pre><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="number">3</span>;</pre><br>
					<pre> <span class="operator">!</span>(myVariable <span class="operator">===</span> <span class="number">3</span>);</pre>

					<p>"Does-not-equal" gives basically the same result with different syntax. Here we are testing "is myVariable NOT equal to 3". This returns false because myVariable IS equal to 3:</p>

					<pre><span class="number"> var</span> myVariable <span class="operator">=</span> <span class="number">3</span>;</pre><br>
					<pre>myVariable <span class="operator">!==</span> <span class="number">3</span>;</pre>
				</td>
			</tr>
		</table>
	</div>

	<div class="example">
		<h3> Exercise: </h3>
		<p> Declare the variable 'age' with 12, after that divide it by 6 and check if it equals 2.</p>

		<pre ><code style="padding:initial;"><span class="keyword">var</span> age <span class="operator">=</span><input id="1-2-1" type="text" data-answer="12">;
age <span class="operator">=</span> age <span class="operator">/</span> <input id="1-2-2" type="text" data-answer="6">;
<span class="keyword">document</span>.<span class="property">getElementById</span>(<span class="string">'example'</span>).<span class="property">innerHTML</span>=<input id="1-2-3" type="text" data-answer="age">;</code></pre><br/>

		<input class="exercise" id="excercise1-2" type="submit" value="Check Code"/>

		<div class="output-1-2" data-code="var age = 12; age = age / 6; document.getElementById('example').innerHTML=age;" id="example"> HERE IT WILL SAY THE AGE </div>
	</div>

	<div class="instructions">
		<p> A point to remember: </p>
		<ul> 
			<li>When adding a number to a string, Javascript will treat it as a string too.<br/>
			<code style="display: inline-block; width: 170px;"><span class="keyword">var</span> x = <span class="number">16</span> + <span class="string">"Volvo"</span>;</code> will be treated as<code style="display: inline-block; width: 170px;"><span class="keyword">var</span> x = <span class="string">"16"</span> + <span class="string">"Volvo"</span>;</code> and will say: '16Volvo'.</li>
			<li> To assign a variable the value of another variable you can use the name of the particular variable. This example give myVariable the value of x plus 4. <code style="display: inline-block; width: 170px;"><span class="keyword">var</span> myVariable = x + <span class="number">4</span>;</code></li>
		</ul>
		<h2> Comments </h2>
		<p> Comments are snippets of text that can be added along with code. The browser ignores text marked as comments. You have two different kind of comments, multiline and signle line.</p>

		<pre style="width: 300px;" ><code style="padding:initial;"><span class="comment">/*
Everything in between is a comment.
*/</span></code></pre><br/>
		<pre style="width: 300px;"><span class="comment">// This is a one line comment.</span></pre> <br/><br/>

		<?php echo "<a class='navlink' target='_blank' href='/exercise-1?userID=".$userID."&language=".$language."'>Go to module 1 exercise</a>"?>
	</div>

	
	<?php   
		} else if ($language == 'dutch'){
	?>
	<div class="instructions">
		<h2> Variabelen </h2>
		<p> Variabelen zijn containers waarin u waarden kunt bewaren. U begint door uw variabele te declareren met het var-sleutelwoord. Dat wordt dan gevolgd door de naam die u aan uw variabele geeft. U kunt zelf kiezen welke:</p>
		<pre><span class="keyword">var</span> mijnVariabele;</pre>
		<pre><span class="keyword">var</span> mijnAndereVariabele;</pre>
		<p> Nadat u een variabele hebt gedeclareerd, kunt u hem een waarde geven: </p>
		<pre class="ex">mijnVariabele <span class="operator">=</span> <span class="string">'tekst'</span>;</pre>
		<p> Als u dat wenst, kunt u deze twee operaties op dezelfde lijn uitvoeren:</p>
		<pre class="ex"><span class="keyword">var</span> mijnVariabele <span class="operator">=</span> <span class="string">'tekst'</span>;</pre>
		<pre class="ex">mijnVariabele <span class="operator">=</span> <span class="string">'nieuwe tekst'</span>;</pre>
		<p> Belangrijke dingen om te onthouden: </p>
		<ul> 
			<li>Alle verklaringen in JavaScript moeten op een puntkomma eindigen, om aan te duiden waar de verklaring eindigt.</li>
			<li>Er mogen geen variabeles zijn met dezelfde naam</li>
			<li>'camelCase' wordt gebruikt bij het bedenken van namen voor variabelen <br/>
			Dit betekend dat het eerste woord geen hoofdletter heeft en elk woord hierna wel</li>
			<li>Nadat je een variabele hebt gedeclareerd hoef je geen 'var' meer ervoor te gebruiken. Dit doe je 1 keer om aan te geven in de code dat je een nieuwe variabele maakt. Je kunt dus niet eerst een variabele een waarde geven en hierna pas de variabele declareren.</li>
		</ul>
	</div>
	<div class="example">
		<h3> Oefening: </h3>
		<p> Maak de variabele <b>carName</b> en geef het de waarde Volvo.</p>

		<code><span class="keyword">var</span> <input id="1-1-1" type="text" data-answer="carName"> <span class="operator">=</span> <span class="string">"</span><input id="1-1-2" type="text" data-answer="Volvo"><span class="string">"</span>;</code>

		<input class="exercise" id="excercise1-1" type="submit" value="Check de code"/>

		<!-- <div id="box"><p>id="box"</p></div> -->
	</div>
	<div class="instructions">
		<h2> Data types </h2>
		<p> Variabelen kunnen verschillende datatypes hebben: </p>
		<table class="standard-table">
			<tr>
				<th>Data type</th>
				<th>Verklaring</th>
				<th>Voorbeeld</th>
			</tr>
			<tr>
				<th>Streng</th>
				<td>Een streng is wat als tekst geldt. Om aan te duiden dat de variabele een streng is, moet u die tussen aanhalingstekens zetten.</td>
				<td><pre><span class="keyword">var</span> mijnVariabele <span class="operator">=</span> <span class="string">'tekst'</span>;</pre></td>
			</tr>
			<tr>
				<th>Nummer</th>
				<td>Een nummer. Nummers worden niet omringd door aanhalingstekens .</td>
				<td><pre><span class="keyword">var</span> mijnVariabele <span class="operator">=</span> <span class="number">10</span>;</pre></td>
			</tr>
			<tr>
				<th>Boolean</th>
				<td>Een waarde die waar of niet waar is. De woorden waar en nietWaar zijn speciale sleutelwoorden in JS en hebben geen aanhalingstekens nodig.</td>
				<td><pre><span class="keyword">var</span> mijnVariabele <span class="operator"><span class="operator">=</span></span> <span class="operator">waar</span>;</pre></td>
			</tr>
			<tr>
				<th>Reeks</th>
				<td>Een reeks die u toestaat om meerdere waarden in één enkele referentie op te slaan (een lijst).</td>
				<td><pre><span class="keyword">var</span> mijnVariabele <span class="operator">=</span> [<span class="number">1</span>,<span class="string">'Bob'</span>,<span class="string">'Steven'</span>,<span class="number">10</span>];</pre><br>Verwijs naar elk lid van de reeks op deze manier:<br><code>myVariable[0]</code> zegt 1,<br/> <code>myVariable[1]</code> zegt Bob, etc.</td>
			</tr>
		</table>

		<h2> Operatoren </h2>
		<p>Een operator is een mathematisch symbool dat een resultaat produceert. Dit resultaat is gebaseerd op twee waarden (of variabelen). In de volgende tabel kunt u een paar van de eenvoudigste operatoren zien, met een paar voorbeelden ernaast die u in uw Javascript-console kunt uitproberen.</p>
		<table class="standard-table">
			<tr>
				<th>Operator</th>
				<th>Verklaring</th>
				<th>Symbo(o)l(en)</th>
				<th>Voorbeeld</th>
			</tr>
			<tr>
				<th>Optellen, Aaneenschakeling</th>
				<td>Gebruiken we om twee nummers op te tellen of om twee strengen (tekst dus) aan elkaar te plakken.</td>
				<td><code><span class="operator">+</span></code></td>
				<td><pre><span class="number">6</span> <span class="operator">+</span> <span class="number">9</span>;</pre><br>zegt 15.<br><pre><span class="string">'Hallo '</span> <span class="operator">+</span> <span class="string">'wereld!'</span>;</pre><br> zegt 'Hallo wereld!'.</td>
			</tr>
			<tr>
				<th>Aftrekken, Vermenigvuldigen, Delen</th>
				<td>Met deze variabelen kunt u rekenen. Dit kan alleen met nummers.</td>
				<td><code><span class="operator">-</span></code> <code><span class="operator">*</span></code> <code><span class="operator">/</span></code></td>
				<td><pre><span class="number">9</span> <span class="operator">-</span> <span class="number">3</span>;</pre><br> Aftrekken<br><pre><span class="number">8</span> <span class="operator">*</span> <span class="number">2</span>;</pre> <br>Vermenigvuldigen is in JS een asterisk<br><pre><span class="number">9</span> <span class="operator">/</span> <span class="number">3</span>;</pre><br> Delen</td>
			</tr>
			<tr>
				<th>Toewijzingsoperator</th>
				<td>Dit hebt u al gezien: het wijst een waarde toe aan een variabele.</td>
				<td><code><span class="operator">=</span></code></td>
				<td><pre><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="string">'Bob'</span>;</pre></td>
			</tr>
			<tr>
				<th>Vergelijken</th>
				<td>Doet een test om te zien of twee waarden gelijk zijn aan elkaar. Levert een waar/niet waar (Boolean) resultaat op. </td>
				<td><code><span class="operator">===</span></code></td>
				<td><pre><span class="keyword">var</span> myVariable <span class="operator">=</span> <span class="number">3</span>;</pre><br><pre>myVariable <span class="operator">===</span> <span class="number">4</span>;</pre><br>zegt dus nietWaar.</td>
			</tr>
			<tr>
				<th>Negatie, Niet gelijk aan</th>
				<td>Levert de logisch tegenovergestelde waarde op van wat erop volgt. Het verandert een waar in een nietWaar enz. Als het samen met de vergelijkingsoperator wordt gebruikt, test de negatieoperator of twee waarden <em>niet</em> gelijk zijn aan elkaar.</td>
				<td><code><span class="operator">!</span></code> <code><span class="operator">!==</span></code></td>
				<td>
					<p>De uitdrukking is waar, maar de vergelijking levert nietWaar op omdat we hem negatief hebben gemaakt.</p>

					<pre><span class="keyword">var</span> mijnVariabele <span class="operator">=</span> <span class="number">3</span>;</pre><br>
					<pre> <span class="operator">!</span>(mijnVariabele <span class="operator">===</span> <span class="number">3</span>);</pre>

					<p>Hier testen we of "mijnVariable NIET gelijk is aan 3". Dit levert nietWaar op omdat mijnVariabele wel degelijk gelijk is aan 3.</p>

					<pre><span class="number"> var</span> myVariable <span class="operator">=</span> <span class="number">3</span>;</pre><br>
					<pre>myVariable <span class="operator">!==</span> <span class="number">3</span>;</pre>
				</td>
			</tr>
		</table>
	</div>

	<div class="example">
		<h3> Oefening: </h3>
		<p> Zorg ervoor dat wanneer de variabele 'leeftijd' aangemaakt wordt de waarde 12 is. Daarna deel de variabele door 6 en zet de variabele in de HTML.</p>

		<pre><code style="padding:initial;"><span class="keyword">var</span> leeftijd <span class="operator">=</span><input id="1-2-1" type="text" data-answer="12">;
leeftijd <span class="operator">=</span> leeftijd <span class="operator">/</span> <input id="1-2-2" type="text" data-answer="6">;
<span class="keyword">document</span>.<span class="property">findElementMetId</span>(<span class="string">'voorbeeld'</span>).<span class="property">inHTML</span>=<input id="1-2-3" type="text" data-answer="leeftijd">;</code></pre><br/>

		<input class="exercise" id="excercise1-2" type="submit" value="Check de code"/>

		<div class="output-1-2" data-code="var age = 12; age = age / 6; document.getElementById('example').innerHTML=age;" id="example">HIER MOET DE LEEFTIJD KOMEN TE STAAN</div>
	</div>

	<div class="instructions">
		<p> Belangrijk om te herinneren: </p>
		<ul> 
			<li>Wanneer je een nummer en een streng aan elkaar toevoegt zal Javascript het nummer ook als een streng aanzien<br/>
			<code style="display: inline-block; width: 170px;"><span class="keyword">var</span> x = <span class="number">16</span> + <span class="string">"Volvo"</span>;</code> wordt gezien als <code style="display: inline-block; width: 170px;"><span class="keyword">var</span> x = <span class="string">"16"</span> + <span class="string">"Volvo"</span>;</code> en zegt dus: '16Volvo'.</li>
			<li> Je kunt een variabele een waarde geven van een andere variabele door de naam van de variabele te gebruiken. Hier wordt de variabele het getal van x plus 4. <pre><span class="keyword">var</span> mijnVariabele = x + <span class="number">4</span>;</pre></li>
		</ul>

		<h2> Commentaren </h2>
		<p> U kunt commentaren in uw JavaScript-code plaatsen, deze worden dan genegeerd door de webbrowser. </p>

		<pre style="width: 300px;" ><code style="padding:initial;"><span class="comment">/*
Alles ertussen is een commentaar.
*/</span></code></pre><br/>
		<pre style="width: 300px;"><span class="comment">// Dit is maar een lijn commentaar</span></pre> <br/><br/>

		<?php echo "<a class='navlink' target='_blank' href='/exercise-1?userID=".$userID."&language=".$language."'>Ga naar de opdracht van Module 1</a>"?>
	</div>
	<?php
		}
	?>
</footer>

</body>
</html>