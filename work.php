<html>
	<head>
		<title>Vote Billy!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Keywords" content="Billy,Bender,HHS,Communism,Hanover,High School,council">
		<meta name="Description" content="HHS Communist Party's sophomore council nominee, Billy Bender's hompage.">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<link rel="manifest" href="images/manifest.json">
		<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#cc0000">
		<meta name="theme-color" content="#0f0f0f">
		<link rel="stylesheet" href="/css/base.css">
	</head>
	<body> 
		<?php
			$COMMENT=$_POST["COMMENT"];
$file = 'comments.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "Maisy\n";
// Write the contents back to the file
file_put_contents($file, $current, FILE_APPEND | LOCK_EX);
		?>
		<script language="javascript">
   			 window.location.href = "http://votebilly.cf"
    		</script>
	</body>
</html>
