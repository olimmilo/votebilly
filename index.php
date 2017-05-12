<!DOCTYPE html>
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
		<h1>
			Vote Communist, Vote Freedom, Vote Billy
		</h1>
		
		
		<div class="slideshow-container">
			<div class="mySlides fade">
				<div class="numbertext">1 / 3</div>
					<img src="images/IMG_1997.JPG" style="width:100%">
				<div class="text">KOMRADE BILLY KOMANDS YOU TO FOLLOW</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">2 / 3</div>
					<img src="images/IMG_1998.JPG" style="width:100%">
				<div class="text">KOMRADE BILLY SERVES ALL</div>
			</div>

			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<img src="images/IMG_2001.JPG" style="width:100%">
				<div class="text">SUBMIT TO KOMRADE BILLY</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<img src="images/IMG_2002.JPG" style="width:100%">
				<div class="text">KOMRADE BILLY REPRESENTS A BRIGHTER PATH TO THE FUTURE</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<img src="images/IMG_2003.JPG" style="width:100%">
				<div class="text">THE ERA OF TYRANY AT HHS IS OVER</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<img src="images/IMG_2004.JPG" style="width:100%">
				<div class="text">LET US RISE BEHIND OUR TRUE KOMRADE</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<img src="images/IMG_2005.JPG" style="width:100%">
				<div class="text">BILLY SHALL PREVAIL</div>
			</div>
			
			<div class="mySlides fade">
				<div class="numbertext">3 / 3</div>
					<img src="images/IMG_2006.JPG" style="width:100%">
				<div class="text">LOVE YOUR LEADER</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		
		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			showSlides(slideIndex = n);
			}

			function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			}
		</script>
		
		<embed src="/images/Communist Party USA (Soviet Anthem In English).mp3" autostart="true" loop="true" hidden="true"> 
		<h2>
			This is what the community thinks of our grand leader Billy:
		</h2>
	</body>
</html>
