<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Background images - fullPage.js</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage full-screen backgrounds." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen" />
	<meta name="Resource-type" content="Document" />


	<link type="text/css" rel="stylesheet" href="/fullpageTest/common/css/fullpage-2.8.6.css">
	<!-- <link rel="stylesheet" type="text/css" href="examples.css" /> -->
	<style>

	/* Style for our header texts
	* --------------------------------------- */
	h1{
		font-size: 5em;
		font-family: arial,helvetica;
		color: #fff;
		margin:0;
		padding:0;
	}

	/* Centered texts in each section
	* --------------------------------------- */
	.section{
		text-align:center;
	}


	/* Backgrounds will cover all the section
	* --------------------------------------- */
	.section{
		background-size: cover;
	}
	.slide{
		background-size: cover;
	}

	/* Defining each section background and styles
	* --------------------------------------- */
	#section0{
		background-image: url(imgs/bg1.jpg);
		padding: 30% 0 0 0;
	}
	#section2{
		background-image: url(imgs/bg3.jpg);
		padding: 6% 0 0 0;
	}
	#section3{
		background-image: url(imgs/bg4.jpg);
		padding: 6% 0 0 0;
	}
	#section3 h1{
		color: #000;
	}


 	/*Adding background for the slides
	* --------------------------------------- */
	#slide1{
		background-image: url(imgs/bg2.jpg);
		padding: 6% 0 0 0;
	}
	#slide2{
		background-image: url(imgs/bg5.jpg);
		padding: 6% 0 0 0;
	}


	/* Bottom menu
	* --------------------------------------- */
	#infoMenu li a {
		color: #fff;
	}
	</style>

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="../jquery.fullPage.js"></script>
	<script type="text/javascript" src="examples.js"></script> -->




<script src="/fullpageTest/common/js/jquery-3.1.1.min.js"></script>
<script src="/fullpageTest/common/js/jquery-ui-1.12.1.js"></script>


<script src="/fullpageTest/common/js/fullpage-2.8.6.js"></script>
<script type="text/javascript" src="/fullpageTest/common/js/examples.js"></script>




	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false

			});
		});
	</script>

</head>
<body>

<a href="https://github.com/alvarotrigo/fullPage.js" id="githubLink"><img style="position: fixed;z-index:99; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_orange_ff7600.png" alt="Fork me on GitHub"></a>

<select id="demosMenu">
  <option selected>Choose Demo</option>
  <option id="backgrounds">Background images</option>
  <option id="backgroundVideo">Background video</option>
  <option id="gradientBackgrounds">Gradient backgrounds</option>
  <option id="backgroundsFixed">Fixed fullscreen backgrounds</option>
  <option id="looping">Looping</option>
  <option id="noAnchor">No anchor links</option>
  <option id="scrollingSpeed">Scrolling speed</option>
  <option id="easing">Easing</option>
  <option id="callbacks">Callbacks</option>
  <option id="css3">CSS3</option>
  <option id="continuous">Continuous scrolling</option>
  <option id="normalScroll">Normal scrolling</option>
  <option id="scrollBar">Scroll bar enabled</option>
  <option id="scrolling">Scroll inside sections and slides</option>
  <option id="navigationV">Vertical navigation dots</option>
  <option id="navigationH">Horizontal navigation dots</option>
  <option id="fixedHeaders">Fixed headers</option>
  <option id="apple">Apple iPhone demo (animations)</option>
  <option id="oneSection">One single section</option>
  <option id="responsiveHeight">Responsive Height</option>
  <option id="responsiveWidth">Responsive Width</option>
  <option id="responsiveAutoHeight">Responsive Auto Height</option>
  <option id="autoHeight">Auto height</option>
  <option id="methods">Methods</option>
</select>

<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://alvarotrigo.com/fullPage/" data-text="Great plugin to create fullscreen scrolling websites: http://alvarotrigo.com/fullPage/">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>


<div id="fullpage">
	<div class="section " id="section0"><h1>fullPage.js</h1></div>
	<div class="section" id="section1">
	    <div class="slide" id="slide1"><h1>Slide Backgrounds</h1></div>
	    <div class="slide" id="slide2"><h1>Totally customizable</h1></div>
	</div>
	<div class="section" id="section2"><h1>Lovely images <br />for a lovely page</h1></div>
	<div class="section" id="section3"><h1>One Image = One thousand words</h1></div>
</div>

</body>
</html>