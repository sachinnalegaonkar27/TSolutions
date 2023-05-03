<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's Me</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<body>
<header>


		<nav>
        <div class="left-section">
        <img src="{{ asset('images/logo.png') }}" alt="My Logo">
        <h1>Treasure Solution's Ner</h1>
</div>
<div class="right-section">
			<ul>
                <li class="right"><a href="About">About</a></li>
				<li class="right"><a href="Projects">Projects</a></li>
				<li class="right"><a href="Services">Services</a></li>
				<li class="right"><a href="Contact">Contact</a></li>
			</ul>
</div>
		</nav>
		<!-- Add the FlexSlider CSS file -->
		<link rel="stylesheet" href="{{ asset('assets/flexslider/flexslider.css') }}">
	</header>  

    <main>
    <!-- Add your main content here -->
    <div class="flexslider">
      <ul class="slides">
        <li><img src="/assets/images/slide1.jpg" /></li>
        <li><img src="/assets/images/slide2.jpg" /></li>
        <li><img src="/assets/images/slide3.jpg" /></li>
		<li><img src="/assets/images/slide4.jpg" /></li>
		<li><img src="/assets/images/slide5.jpg" /></li>
      </ul>
    </div>
  </main>


<footer>
	<p>Copyright © <?php echo date("Y"); ?> Sachin Nalegaonkar</p>
</footer>
<!-- Add the jQuery and FlexSlider JavaScript files -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="{{ asset('assets/flexslider/jquery.flexslider-min.js') }}"></script>
  <script>
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide",
        slideshowSpeed: 5000,
        animationSpeed: 600,
        controlNav: false,
        directionNav: false
      });
    });
  </script>
</body>
</html>