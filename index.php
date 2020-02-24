<html>
	<title>Hijo</title>		
			<?php
			$object = new DOMDocument();
			$object->load("https://www.bls.gov/feed/empsit.rss");
			 
		$content = $object->getElementsByTagName("entry");
	
		foreach($content as $data){
				$title = $data->getElementsByTagName("title")->item(0)->nodeValue;
				$id = $data->getElementsByTagName("id")->item(0)->nodeValue;
				$content = $data->getElementsByTagName("content")->item(0)->nodeValue;
				$pub = $data->getElementsByTagName("published")->item(0)->nodeValue;
				$upd = $data->getElementsByTagName("updated")->item(0)->nodeValue;
				$cat = $data->getElementsByTagName("category")->item(0)->nodeValue;
			echo "<div><ul class = 'nge'>
			<h1><li>'$title'</li></h1></ul>	
				<ul class = 'meow'>
				<li>$id</li>
				<li>$content</li>
				<li>$pub</li>
				<li>$upd</li>
				<li>$cat</li>
				
				</ul></div>";
	}		
			?>
	<head>
		<link rel="stylesheet" href="style.css">
	</head>
	</body>	
		<h1 class = 'joke'>FOR MORE FEEDS OR INFO'S ABOUT ISSUES</h1><br/>
		<a href="https://www.bls.gov/feed/" class = "tote" target="_blank">GOVERNMENT ISSUES FEEDS!</a>
	</body>
</html>