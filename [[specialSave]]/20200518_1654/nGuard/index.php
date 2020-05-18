<!DOCTYPE html>
<html>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/nGuard/common/pages/head.php';?>
<body>
<div class="container">
	<div class="contents">
		<div class="headLine pageTopSort">



			<div class="titleMenuGroup">
				<div class="titleBox">
					<a href="/nGuard/">
						<i class="logoImg"></i>
					</a>
				</div>
				<ul class="menuTab">
					<li>
						<a href="/nGuard/">HOME</a>
					</li>
					<li>
						<a href="/nGuard/product">SHOP</a>
					</li>
					<!-- <li>
						<a href="javascript:void(0);">SERVICE</a>
					</li> -->

<!-- :: ksg_20200517_1818 open : 햄버거 아이콘 -->
					<li class="mobileReveal">
						<a href="javascript:void(0);" class="hamBtn"></a>
					</li>
<!-- :: ksg_20200517_1818 close : 햄버거 아이콘 -->



				</ul>
				<!-- <div class="rightMenuBox underHeadlineSort">
					<a href="javascript:void(0);">로그인</a>
					<a href="javascript:void(0);">회원가입</a>
					<a href="javascript:void(0);">
						<i class="cartIcon"></i>
					</a>
				</div> -->
			</div>





		</div>
		<div class="fullpageCover">
		    <div class="section firstRowSect fp-auto-height" data-anchor="1">
				<div class="backImgBox">


					<!-- :: ksg_20200517_1818 single : 메인 이미지 변경. -->
					<img class="backgroundMainImg" src="/nGuard/common/img/img_backgroundMain_alt1.png"/>



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
							<a href="/nGuard/product/" class="textInfoBtn">제품 보러가기</a>
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
						<a href="/nGuard/">
							<i class="logoImg"></i>
						</a>
					</div>
					<div class="footerMenuGroup">
						<a href="/nGuard/">HOME</a>
						<a href="/nGuard/product">SHOP</a>
						<!-- <a href="javascript:void(0);">SERVICE</a> -->
					</div>
					<div class="footerRightsGroup">
						<div class="f_verdana">ⓒ 2020 . ALL RIGHTS RESERVED.</div>
						<div class="corpInfoBox">
							<div>
								<span>상호명 : (주) 코스린</span>
								<span class="ml10">대표 : 김우섭</span>
							</div>
							<div>사업자등록번호 : 658-81-00905</div>
							<div>이메일 : hclee8800@hanmail.net</div>
							<div>서울시 강남구 선릉로 818, 6층</div>
						</div>
						<div class="callNumber">070-8624-5678</div>
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

<script>
$(document).ready(function() {

	// :: ksg_20200504_1513 single 페이지 리프레쉬 시 첫번째 앵커로 이동.  (1) -> 다른 방식으로 적용하여 이것은 무력화 함. 
	// var anchors =[];
	// for(var i = 1; i<100; i++){
    // 	anchors.push(i.toString());
	// }


// :: ksg_20200517_1818 open -> if 기능을 통해 모바일에서는 터치(=마우스드래그)로 슬라이드 가능하게 함. 

	if($(window).width() > 450) {
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
				 
				 
				 // :: ksg_20200517_1818 open : 헤드라인 clearBG 관련 내용 제거 
				 if($('body').hasClass('fp-viewing-1')){
					
					// :: 최상단 챕터에 있을 때는 헤드라인에 백그라운드 색상이 들어가게 함. 
					// $('.headLine.pageTopSort').addClass('clearBG');		


					$('.fullpageCounter .currentPage').empty();
					$('.fullpageCounter .currentPage').append(
						'01'
					);
				} else if($('body').hasClass('fp-viewing-2')) {
					// $('.headLine.pageTopSort').removeClass('clearBG');
					$('.fullpageCounter .currentPage').empty();
					$('.fullpageCounter .currentPage').append(
						'02'
					);
				} else if($('body').hasClass('fp-viewing-3')) {
					// $('.headLine.pageTopSort').removeClass('clearBG');
					$('.fullpageCounter .currentPage').empty();
					$('.fullpageCounter .currentPage').append(
						'03'
					);
				} 
				else if($('body').hasClass('fp-viewing-4')) {
					// $('.headLine.pageTopSort').removeClass('clearBG');
					$('.fullpageCounter .currentPage').empty();
					$('.fullpageCounter .currentPage').append(
						'04'
					);
				};
				// :: ksg_20200517_1818 close : 헤드라인 clearBG 관련 내용 제거 
			}
			// autoScrolling:false,
			// :: ksg_20200504_1513 single :  페이지 리프레쉬 시 첫번째 앵커로 이동. (2)  -> 다른 방식으로 적용하여 이것은 무력화 함. 
			// animateAnchor: parseInt( window.location.hash.replace('#', '') ) < 10
		});
	} else if ($(window).width() < 451) {
		$('.fullpageCover').fullpage({
			verticalCentered: false,	// :: 없으면 다소 난리가 남. (상단의 앱솔루트 헤드라인이 무력화 된다던가...)
			navigation : true,			// :: 우측에 플로트 되고, 누르면 해당 섹션으로 이동하는 버튼 생겨남. 
			anchors:['1', '2', '3', '4'],		// :: 각 섹션을 규정하는 내용. "data-anchor" 의 내용과 일치해야 한다.
			scrollOverflow: true,	// :: 길이가 긴 섹션은 자체적으로 스크롤이 가능하게 함.
			scrollOverflowOptions: {
				disablePointer: false,	// :: 마우스 드래그로 스크롤 되는 기능을 방지함.
			},
			afterLoad: function(anchorLink, index){            // ::  페이지 번호를 우측 아래에 표시
   				var slideNumber = $('.fp-section.active').find('.fp-slide.active').index() + 1


				// :: ksg_20200517_1818 open : 모바일 헤드라인 clearBG 관련 내용 제거 
				 if($('body').hasClass('fp-viewing-1')){
					// :: 최상단 챕터에 있을 때는 헤드라인에 백그라운드 색상이 들어가게 함. 
					// $('.headLine.pageTopSort').addClass('clearBG');		
					$('.fullpageCounter .currentPage').empty();
					$('.fullpageCounter .currentPage').append(
						'01'
					);
				} else if($('body').hasClass('fp-viewing-2')) {
					// $('.headLine.pageTopSort').removeClass('clearBG');
					$('.fullpageCounter .currentPage').empty();
					$('.fullpageCounter .currentPage').append(
						'02'
					);
				} else if($('body').hasClass('fp-viewing-3')) {
					// $('.headLine.pageTopSort').removeClass('clearBG');
					$('.fullpageCounter .currentPage').empty();
					$('.fullpageCounter .currentPage').append(
						'03'
					);
				} 
				else if($('body').hasClass('fp-viewing-4')) {
					// $('.headLine.pageTopSort').removeClass('clearBG');
					$('.fullpageCounter .currentPage').empty();
					$('.fullpageCounter .currentPage').append(
						'04'
					);
				};
				// :: ksg_20200517_1818 close : 모바일 헤드라인 clearBG 관련 내용 제거 


			}
		});
	}
// :: ksg_20200517_1818 close



	
});


// :: 페이지 새로고침 시 페이지 최상단이 표시되도록 하는 스크립트. (정확히는, 페이지 자체를 링크 걸어서 연결되도록 한 것임.)
// :: 이 스크립트 때문에 다른 페이지로 링크 연결이 안 됨. 때문에 죽여놓음. 
// window.onbeforeunload = function() { 
//     window.setTimeout(function () { 
// 		window.location = '/nGuard/';
//     }, 0); 
//     window.onbeforeunload = null;
// }


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
</body>
</html>
