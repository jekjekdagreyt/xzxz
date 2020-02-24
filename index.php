<html>
	<title>Cars</title>		
			<?php
			$object = new DOMDocument();
			$object->load("https://media.ford.com/content/fordmedia/fna/us/en/news.history.rss");
			 
		$content = $object->getElementsByTagName("item");
	
		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$link = $data->getElementsByTagName("link")->item(0)->nodeValue;
				$desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
				$guid = $data->getElementsByTagName("guid")->item(0)->nodeValue;
				$pub = $data->getElementsByTagName("pubDate")->item(0)->nodeValue;
			echo "<div><ul class = 'nge'>
			<h1><li>'$title'</li></h1></ul>
				<ul class = 'meow'>
				<li><a href = '$link' target = '_blank' class = 'anchor'>$link</a></li>
				<li>$desc</li>
				<li><a href = '$guid' target = '_blank' class = 'anchor'>$guid</a></li>
				<li>$pub</li>
				</ul></div>";
	}		
			?>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	</body>	
		<h1 class = 'joke'>FOR MORE FEEDS OR INFO'S ABOUT FORD MOTORS! PLEASE CLICK HERE</h1><br/>
		<a href="https://media.ford.com/content/fordmedia/fna/us/en/rss.html" class = "tote" target="_blank">FORD MOTORS RSS FEEDS!</a>
	</body>
</html>