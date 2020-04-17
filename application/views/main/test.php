<?php
/**
 * Created by PhpStorm.
 * User: TaraRND
 * Date: 2019-08-16
 * Time: 오전 10:34
 */
//Check Mobile
$mAgent = array("iPhone","iPod","Android","Blackberry",
    "Opera Mini", "Windows ce", "Nokia", "sony" );
$inflow_device = "PC";
for($i=0; $i<sizeof($mAgent); $i++){
    if(stripos( $_SERVER['HTTP_USER_AGENT'], $mAgent[$i] )){
        $inflow_device = "모바일";
        break;
    }
}

$scroll_stick_delay = 0;
?>

<script>
	// init controller
	var controller = new ScrollMagic.Controller();
</script>

<style>
    a#topBtn { color:#f4f4f4;text-decoration:underline;}

    .wave_header {position:relative;background: #0b0c11; /*linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);*/color:white;}
    /*.logo {width:50px;fill:white;padding-right:15px;display:inline-block;vertical-align: middle;}*/
    .inner-header {height:85vh;width:100%;margin: 0;padding: 0;}
    .flex { /*display: flex;*/justify-content: center;align-items: center;text-align: center;}
    .waves {position:relative;width: 100%;height:15vh;margin-bottom:-7px; /*Fix for safari gap*/min-height:100px;max-height:150px;}
    /*.content {position:relative;height:20vh;text-align:center;background-color: white;} */
    @media (max-width:699px){.inner-header{height:70vh;}}
    @media (min-width:700px) and (max-width:999px){.inner-header{height:80vh;}}


    /* Animation */
    .parallax > use {
        animation: move-forever 25s cubic-bezier(.55,.5,.45,.5) infinite;}
    .parallax > use:nth-child(1) {
        animation-delay: -2s;
        animation-duration: 7s;}
    .parallax > use:nth-child(2) {
        animation-delay: -3s;
        animation-duration: 10s;}
    .parallax > use:nth-child(3) {
        animation-delay: -4s;
        animation-duration: 13s;}
    .parallax > use:nth-child(4) {
        animation-delay: -5s;
        animation-duration: 20s;}
    @keyframes move-forever {
        0% {   transform: translate3d(-90px,0,0);  }
        50% {   transform: translate3d(-90px,0,0);  }
        100% {     transform: translate3d(85px,0,0);  }
    }
    /*Shrinking for mobile*/
    @media (max-width: 768px) {
        .waves {    height:40px;    min-height:40px;  }
        .content {    height:30vh;  }
    }
    .cursor-on{cursor:pointer;}
    .the-height-400vh-section {
        position: relative;
        display: flex;
        height: 400vh;
        margin-left: 0px;
        justify-content: center;
        align-items: center;
        border-top: 60px none rgba(36, 36, 36, 0.09);
        background-color: #fff;
    }
	.scrollmagic-pin-spacer{overflow:hidden;}
    /*
    임시
    */
    .u-text {
        opacity:1;
    }
    #cd-vertical-nav {
        position:fixed;
        top:300px;
        right:0;
        z-index:100;
    }
    section {
        height:2200px;overflow:hidden;
    } 

</style>


<!-- vertical navi -->
<nav id="cd-vertical-nav" style="display:none;">
    <ul>
        <li>
            <a onclick="scroll_to('section1')" name="section" id="section1_navi" data-number="1">
                <span class="cd-dot"></span>
                <span class="cd-label">intro</span>
            </a>
        </li>
        <li>
            <a onclick="scroll_to('section2')" name="section" id="section2_navi" data-number="2">
                <span class="cd-dot"></span>
                <span class="cd-label">pmservice</span>
            </a>
        </li>
        <li>
            <a onclick="scroll_to('section3')" name="section" id="section3_navi" data-number="3">
                <span class="cd-dot"></span>
                <span class="cd-label">about</span>
            </a>
        </li>
        <li>
            <a onclick="scroll_to('section4')" name="section" id="section4_navi" data-number="4">
                <span class="cd-dot"></span>
                <span class="cd-label">service</span>
            </a>
        </li>
        <li>
            <a onclick="scroll_to('section5')" name="section" id="section5_navi" data-number="5">
                <span class="cd-dot"></span>
                <span class="cd-label">stories of success</span>
            </a>
        </li>
        <li>
            <a onclick="scroll_to('section6')" name="section" id="section6_navi" data-number="6">
                <span class="cd-dot"></span>
                <span class="cd-label">contact</span>
            </a>
        </li>
        <li>
            <a onclick="scroll_to('section7')" name="section" id="section7_navi" data-number="7">
                <span class="cd-dot"></span>
                <span class="cd-label">blog</span>
            </a>
        </li>
    </ul>
</nav>
<!-- //vertical-navi -->
<div class="vertical-text">PM SERVICE</div>
<div class="o-scroll" id="js-scroll">

    <div data-scroll-to>
        <!-- CSS Waves-->
        <div class="wave_header cd-section" data-scroll-section id="section1">

            <!-- header -->
            <div class="o-container">
                <header class="c-header" id="header">
                    <div class="c-header_heading" data-scroll data-scroll-speed="-8" data-scroll-position="top" data-scroll-target="#header">
                        <div class="o-layout">
                            <div class="o-layout_item u-1/2" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2" data-scroll-position="top" data-scroll-target="#header">
										<span class="u-label c-header_heading_label">
											<a class="cursor-on" onClick="window.open('http://www.tara.co.kr/')">
												<img src="/assets/img/common/tara_logo.png" alt="tara logo" />
											</a>
										</span>
                            </div>
                            <div class="o-layout_item u-1/2" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2" data-scroll-position="top" data-scroll-target="#header">
                                <!--<div class="u-text-right">
                                    <p class="u-label c-header_heading_label">
                                        menu
                                    </p>
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <h3 class="c-header_title o-h3" data-scroll>
								<span class="c-header_title_line u-text-center">
									<span data-scroll data-scroll-speed="3" data-scroll-position="top">
										구매비용의 <span class="tc1" data-scroll data-scroll-delay="0.13" data-scroll-speed="0.1">2.6%</span>를<span class="dis-block"></span> 차지하는 <span class="tc1" data-scroll data-scroll-delay="0.13" data-scroll-speed="0.1">인쇄제작물</span><span class="tc5" data-scroll data-scroll-delay="0.13" data-scroll-speed="0.1">에</span>
									</span>
								</span>
                        <span class="c-header_title_line u-text-center">
									<span data-scroll data-scroll-speed="3" data-scroll-position="top">
										<span class="tc1" data-scroll data-scroll-delay="0.13" data-scroll-speed="0.1">60%</span>의 <span class="tc1" data-scroll data-scroll-delay="0.13" data-scroll-speed="0.1">업무 시간</span><span class="tc5" data-scroll data-scroll-delay="0.13" data-scroll-speed="0.1">을</span></span><span class="dis-block"></span>  <span class="tc1" data-scroll data-scroll-speed="2" data-scroll-position="top" data-scroll-delay="0.05"><div class="dot">낭</div></span><span class="tc1" data-scroll data-scroll-speed="3" data-scroll-position="top" data-scroll-delay="0.05"><div class="dot">비</div></span>하시겠습니까?
									</span>
                        </span>
                    </h3>
                    <div class="header_bg" data-scroll data-scroll-delay="0.05" data-scroll-speed="0">
                        <div class="u-text-center" data-scroll data-scroll-delay="0.05" data-scroll-speed="1">
                            <div class="paper_img" data-scroll>
                                <img class="" src="/assets/img/illust2.png" alt="">
                            </div>
                        </div>
                        <!--<span class="c-speed-block_bubble2" data-scroll data-scroll-speed="-2" data-scroll-repeat>
                            <img class="" src="/assets/img/illust2.png" alt="">
                        </span>-->
                    </div>
                </header>
            </div>
            <!-- // header -->
            <a href="#" class="cd-scroll-down cd-img-replace">scroll down</a>


            <div class="inner-header flex">

                <path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
                <g><path fill="#fff"
                         d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
						C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
						c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
                </g>
                </svg>


                <div></div>
            </div>

            <div style="margin-top:-100px;">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                     viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(247,247,247,0.7" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(247,247,247,0.5)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(247,247,247,0.3)" />
                        <use xlink:href="#gentle-wave" x="48" y="7" fill="#f7f7f7" />
                    </g>
                </svg>
            </div>
            <!--Waves end-->

            <!--</div>
            Content ends-->
        </div>





        <section class="c-section cd-section" data-scroll-section id="section2">
            <div class="o-container">
                <div class="c-cta2">
                    <div class="c-cta_content">
                        <div class="o-layout -gutter">
                            <div class="o-layout_item u-1/3@from-medium">
                                <p class="u-label">
									
                                </p>
                            </div>
                            <div class="o-layout_item u-2/3@from-medium" data-scroll data-scroll-sticky data-scroll-target="#section2">
                                <div class="c-cta_section" id="reveal-elements">
                                    <div class="c-cta_line2" data-scroll>
                                        <h2 class="o-h2 digit">
                                            PM SERVICE
                                        </h2>
                                    </div>
                                    <div class="c-cta_content_text" data-scroll>
                                        <p class="digit">
                                            가시적인 직접비 절감과 경영 투명성 확보를 위한 기반 마련,<span class="un-block"></span>
                                            프로세스 단순화를 통한 핵심업무 역량 집중까지.<br />
                                            PM서비스는 비즈니스의 성장을 가속화합니다.
                                        </p>
                                        <a class="a-btn cursor-on digit" onClick="window.open('/request')">
                                            <svg class="icon-arrow before">
                                                <use xlink:href="#arrow"></use>
                                            </svg>
                                            <span class="label">CONTACT US</span>
                                            <svg class="icon-arrow after">
                                                <use xlink:href="#arrow"></use>
                                            </svg>
                                        </a>
                                        <svg style="display: none;">
                                            <defs>
                                                <symbol id="arrow" viewBox="0 0 35 15">
                                                    <title>Arrow</title>
                                                    <path d="M27.172 5L25 2.828 27.828 0 34.9 7.071l-7.07 7.071L25 11.314 27.314 9H0V5h27.172z "/>
                                                </symbol>
                                            </defs>
                                        </svg>
                                    </div>

                                </div>

                            </div>
                            <div style="height:<?=$scroll_stick_delay?>px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="c-section fixed-bg cd-section" data-scroll-section data-persistent id="section3">
            <div class="o-container" id="fixed-elements">
                <div class="o-layout" id="reveal-elements">
                    <div class="o-layout_item u-2/5@from-medium digit">
                        <div class="c-section_infos -padding" data-scroll data-scroll-sticky data-scroll-target="#section3">
                            <div class="" data-scroll data-scroll-offset="200">
                                <div class="tc3 digit" data-scroll-to>
                                </div>
                                <div class="c-sections_infos_text u-text digit" data-scroll-to>
                                    <p>
                                        기업 내 인쇄제작물 비용은<br />
                                        약 2.6%로 비용절감 관리의<br />
                                        사각지대에 있습니다.
                                    </p>
                                </div>
                                <div class="tc4 digit" data-scroll-to>
                                </div>
                            </div>
                        </div>
                        <div style="height:<?=$scroll_stick_delay?>px;"></div>
                    </div>
                    <div class="o-layout_item u-3/5@from-medium digit">
                        <div class="c-fixed_wrapper" data-scroll data-scroll-repeat>
                            <div class="c-fixed_target" id="fixed-target"></div>
                            <div class="c-fixed graph1"  data-scroll data-scroll-sticky data-scroll-target="#fixed-target" style=""></div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="c-section fixed-bg1" data-scroll-section data-persistent id="section3_2">
            <div class="o-container" id="fixed-elements2">
                <div class="o-layout" id="reveal-elements">
                    <div class="o-layout_item u-2/5@from-medium digit">
                        <div class="c-section_infos" data-scroll data-scroll-sticky data-scroll-target="#section3_2">
                            <div class="c-section_infos_inner" data-scroll data-scroll-offset="500">
                                <div class="tc3 digit" data-scroll-to>
                                </div>
                                <div class="c-sections_infos_text u-text digit" data-scroll-to>
                                    <p>
                                        게다가 2.6%의 낮은<br />
                                        구매비용에 비해 60%의<br />
                                        업무시간이 낭비되고 있어<br />
                                        업무 비효율 및 간접비 부담이<br />
                                        증가하고 있습니다.
                                    </p>
                                </div>
                                <div class="tc4 digit" data-scroll-to>
                                </div>
                            </div>
                        </div>
                        <div style="height:<?=$scroll_stick_delay?>px;"></div>
                    </div>
                    <div class="o-layout_item u-3/5@from-medium digit">
                        <div class="c-fixed_wrapper digit" data-scroll data-scroll-repeat>
                            <div class="c-fixed_target" id="fixed-target2"></div>
                            <div class="c-fixed graph2" data-scroll data-scroll-sticky data-scroll-target="#fixed-target2" style=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="fixed-bg2 cd-section" data-scroll-section id="section4">
            <div class="o-container" id="lerp-effect" data-scroll data-scroll-sticky data-scroll-target="#section4">
                <div class="o-layout -top">
                    <div class="o-layout_item u-2/5@from-medium">

                    </div>
                    <div class="o-layout_item u-3/5@from-medium">
                        <div class="u-text-right" data-scroll >
                            <!--<span class="c-lerp-block_index" data-scroll data-scroll-delay="0.2" data-scroll-speed="6" data-scroll-repeat>
                                01
                            </span>-->
                            <div class="c-lerp-block_title spacer s0" data-scroll data-scroll-speed="2.5" id="trigger2">
                                <h2 class="o-h2 tc2" id="reveal2">
                                    OUR SERVICE
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="o-layout -gutter" id="reveal-elements">
                        <div class="o-layout_item u-1/3@from-medium digit">
                            <div class="c-speed-block" data-scroll data-scroll-speed="2">
                                <div class="o-image_wrapper" data-scroll data-scroll-repeat>
                                    <div class="o-image" data-scroll data-scroll-speed="-0.5">
                                        <img class="c-speed-block_image" src="/assets/img/service_img1.jpg" alt="">
                                    </div>
                                </div>
                                <span class="c-speed-block_bubble -right -top text-stroke backdrop" data-scroll data-scroll-speed="-1" data-scroll-repeat >
										01
									</span>
                                <ul class="c-summary_list">
                                    <li class="c-summary_list_item" data-scroll>
                                        직간접 비용을<span class="un-block"></span> 획기적으로 절감해드립니다.
                                    </li>
                                    <li class="c-summary_list_item2" data-scroll>
                                        Tara의 폭넓은 협력업체 Pool을 활용해 직접비를 절감하고, 인쇄전문가 End-to-End 서비스를 제공하여 비부가가치 업무에 대한 부담을 줄일 수 있습니다.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="o-layout_item u-1/3@from-medium digit">
                            <div class="c-speed-block -margin" data-scroll data-scroll-delay="0.2" data-scroll-speed="1">
                                <div class="o-image_wrapper" data-scroll data-scroll-repeat>
                                    <div class="o-image" data-scroll data-scroll-speed="-1">
                                        <img class="c-speed-block_image" src="/assets/img/service_img2.jpg" alt="">
                                    </div>
                                </div>
                                <span class="c-speed-block_bubble -right -top text-stroke backdrop" data-scroll data-scroll-speed="-1" data-scroll-repeat>
										02
									</span>
                                <ul class="c-summary_list">
                                    <li class="c-summary_list_item" data-scroll>
                                        고객사 특화 운영 모델
                                    </li>
                                    <li class="c-summary_list_item2" data-scroll>
                                        사전실사를 통해 고객사의 주요 인쇄제작물 및 프로세스를 검토하여 고객사별 맞춤형 서비스를 제공합니다.

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="o-layout_item u-1/3@from-medium digit">
                            <div class="c-speed-block" data-scroll data-scroll-delay="0.4" data-scroll-speed="3">
                                <div class="o-image_wrapper" data-scroll data-scroll-repeat>
                                    <div class="o-image" data-scroll data-scroll-speed="-1.5">
                                        <img class="c-speed-block_image" src="/assets/img/service_img3.jpg" alt="">
                                    </div>
                                </div>
                                <span class="c-speed-block_bubble -right -top text-stroke backdrop" data-scroll data-scroll-speed="-1" data-scroll-repeat>
										03
									</span>
                                <ul class="c-summary_list">
                                    <li class="c-summary_list_item" data-scroll>
                                        SLA 지표 관리
                                    </li>
                                    <li class="c-summary_list_item2" data-scroll>
                                        사전실사를 통해 고객사와 합의된 SLA 지표를 관리하고, 정기보고를 통해 고객사의 Value를 극대화할 수 있도록 합니다.

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height:<?=$scroll_stick_delay?>px;"></div>
        </section>

        <section class="d-section cd-section fixed-bg3" data-scroll-section id="section5">
            <div class="o-container" data-scroll data-scroll-sticky data-scroll-target="#section5">
                <div class="o-layout -gutter">
                    <div class="o-layout_item">

                    </div>
                    <div class="c-direction-block" data-scroll-delay="0.2" data-scroll-speed="-1">
                        <div class="c-direction-block_item">
                            <div class="o-layout_item ">
                                <div class="u-text-left spacer s0" data-scroll data-scroll-speed="-1" id="trigger2_1">
                                    <h2 class="o-h2 tc2" id="reveal2_1">
                                        STORIES OF SUCCESS
                                    </h2>
                                </div>
                            </div>
                            <div class="block_bg">
                                <div class="demo-wrap" data-scroll>
                                    <ul id="slider1">
                                        <li>
                                            <div class="right">
                                                <div class="band">글로벌 명품 브랜드 A는 각국 지사에 인쇄제작물 가이드를 배포하고 있지만,<span class="un-block"></span>
                                                    각 나라별로 수급할 수 있는 원자재가 제한적이고 생산 환경이 상이하여 엄청난 시간과 비용이 소요됐다. <span class="un-block"></span>
                                                    A는 현지 제작업체 데이터베이스를 보유하고 있는 PM서비스 업체의 사전 진단 컨설팅을 통해 <span class="un-block"></span>
                                                    비용, 서플라이어 및 업무 프로세스를 분석 후 전담팀을 구성하였다. <br />
                                                    그 결과, 20%이상의 직간접 비용을 절감하였고, <span class="un-block"></span>
                                                    캠페인 실행시간은 30%이상 단축되면서 본연의 핵심 업무에 집중할 수 있게 되었다.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="right">
                                                <div class="band">종합 호텔 기업 B는 회원에게 발송하는 DM이 검증되지 않은 여러 생산 업체와 공정을 거치면서 <span class="un-block"></span>
                                                    보안 이슈 발생 우려와 진행 과정 및 후속 처리가 신속하고 투명하게 추적되지 않는 문제점이 있었다. <span class="un-block"></span>
                                                    B는 IT시스템을 기반으로 통합 관리가 가능한 PM서비스 업체를 통해 회원 DB 및 전체 프로세스 관리를 강화하였다.<br />
                                                    그 결과, DM발주 관련 업무 소요시간도 약 30% 단축되었고, <span class="un-block"></span>
                                                    DM 중복 발송으로 인한 비용 낭비요소도 급감하였다.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="right">
                                                <div class="band">국내 게임업체 C는 전시회에 사용할 신규 판촉물을 기획하였으나 가격 적정성을 검토하고, <span class="un-block"></span>
                                                    제작업체 선정을 담당할 인원 및 시간이 부족했다. C는 PM서비스 업체에 신규 판촉물 제작을 의뢰하였다.<br />
                                                    PM서비스 업체의 전문인력은 우수한 해외기업을 직접 발굴 및 소싱하였고 <span class="un-block"></span>
                                                    그 결과, 타사품 대비 약 38%의 제작 비용을 절감할 수 있었다.</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height:<?=$scroll_stick_delay?>px;"></div>
        </section>

        <section class="c-section cd-section fixed-bg4" data-scroll-section id="section6">
            <div class="o-container" data-scroll data-scroll-sticky data-scroll-target="#section6">
                <div class="c-cta2">
                    <div class="c-cta_content">
                        <div class="o-layout -gutter">
                            <div class="o-layout_item u-1/3@from-medium">
                                <p class="u-label">

                                </p>
                            </div>
                            <div class="o-layout_item u-2/3@from-medium">
                                <div class="c-cta_section" id="reveal-elements">
                                    <div class="c-cta_line2" data-scroll  data-scroll-delay="0.04">
                                        <h2 class="o-h2 digit">
                                            무엇이든<br />물어보세요!
                                        </h2>
                                    </div>
                                    <div class="c-cta_content_text" data-scroll  data-scroll-delay="0.06">
                                        <p class="digit">
                                            PM서비스 소개부터 기업 맞춤 전문 컨설팅까지 <span class="un-block"></span>
                                            타라의 전문가들이 친절히 상담해 드립니다.
                                        </p>
                                        <a class="a-btn cursor-on digit" onClick="window.open('/request')">
                                            <svg class="icon-arrow before">
                                                <use xlink:href="#arrow"></use>
                                            </svg>
                                            <span class="label">CONTACT US</span>
                                            <svg class="icon-arrow after">
                                                <use xlink:href="#arrow"></use>
                                            </svg>
                                        </a>
                                        <svg style="display: none;">
                                            <defs>
                                                <symbol id="arrow" viewBox="0 0 35 15">
                                                    <title>Arrow</title>
                                                    <path d="M27.172 5L25 2.828 27.828 0 34.9 7.071l-7.07 7.071L25 11.314 27.314 9H0V5h27.172z "/>
                                                </symbol>
                                            </defs>
                                        </svg>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="height:<?=$scroll_stick_delay?>px;"></div>
        </section>

        <section class="c-section cd-section" data-scroll-section id="section7">
            <div class="o-container" data-scroll data-scroll-sticky data-scroll-target="#section7">
                <div class="c-cta_content">
                    <div class="o-layout">
                        <div class="o-layout_item u-1/3@from-medium">
                            <p class="u-label">

                            </p>
                        </div>
                        <div class="o-layout_item u-2/3@from-medium">
                            <div class="spacer s0" data-scroll  data-scroll-speed="1" id="trigger2_2">
                                <h2 class="o-h2" id="reveal2_2">
                                    PM SERVICE<br />자세히 알아보기
                                </h2>
                            </div>
                        </div>
                    </div>





                    <div class="c-cta_content">
                        <div class="o-layout -top" id="reveal-elements">
                            <div class="o-layout_item u-1/3@from-medium digit">
                                <div class="c-box" data-scroll data-scroll-delay="0.06" data-scroll-speed="0" onClick="window.open('https://blog.naver.com/pm-service/221660116337')">
                                    <div class="c-box-span" data-scroll>
                                        <div class="c-box-image-wrap digit"><img src="/assets/img/more_icon1.png" alt="" class="c-box-image"/></div>
                                        <div class="overlay"><img src="/assets/img/plus_icon.png" alt="" /></div>
                                        <div class="c-sections_infos_text2 digit" data-scroll>
                                            <p>
                                                기업의 생산성 향상과 업무효율성 <span class="un-block"></span>
                                                개선을 위한 필수 점검사항!
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="o-layout_item u-1/3@from-medium digit">
                                <div class="c-box" data-scroll data-scroll-delay="0.06" data-scroll-speed="0" onClick="window.open('https://blog.naver.com/pm-service/221664598870')">
                                    <div class="c-box-span" data-scroll>
                                        <div class="c-box-image-wrap digit"><img src="/assets/img/more_icon2.png" alt="" class="c-box-image" /></div>
                                        <div class="overlay"><img src="/assets/img/plus_icon.png" alt="" /></div>
                                        <div class="c-sections_infos_text2 digit" data-scroll>
                                            <p>
                                                마케팅 비용절감 활동을 성공으로 <span class="un-block"></span>
                                                이끄는 핵심 노하우
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-layout_item u-1/3@from-medium digit">
                                <div class="c-box" data-scroll data-scroll-delay="0.06" data-scroll-speed="0" onClick="window.open('https://blog.naver.com/pm-service/221671913161')">
                                    <div class="c-box-span" data-scroll>
                                        <div class="c-box-image-wrap digit"><img src="/assets/img/more_icon3.png" alt="" class="c-box-image" /></div>
                                        <div class="overlay"><img src="/assets/img/plus_icon.png" alt="" /></div>
                                        <div class="c-sections_infos_text2 digit" data-scroll>
                                            <p>
                                                진정한 구매혁신은 비MRO 품목의 <span class="un-block"></span>
                                                아웃소싱으로부터 시작된다.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="o-layout_item u-1/3@from-medium digit">
                                <p class="u-label">

                                </p>
                            </div>
                            <div class="o-layout_item u-2/3@from-medium digit">
                                <div class="c-cta_content_text" data-scroll>
                                    <a class="a-btn cursor-on" onClick="window.open('https://blog.naver.com/pm-service')" data-scroll-to>
                                        <svg class="icon-arrow before">
                                            <use xlink:href="#arrow"></use>
                                        </svg>
                                        <span class="label">READ MORE</span>
                                        <svg class="icon-arrow after">
                                            <use xlink:href="#arrow"></use>
                                        </svg>
                                    </a>
                                    <svg style="display: none;">
                                        <defs>
                                            <symbol id="arrow" viewBox="0 0 35 15">
                                                <title>Arrow</title>
                                                <path d="M27.172 5L25 2.828 27.828 0 34.9 7.071l-7.07 7.071L25 11.314 27.314 9H0V5h27.172z "/>
                                            </symbol>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div style="height:<?=$scroll_stick_delay?>px;"></div>
    </div>
    </section>

    <script>
        $(function () { // wait for document ready
            // init
            var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: "200%"}});

            // get all slides
            var slides = document.querySelectorAll("section");

            // create scene for every slide
            for (var i=0; i<slides.length; i++) {
                new ScrollMagic.Scene({
                    triggerHook: 'onLeave',
                    triggerElement: slides[i]
                })
                    .setPin(slides[i], {pushFollowers: false})
                    // .addIndicators() add indicators (requires plugin)
                    .addTo(controller);
            }

            // build scenes
            new ScrollMagic.Scene({triggerElement: "#parallax1", triggerHook: 'onEnter'})
                .setTween("#parallax1 > div", {y: "80%", ease: Linear.easeNone})
                //.addIndicators()
                .addTo(controller);

            new ScrollMagic.Scene({triggerElement: "#parallax2", triggerHook: 'onEnter'})
                .setTween("#parallax2 > div", {y: "80%", ease: Linear.easeNone})
                //.addIndicators()
                .addTo(controller);

            new ScrollMagic.Scene({triggerElement: "#parallax3", triggerHook: 'onEnter'})
                .setTween("#parallax3 > div", {y: "80%", ease: Linear.easeNone})
                //.addIndicators()
                .addTo(controller);
        });
    </script>

	<script>

	// build scenes
		var revealElements = document.getElementsByClassName("digit");
		for (var i=0; i<revealElements.length; i++) { // create a scene for each element
			new ScrollMagic.Scene({
				triggerElement: revealElements[i], // y value not modified, so we can use element as trigger as well
				offset: 50,												 // start a little later
				triggerHook: 0.9,
			})
			.setClassToggle(revealElements[i], "visible") // add class toggle
			//.addIndicators({name: "digit " + (i+1) })  add indicators (requires plugin)
			.addTo(controller);
		}


			// build scene
			new ScrollMagic.Scene({
				triggerElement: "#trigger2",
				triggerHook: 0.9,
				offset: 50, // move trigger to center of element
				reverse: false // only do once
			})
			.setClassToggle("#reveal2", "visible") // add class toggle
			//.addIndicators()  add indicators (requires plugin)
			.addTo(controller);

			// build scene
			new ScrollMagic.Scene({
				triggerElement: "#trigger2_1",
				triggerHook: 0.9,
				offset: 50, // move trigger to center of element
				reverse: false // only do once
			})
			.setClassToggle("#reveal2_1", "visible") // add class toggle
			//.addIndicators()  add indicators (requires plugin)
			.addTo(controller);

			// build scene
			new ScrollMagic.Scene({
				triggerElement: "#trigger2_2",
				triggerHook: 0.9,
				offset: 50, // move trigger to center of element
				reverse: false // only do once
			})
			.setClassToggle("#reveal2_2", "visible") // add class toggle
			//.addIndicators()  add indicators (requires plugin)
			.addTo(controller);
	</script>