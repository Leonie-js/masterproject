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
	<h1> Module 5 </h1>
	<?php 
		$language = $_GET["language"];

		if ($language == 'english'){

	?>

	<div class="instructions">
		<h3> Images </h3>
		<p>Now that we have completed the basics of JavaScript we are going to make some of our applications a bit more fun with images!<br/>
		These are the images already on the server, but if you want to add some personal ones you can do that with the button below.<br/><br/>
		Images on the server:</p>
	</div>

	<div class="img" style="display: flex; flex-wrap: wrap;">
		<?php
			$files = scandir('img/');
			$total = count($files);
			$images = array();
			for($x = 0; $x < $total; $x++){
				if ($files[$x] != '.' && $files[$x] != '..') {
					echo "<div class='images'><img src='img/".$files[$x]."'>";
					echo "<p>".$files[$x]."</p></div>";
				}
			};
		?>
	</div>
	<div class="instructions">
		<button>Add your own pictures</button>

		<p style="display: none;">Images you added:</p>
	</div>
	<div class="img" style="display: flex; flex-wrap: wrap;">
		<?php
			$userID = $_GET["userID"];
			if ( file_exists('img/' . $userID .'/') || is_dir('img/' . $userID . '/') ) {
				$filesid = scandir('img/' . $userID . '/');
				$totalid = count($files);
				$imagesid = array();
				for($x = 0; $x < $totalid; $x++){
					if ($filesid[$x] != '.' && $filesid[$x] != '..') {
						echo "<div class='images'><img src='img/".$filesid[$x]."'>";
						echo "<p>".$filesid[$x]."</p></div>";
					}
				}
			}
		?>

	</div>
	<div class="instructions">
		<p>To change the image that is shown in the img tag you have to change the source attribute with the image file name. See the example below.</p>

		<pre style="width: 500px;"><span class="keyword">document</span>.<span class="keyword">querySelector</span>(<span class="string">'img'</span>).src <span class="operator">=</span> <span class="string">'animal.jpg'</span>;</pre>

		<p>Sometimes knowing the name of the image is not enough because it is in a folder. You will need to write down the path to the image too. The path is the way a computer follows the folder structures.<br/>
		For example: with the path 'folder1/folder2/img.png' the computer will look in the 'folder1' folder and then goes to the 'folder2' folder and in that folder tries to find 'img.png'. So to go to the folder you have to type the name and put a '/' after to it to enter the folder.</p>
	</div>

	<div class="example">
		<h3> Exercise:</h3>
		<p>The files on the server are in a folder called 'img' and your personal pictures will be in the folder '<?php echo $userID; ?>' inside the 'img'. Put one of the images paths below to see it in the img box.</p>

		<div id="box"><p>Image element</p></div><br/>

		<pre><span class="keyword">document</span>.<span class="keyword">querySelector</span>(<span class="string">'img'</span>).src <span class="operator">=</span> <input id="ex1path" type="text">;</pre>

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