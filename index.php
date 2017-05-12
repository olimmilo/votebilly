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
		<embed src="/images/Hymn of the USSR - Red Army Choir (English Sub.).mp3" autostart="true" loop="true" hidden="true">
		<h1>
			Vote Communist, Vote Freedom, Vote Billy
		</h1>
		
		
		<div class="slideshow-container">
			<div class="mySlides fade">
				<img src="images/IMG_1997.JPG" style="width:100%">
			</div>

			<div class="mySlides fade">
				<img src="images/IMG_1998.JPG" style="width:100%">
			</div>

			<div class="mySlides fade">
				<img src="images/IMG_2001.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade">
				<img src="images/IMG_2002.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade">
				<img src="images/IMG_2003.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade">
				<img src="images/IMG_2004.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade">
				<img src="images/IMG_2005.JPG" style="width:100%">
			</div>
			
			<div class="mySlides fade">
				<img src="images/IMG_2006.JPG" style="width:100%">
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<div style="text-align:center">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
			<span class="dot" onclick="currentSlide(4)"></span> 
			<span class="dot" onclick="currentSlide(5)"></span> 
			<span class="dot" onclick="currentSlide(6)"></span> 
			<span class="dot" onclick="currentSlide(7)"></span> 
			<span class="dot" onclick="currentSlide(8)"></span> 
		</div>
		
		<script>
			var slideIndex = 0;
			showSlides();

			function showSlides() {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
			}
			slideIndex++;
			if (slideIndex> slides.length) {slideIndex = 1}    
			for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			setTimeout(showSlides, 4000); // Change image every 2 seconds
			}
		</script> 
		<div id="text">
			<h2>
				What Hanover High Students think of Komrade Billy:
			</h2>
			<p>
				"He is Hanover's last best hope!" <br>
				"Although HHS administration portrays our great leader as an evil man and his people as impoverished, we can assure you that our Dear Leader will lead us towards the true light." <br>
				
			</p>
		</div>
	</body>
</html>
