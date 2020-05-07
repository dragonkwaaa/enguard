<!DOCTYPE html>
<html>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/nGuard/common/pages/head.php';?>
<body>
<div class="container">
	<div class="contents">
		<div class="headLine pageTopSort">
			<div class="titleBox">
				<i class="logoImg"></i>
			</div>
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
		<div class="fullpageCover">
		    <div class="section firstRowSect fp-auto-height" data-anchor="1">
				<div class="backImgBox">
					<img class="backgroundMainImg" src="/nGuard/common/img/img_backgroundMain.png"/>
				</div>
			</div>
			<div class="section secondRowSect fp-auto-height" data-anchor="2">
				<div class="goodsInfoGroup underSectionSort">
					<div class="titleBox">PRODUCTS</div>
					<div class="infoCase">
						<img class="goodsImg devivedSort" src="/nGuard/common/img/img_maskBox2.png"/>
						<div class="infoTextGroup">
							<i class="logoImg"></i>
							<div class="fc_white fs26 mb40 fBold f_bebas">Hyper-Purifying Breathing Mask</div>
							<div class="fs40 fBoldEX lh40 mb40">엔가드 마스크</div>
							<div class="fs14 mb40 lh20">
								나노필터 사용으로 통기성 UP</br>
								사랑하는 모든 사람들을 위해</br>
								엔가드로 편안한 나날을 보내세요.
							</div>
							<a href="javascript:void(0);" class="textInfoBtn">제품 보러가기</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section thirdRowSect fp-auto-height" data-anchor="3">
				<div class="reviewTotalGroup underSectionSort">
					<a href="javascript:void(0);" class="listOpenBtn reviewListSort">
						<span class="fs30 mb10 fBold f_verdana">REVIEW</span>
						<span class="fs14 ml30">+ 더보기</span>
					</a>
					<div class="listGroup reviewSlideSort">
						<div class="sliderGroup customSlider">
							<div class="sliderCaseSingle">
								<a href="javascript:void(0);">
									<img src="/nGuard/common/img/img_reviewImg1.png" class="reviewImg"/>
									<div class="reviewTextGroup">
										<div class="ratingGroup">
											<i class="ratingStar activated"></i>
											<i class="ratingStar activated"></i>
											<i class="ratingStar activated"></i>
											<i class="ratingStar activated"></i>
											<i class="ratingStar activated"></i>
										</div>
										<div class="reviewTitle">엔가드 마스크 20매</div>
										<div class="reviewDate">2020.04.03</div>
										<div class="reviewSpec">좋은 가격에 잘 구매했네요~</div>
									</div>
								</a>
							</div>
							<div class="sliderCaseSingle">
								<a href="javascript:void(0);">
									<img src="/nGuard/common/img/img_reviewImg1.png" class="reviewImg"/>
									<div class="reviewTextGroup">
										<div class="ratingGroup">
											<i class="ratingStar activated"></i>
											<i class="ratingStar activated"></i>
											<i class="ratingStar activated"></i>
											<i class="ratingStar activated"></i>
											<i class="ratingStar activated"></i>
										</div>
										<div class="reviewTitle">엔가드 마스크 10매</div>
										<div class="reviewDate">2020.04.03</div>
										<div class="reviewSpec">좋아요~</div>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section fourthRowSect fp-auto-height" data-anchor="4">
				<div class="footerConGroup underSectionSort">
					<div class="titleBox">
						<i class="logoImg"></i>
					</div>
					<div class="footerMenuGroup">
						<a href="javascript:void(0);">BRAND</a>
						<a href="javascript:void(0);">SHOP</a>
						<a href="javascript:void(0);">SERVICE</a>
					</div>
					<div class="footerRightsGroup">
						<div class="f_verdana">ⓒ 2020 . ALL RIGHTS RESERVED.</div>
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
<div class="fullpageCounter">
	<div class="currentPage">01</div>
	<div class="totalPage">04</div>
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
		afterLoad: function(anchorLink, index){            // ::  페이지 번호를 우측 아래에 표시
   			var slideNumber = $('.fp-section.active').find('.fp-slide.active').index() + 1
			 if($('body').hasClass('fp-viewing-1')){
				$('.headLine.pageTopSort').addClass('clearBG');		// :: 최상단 챕터에 있을 때는 헤드라인에 백그라운드 색상이 들어가게 함. 
				$('.fullpageCounter .currentPage').empty();
				$('.fullpageCounter .currentPage').append(
					'01'
				);
			} else if($('body').hasClass('fp-viewing-2')) {
				$('.headLine.pageTopSort').removeClass('clearBG');
				$('.fullpageCounter .currentPage').empty();
				$('.fullpageCounter .currentPage').append(
					'02'
				);
			} else if($('body').hasClass('fp-viewing-3')) {
				$('.headLine.pageTopSort').removeClass('clearBG');
				$('.fullpageCounter .currentPage').empty();
				$('.fullpageCounter .currentPage').append(
					'03'
				);
			} else if($('body').hasClass('fp-viewing-4')) {
				$('.headLine.pageTopSort').removeClass('clearBG');
				$('.fullpageCounter .currentPage').empty();
				$('.fullpageCounter .currentPage').append(
					'04'
				);
			};
		}

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


// 리뷰 슬라이드
$('.sliderGroup.customSlider').slick({
	dots:true,
	prevArrow:false,
	nextArrow:false,
	autoplay : true,
	autoplaySpeed : 4000,
	// dotsClass:'mainBannerDots'
});

</script>
