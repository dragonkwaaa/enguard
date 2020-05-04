<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page With Youtube Video Background</title>


<!-- <link type="text/css" rel="stylesheet" href="/fullpageTest/common/css/style.css"> -->
<!-- <link type="text/css" rel="stylesheet" href="/fullpageTest/common/css/fullpage.css"> -->
<link type="text/css" rel="stylesheet" href="/fullpageTest/common/css/fullpage-2.8.6.css">
<link type="text/css" rel="stylesheet" href="/fullpageTest/common/css/customFullpage.css">

<!-- <script src="/fullpageTest/common/js/fullpage.js"></script> -->





<script src="/fullpageTest/common/js/jquery-3.1.1.min.js"></script>
<script src="/fullpageTest/common/js/jquery-ui-1.12.1.js"></script>


<script src="/fullpageTest/common/js/fullpage-2.8.6.js"></script>


<div id="fullpage">
    <div class="section" id="section0">
		<img src="/fullpageTest/common/img/cap1.PNG"/>
	</div>
    <div class="section">
        <!-- <div class="slide" data-anchor="slide1"></div>
        <div class="slide" data-anchor="slide2"></div> -->
		<img src="/fullpageTest/common/img/cap2.PNG"/>
    </div>
    <div class="section" id="section1">Three</div>
    <div class="section">Four</div>
</div>

<script>

// new fullpage('#fullpage', {
//   sectionsColor: ['yellow', 'orange', '#C0C0C0', '#ADD8E6'],
//   navigation: true,
// });
</script>
<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				verticalCentered: false,
				navigation : true,
				// navigationTooltips: ['First page', 'Second page', 'Third and last page']
			});
		});
	</script>
<style>
.section {
  text-align:center;
  font-size: 3em;
}


</style>