<?php
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

$description = "기업의 본원적 경쟁력 향상에 기여하는 인쇄제작물 통합 관리 솔루션
PMS (Print project Management Service)";
?>
<!DOCTYPE html>
<html class="is-smooth-scroll-compatible is-loading" lang="ko">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-163483391-1"></script>
    <script>
        var device = "<?=$inflow_device?>";

        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        //gtag('config', 'UA-163483391-1', { 'optimize_id': 'GTM-5KCL6SM'});
        gtag('config', 'UA-163483391-1');
    </script>

    <!-- Anti-flicker snippet (recommended)  -->
    <style>.async-hide { opacity: 0 !important} </style>
    <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
            h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
            (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
        })(window,document.documentElement,'async-hide','dataLayer',2000,
            {'OPT_CONTAINER_ID':true});</script>

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="google-site-verification" content="SD58jXlU2VrjcPTytEozTYjsWsvT7h9xCPwGBa4DSnc" />
    <meta name="naver-site-verification" content="8ed91dc5d1b5cbbcd5520c2f15a494263b603748" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->

    <title>PM 서비스</title>
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="http://tarapms.com">
    <meta name="description" content="<?=$description?>">
    <meta name="keywords" content="PM 서비스,인쇄,PM,대행">

    <meta name="instagram:site" content="http://tarapms.com">
    <meta name="instagram:url" content="http://tarapms.com">

    <meta property="og:type" content="website">
    <meta property="og:title" content="PM 서비스">
    <meta property="og:description" content="<?=$description?>">
    <meta property="og:image" content="http://tarapms.com/assets/img/common/link_img.png">
    <meta property="og:url" content="http://tarapms.com">

    <!-- Chrome, Safari, IE -->
    <link rel="shortcut icon" href="/assets/img/common/favicon.ico" type="image/x-icon">
    <!-- Firefox, Opera (Chrome and Safari say thanks but no thanks) -->
    <link rel="icon" href="/assets/img/common/favicon.png" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:700&display=swap" rel="stylesheet">
	<link href="/assets/css/main.css?<?=time()?>" rel="stylesheet" />
	<!--<link href="/assets/css/font.css" rel="stylesheet" />-->

    <!-- Validation CSS -->
    <link href="/assets/css/validationEngine.jquery.css" rel="stylesheet" />

    <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- jQuery UI -->
    <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" />
    <!-- <link href="/assets/css/jquery-ui.min.css" rel="stylesheet" /> -->
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- <script src="/assets/js/jquery-ui.min.js"></script> -->

    <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap-dialog.min.js"></script>
    <script src="/assets/js/bootstrap-datepicker.js"></script>

    <!-- jQuery Form & validate -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
    <!-- <script src="//oss.maxcdn.com/jquery.form/3.50/jquery.form.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>

    <!-- 이미지 스와이프 -->
    <script src="/assets/js/swiper.js?<?=time()?>"></script>
    <link rel="stylesheet" href="/assets/css/swiper.css?<?=time()?>">

    <script src="/assets/js/pmpremium.js?<?=time()?>"></script>

    <!-- vertical-navi -->
    <script src="/assets/js/verticalnavi.js"></script>

    <!-- text slider -->
    <script src="/assets/js/jquery.DG_Slider.min.js" type="text/javascript"></script>

    <!-- 개발버전, 도움되는 콘솔 경고를 포함. -->
    <script src="/assets/js/gsap.min.js?<?=time()?>"></script>
    <script src="/assets/js/ScrollMagic.js?<?=time()?>"></script>
    <script src="/assets/js/animation.gsap.js?<?=time()?>"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

    <!-- fullpage.js -->
<!--    <script src="/assets/js/jquery.fullpage.extensions.min.js"></script>-->
    <script src="/assets/js/fullpage.js?<?=time()?>"></script>
        <link rel="stylesheet" href="/assets/css/fullpage.css?<?=time()?>">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.10.1/lodash.min.js"></script>
    <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
    <script type="text/javascript">
        if(!wcs_add) var wcs_add = {};
        wcs_add["wa"] = "571d7b5c34ff70";
        wcs_do();
    </script>
    <script type="application/ld+json">
        {
         "@context": "https://schema.org",
         "@type": "Person",
         "name": "PMS 프리미엄",
         "url": "http://tarapms.com/",
         "sameAs": [
             "https://www.instagram.com/tarapms"
         ]
        }
        </script>
    <script>
        var locomotive_scroll, global_section_top = [];
    </script>
<style>
	/* Popup box BEGIN */
	.hover_bkgr_fricc{background:rgba(0,0,0,.4);cursor:pointer;display:none;height:100%;position:fixed;text-align:center;top:0;left:0;width:100%;z-index:10000;}
	.hover_bkgr_fricc .helper{display:inline-block;height:100%;vertical-align:middle;}
	.hover_bkgr_fricc > div {background-color: #fff;box-shadow: 10px 10px 60px #555;display: inline-block;height: auto;max-width: 551px;
	min-height: 100px;vertical-align: middle;width: 80%;position: relative;border-radius: 8px;/*padding: 15px 5%;*/}
	.popupCloseButton {background-color: #fff;border: 3px solid #999;border-radius: 50px;cursor: pointer;display: inline-block;font-family: arial;font-weight: bold;
	position: absolute;top: -20px;right: -20px;font-size: 25px;line-height: 30px;width: 30px;height: 30px;text-align: center;}
	.popupCloseButton:hover {background-color: #ccc;}
	.trigger_popup_fricc {cursor: pointer;font-size: 13px;margin: 7px 7px 7px 10px;display: inline-block;font-weight: bold;color:#404040;}
	.trigger_popup_fricc:hover{color:#000;}
	/* Popup box BEGIN */
	.agree1-box {border-radius: 5px;padding: 15px 10px 15px 15px;}
	.agree1-box .agree1-content {box-sizing: border-box;height: 400px;overflow-y: auto;width: 100%;}
	.agree1-box .agree1-content > div {font-size: 12px;}
	.agree1-box .agree1-content > ul > li {font-size: 12px;line-height: 1.5em;padding-top: 10px;}
	.agree1-box .agree1-content > ul > li:first-child {font-size: 13px;font-weight: bold;padding-top: 20px;}
    #cd-vertical-nav > ul > li { cursor:pointer; }
</style>
</head>
<body>