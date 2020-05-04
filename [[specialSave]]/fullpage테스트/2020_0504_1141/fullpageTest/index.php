<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Page With Youtube Video Background</title>


<link type="text/css" rel="stylesheet" href="/fullpageTest/common/css/style.css">
<link type="text/css" rel="stylesheet" href="/fullpageTest/common/css/fullpage.css">

<script src="/fullpageTest/common/js/fullpage.js"></script>



<style>
body{ margin:0px; background:#000; }
#bg_container{ height:500px; overflow:hidden; }
#bg{ width:100%; height:900px; }
#content{ position:absolute; top:0px; padding:30px; color:#FFF; text-shadow:#000 2px 2px; }
</style>
</head>
<body>


<!-- :: 영상 상단의 제목 부분은 다른 div로 가리면 된다.(제목 자체를 없앨 수 있는 방법이 없음).  클릭 불가는 아래쪽에 앱솔루트 div 넣어서 덮개를 씌우면 된다.   -->



<div id="bg_container">
	<!-- <iframe src="https://www.youtube.com/embed/CsPrHVqvn4Q?loop=0&autohide=1&autoplay=1&mute=1&playlist=30wfaFHcETs,KQb5ssoNE0s,LAMNTP9TDtY,CsPrHVqvn4Q&controls=0&disablekb=1&enablejsapi=1&modestbranding=1&showinfo=0&rel=0&wmode=opaque&origin=https%3A%2F%2Fwww.denmarkmmuning.com&widgetid=1&enablejsapi=1" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> -->

	<iframe width="100%" height="100%" src="https://www.youtube.com/embed/CsPrHVqvn4Q?loop=0&amp;autohide=1&amp;autoplay=1&amp;mute=1&amp;playlist=30wfaFHcETs,KQb5ssoNE0s,LAMNTP9TDtY,CsPrHVqvn4Q&amp;controls=0&amp;disablekb=1&amp;enablejsapi=1&amp;modestbranding=1&amp;showinfo=0&amp;rel=0&amp;wmode=opaque&amp;origin=https%3A%2F%2Fwww.denmarkmmuning.com&amp;widgetid=1&amp;enablejsapi=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" style="width: 1649.78px;height: 928px;margin-top: 50px;margin-top: 0px;margin-left: -160.889px;">
	</iframe>




</div>
<div id="content">
  <h1>Web page with HD looping video background</h1>
  <h2>Using CSS the video is simply placed underneath our HTML content</h2>
</div>
</body>
</html>