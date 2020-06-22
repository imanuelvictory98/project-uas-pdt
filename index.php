<!DOCTYPE html>
<html lang="en">
<head>
<title>Today meeting</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Share+Tech+Mono'>
<link rel="stylesheet" href="./css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="manifest" href="/manifest.json">
<meta name="Description" content="Meeting Schedjule" />
<!-- Mendeklarasikan warna yang muncul pada address bar Chrome versi seluler -->
<meta name="theme-color" content="#414f57" />
<!-- Mendeklarasikan ikon untuk iOS -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="default" />
<meta name="apple-mobile-web-app-title" content="Today Meeting" />
<link rel="apple-touch-icon" href="img/logo/merah.png" />
<!-- Mendeklarasikan ikon untuk Windows -->
<meta name="msapplication-TileImage" content="/mg/logo/merah.png" />
<meta name="msapplication-TileColor" content="#000000" />
  
</head>

<body>

<div class="home" style="color: #8B254F">
  
  <p><img src="img/logo/merah.png" style="max-width:250px;"></p>
  
   <div class="content">
    <div class="indx-3 indx-s-2" > 
      <h1 style="text-align: left;">Welcome to Puri Indah </h1>
	  	<h5 style="text-align:justify;"><p>A great location in West Jakarta's bustling Puri Indah with fast and easy access to Jakarta - Tangerang Toll Road, Kebon Jeruk and the many business on and around Daan Mogot, make This "fave" one of Jakartas's favorite select service hotels. The 108 stylist rooms are modern, functional and super clean offering cutting-edge LCD TVs, fast and reliable complimentary WiFi, security key card system, air conditioning, in room saves and top of the line and beds with high knot count cotton linens.</p></h/5>
    </div>
    
    <div class="indx-4 indx-s-2" >
      <br><br>
      <div class="content">
      <img src="background/bg.jpg" style="max-width:850px;">
      </div>
    </div>
   </div>
  
  <p></p>
  
    <div class="content">
      <div class="w3-content w3-section" style="max-width:1080px">
        <p><h2 style="color: #8B254F; text-align: center;">Today Promo</h2></p>
        <img class="mySlides w3-animate-fading" src="background/bg.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="img_rr_02.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="img_rr_03.jpg" style="width:100%">
        <img class="mySlides w3-animate-fading" src="img_rr_04.jpg" style="width:100%">
      </div>
  
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 9000);    
}
</script>
      
    </div>
    
  <div class="content" style="text-align: center;">
    <h1>
      Today Event
      <p>
        Puri 1 <br>
        Puri 2 <br>
        Puri 3 <br>
        Puri 5 <br>
        Puri 6 <br>
        Board Room <br>
        Rooftop <br>
      </p>
    </h1>
  </div>
  
</div>  
  
  <div class="footer" style="color: #8B254F">
		<p>
			puriindahjakarta.favehotels.com 
			</br>
			<img src="img/footer/color.png"> 
		</p>
	</div>
  
<script>
  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
      navigator.serviceWorker.register('sw.js');
    });
  }
</script>

</body>
</html>

