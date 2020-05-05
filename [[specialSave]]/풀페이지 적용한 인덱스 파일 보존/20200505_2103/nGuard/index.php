<!DOCTYPE html>
<html>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/nGuard/common/pages/head.php';?>
<body>
<div class="container">
	<div class="contents">
		<div class="fullpageCover">
		    <div class="section firstRowSect fp-auto-height" data-anchor="1">
				<div class="headLine underSectionSort">
					<div class="titleBox">N-GUARD</div>
					<ul class="menuTab">
						<li>
							<a href="javascript:void(0);">BRAND</a>
						</li>
						<li>
							<a href="javascript:void(0);">SHOP</a>
						</li>
						<li>
							<a href="javascript:void(0);">SERVICE</a>
						</li>
					</ul>
					<div class="rightMenuBox underHeadlineSort">
						<a href="javascript:void(0);">로그인</a>
						<a href="javascript:void(0);">회원가입</a>
						<a href="javascript:void(0);">
							<i class="cartIcon"></i>
						</a>
					</div>
				</div>
				<div class="backImgBox">
					<img class="backgroundMainImg" src="/nGuard/common/img/img_backgroundMain.png"/>
					<div class="textGroup insideImgSort">
						<div>N-GUARD</div>
						<div>우리의 '숨'을 부탁해</div>
					</div>
				</div>
			</div>
		    <div class="section secondRowSect fp-auto-height" data-anchor="2">
				<div class="goodsInfoGroup underSectionSort">
					<img class="goodsImg devivedSort" src="/nGuard/common/img/img_maskBox.png"/>
					<div class="infoTextGroup">
						<div class="fc_fieldBlue fs26 mb13 fBold">Hyper-Purifying Breathing Mask</div>
						<div class="fs14 mb19">나노필터 사용으로 통기성 UP</div>
						<div class="fs30 fBoldEX lh40 mb24">엔가드 마스크</div>
						<a href="javascript:void(0);" class="textInfoBtn">제품 보러가기</a>
					</div>
				</div>
			</div>
			



			<div class="section thirdRowSect fp-auto-height" data-anchor="3">
				<div class="reviewTotalGroup underSectionSort">
					<a href="javascript:void(0);" class="listOpenBtn reviewListSort">
						<div class="fs30 fc_white lh40 mb10 fBold">REVIEW</div>
						<div class="fs14 fc_white lh40">+ 더보기</div>
					</a>
					<ul class="listGroup reviewListSort">
						<li>
							<a href="javascript:void(0);">
								<span class="reviewDate">2020.04.03</span>
								<span class="reviewTitle">좋은 가격에 잘 구매했네요~</span>
								<div class="ratingGroup">
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="reviewDate">2020.04.04</span>
								<span class="reviewTitle">좋은 가격에 잘 구매했당</span>
								<div class="ratingGroup">
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
								</div>
							</a>
						</li>
						<li>
							<a href="javascript:void(0);">
								<span class="reviewDate">2020.04.04</span>
								<span class="reviewTitle">가격이 합리적이네요</span>
								<div class="ratingGroup">
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
									<i class="ratingStar activated"></i>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
			
			<div class="section fourthRowSect fp-auto-height" data-anchor="4">
				<div class="footerConGroup underSectionSort">
					<div class="titleBox">N-GUARD</div>
					<div class="footerMenuGroup">
						<a href="javascript:void(0);">BRAND</a>
						<a href="javascript:void(0);">SHOP</a>
						<a href="javascript:void(0);">SERVICE</a>
					</div>
					<div class="footerRightsGroup">
						<div>ⓒ 2020 . ALL RIGHTS RESERVED.</div>
						<div class="corpInfoBox">
							<div>이메일 : n-guard@naver.com</div>
							<div>서울시 마포구 마포대로 12 1109호</div>
						</div>
						<div class="callNumber">1588-1111</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

<script>
$(document).ready(function() {

	// :: ksg_20200504_1513 single 페이지 리프레쉬 시 첫번째 앵커로 이동.  (1) -> 다른 방식으로 적용하여 이것은 무력화 함. 
	// var anchors =[];
	// for(var i = 1; i<100; i++){
    // 	anchors.push(i.toString());
	// }


	$('.fullpageCover').fullpage({
		verticalCentered: false,	// :: 없으면 다소 난리가 남. (상단의 앱솔루트 헤드라인이 무력화 된다던가...)
		navigation : true,			// :: 우측에 플로트 되고, 누르면 해당 섹션으로 이동하는 버튼 생겨남. 
		anchors:['1', '2', '3', '4'],		// :: 각 섹션을 규정하는 내용. "data-anchor" 의 내용과 일치해야 한다.
		scrollOverflow: true,	// :: 길이가 긴 섹션은 자체적으로 스크롤이 가능하게 함.
		scrollOverflowOptions: {
			disablePointer: true,	// :: 마우스 드래그로 스크롤 되는 기능을 방지함.
		},
		// autoScrolling:false,


		// :: ksg_20200504_1513 single :  페이지 리프레쉬 시 첫번째 앵커로 이동. (2)  -> 다른 방식으로 적용하여 이것은 무력화 함. 
		// animateAnchor: parseInt( window.location.hash.replace('#', '') ) < 10

	});
});



// :: 페이지 새로고침 시 페이지 최상단이 표시되도록 하는 스크립트. (정확히는, 페이지 자체를 링크 걸어서 연결되도록 한 것임.)
window.onbeforeunload = function() { 
    window.setTimeout(function () { 
		window.location = '/nGuard/';
    }, 0); 
    window.onbeforeunload = null;
}


// :: 리뷰 리스트 숨기기/보이기 스크립트.
// $(document).on('click', '.listOpenBtn', function(){
// 	$('.listGroup.reviewListSort').slideToggle();
// });


</script>
