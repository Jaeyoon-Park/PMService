<?php
/**
 * Created by PhpStorm.
 * User: TaraRND
 * Date: 2019-08-16
 * Time: 오전 10:34
 */
//Check Mobile
?>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
		<style>

body{background:#f7f7f7;}
.has-error .form-control {border-color: #a94442;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);}
/* placeholder */
::-webkit-input-placeholder { /* Edge */text-align:right;color:#9e9e9e;}
:-ms-input-placeholder { /* Internet Explorer 10-11 */text-align:right;color:#9e9e9e;}
::placeholder {text-align:right;color:#9e9e9e;}
@media (max-width:699px){
::-webkit-input-placeholder { /* Edge */font-size:14px;}
:-ms-input-placeholder { /* Internet Explorer 10-11 */font-size:14px;}
::placeholder {font-size:14px;}
}

.input-field {position: relative;margin-top: 1rem;}
input[type=text], input[type=password], input[type=email], input[type=tel], input[type=number], textarea.materialize-textarea {
background-color: transparent;border: none;border-bottom: 1px solid #9e9e9e;outline: none;height: 2.5rem;width: 100%;
font-size: 16px;margin: 0 0 15px 0;padding: 0;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
-webkit-transition: 0.3s;
-moz-transition: 0.3s;
-o-transition: 0.3s;
-ms-transition: 0.3s;
transition: 0.3s;
}
.input-field label.active {font-size: 0.8rem;
-webkit-transform: translateY(-140%);
-moz-transform: translateY(-140%);
-ms-transform: translateY(-140%);
-o-transform: translateY(-140%);
transform: translateY(-140%);
}
.input-field label {color: #9e9e9e;position: absolute;top: 0.8rem;left: 0;font-size: 1rem;cursor: text;
-webkit-transition: 0.2s ease-out;
-moz-transition: 0.2s ease-out;
-o-transition: 0.2s ease-out;
-ms-transition: 0.2s ease-out;
transition: 0.2s ease-out;
}
label {font-size: 0.8rem;color: #9e9e9e;}

.input-field label{top:0;left:0}
.input-field label i{color:rgba(255,255,255,0.7);-webkit-transition:color 0.3s;-moz-transition:color 0.3s;-o-transition:color 0.3s;-ms-transition:color 0.3s;transition:color 0.3s}
.input-field label.active i{color:#fff}
.input-field label.active{-webkit-transform:translateY(0);-moz-transform:translateY(0);-ms-transform:translateY(0);-o-transform:translateY(0);transform:translateY(0)}

.input-field label{color:#9e9e9e;position:absolute;top:0.4rem;left:0;font-size:16px;cursor:text;pointer-events: none;-webkit-transition:0.2s ease-out;-moz-transition:0.2s ease-out;-o-transition:0.2s ease-out;-ms-transition:0.2s ease-out;transition:0.2s ease-out}
.input-field label.active{font-size:0.8rem;-webkit-transform:translateY(-80%);-moz-transform:translateY(-80%);-ms-transform:translateY(-80%);-o-transform:translateY(-80%);transform:translateY(-80%)}
.input-field input[type=text]:focus+label,.input-field input[type=email]:focus+label,.input-field input[type=tel]:focus+label,.input-field input[type=number]:focus+label,.input-field textarea:focus.materialize-textarea+label{color:#000}
.input-field input[type=text].valid,.valid,.input-field input[type=email].valid,.input-field input[type=tel].valid,.input-field input[type=number].valid,.input-field textarea.materialize-textarea.valid{border-bottom:1px solid #1c46f2;}
.input-field input[type=text].invalid,.input-field input[type=email].invalid,.input-field input[type=tel].invalid,.input-field input[type=number].invalid,.input-field textarea.materialize-textarea.invalid{border-bottom:1px solid #1c46f2;}

input[type=text]:focus,input[type=email]:focus,input[type=tel]:focus,input[type=number]:focus,textarea:focus.materialize-textarea{border-bottom:1px solid #000;}
textarea.materialize-textarea{overflow-y:hidden;padding:1.6rem 0 0 0;resize:none;min-height:3rem}


.justselect-body-overlay {position: fixed;top: 0;left: 0;width: 100%;height: 100%;background: transparent;z-index: 1; }
.justselect {display: none; }
.justselect-wrapper {position: relative;width: 100%;margin-top:10px; }
.justselect-title {background: white;text-align: left;padding: 0 15px;height: 40px;line-height: 40px;outline: none;background-image: url("data:image/svg+xml;charset=US-ASCII,%3C%3Fxml%20version%3D%221.0%22%20encoding%3D%22iso-8859-1%22%3F%3E%0D%0A%3C%21--%20Generator%3A%20Adobe%20Illustrator%2019.0.0%2C%20SVG%20Export%20Plug-In%20.%20SVG%20Version%3A%206.00%20Build%200%29%20%20--%3E%0D%0A%3Csvg%20version%3D%221.1%22%20id%3D%22Layer_1%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%20xmlns%3Axlink%3D%22http%3A//www.w3.org/1999/xlink%22%20x%3D%220px%22%20y%3D%220px%22%0D%0A%09%20viewBox%3D%220%200%20512.011%20512.011%22%20style%3D%22enable-background%3Anew%200%200%20512.011%20512.011%3B%22%20xml%3Aspace%3D%22preserve%22%20width%3D%2220px%22%20height%3D%2220px%22%3E%0D%0A%3Cg%3E%0D%0A%09%3Cg%3E%0D%0A%09%09%3Cpath%20d%3D%22M505.755%2C123.592c-8.341-8.341-21.824-8.341-30.165%2C0L256.005%2C343.176L36.421%2C123.592c-8.341-8.341-21.824-8.341-30.165%2C0%0D%0A%09%09%09s-8.341%2C21.824%2C0%2C30.165l234.667%2C234.667c4.16%2C4.16%2C9.621%2C6.251%2C15.083%2C6.251c5.462%2C0%2C10.923-2.091%2C15.083-6.251l234.667-234.667%0D%0A%09%09%09C514.096%2C145.416%2C514.096%2C131.933%2C505.755%2C123.592z%22/%3E%0D%0A%09%3C/g%3E%0D%0A%3C/g%3E%0D%0A%3C/svg%3E%0D%0A");
background-repeat: no-repeat;background-position: calc(100% - 10px);background-size: 10px;cursor: pointer;font-size: 14px; }
.justselect-list {position: absolute;left: 0;top: 40px;width: 100%;list-style: none;padding: 0;
-webkit-box-shdow: 0px 0px 10px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.05);
display: none;z-index: 1;overflow: hidden;margin: 0;font-size: 14px; }
.justselect-list li {line-height: 40px;cursor: pointer;text-align: left;padding: 0 15px;background: white; }
.justselect-list li.selected {  background: #ebebeb; }
.justselect-list.active {display: block; }

/* check box */
.boxes {margin: auto;padding: 50px;background: #484848;}

/*Checkboxes styles*/
input[type="checkbox"] { display: none; }
input[type="checkbox"] + label {
display: inline-block;
position: relative;
padding-left: 35px;
margin-bottom: 20px;
font-size: 14px ;
color: #9e9e9e;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
}
input[type="checkbox"] + label:last-child { margin-bottom: 0; }
input[type="checkbox"] + label:before {
content: '';
display: block;
width: 20px;
height: 20px;
border: 2px solid #132130;
position: absolute;
left: 0;
top: 0;
opacity: .6;
-webkit-transition: all .12s, border-color .08s;
transition: all .12s, border-color .08s;
}
input[type="checkbox"]:checked + label:before {
width: 10px;
top: -5px;
left: 5px;
border-radius: 0;
opacity: 1;
color:#132130;
border-top-color: transparent;
border-left-color: transparent;
-webkit-transform: rotate(45deg);
transform: rotate(45deg);
}

@media (min-width:1600px){
    .confirm-alert {
        width: 800px;
        left: calc(50% - 400px);
    }
    .cancel {margin-top:-90px;}
    .confirm {margin-top:-88px;}
}
@media (min-width:1200px) and (max-width:1599px){
    .confirm-alert {
        width: 600px;
        left: calc(50% - 300px);
    }
    .cancel {margin-top:-95px;}
    .confirm {margin-top:-80px;}
}
@media (min-width:1000px) and (max-width:1199px){
    html{font-size:16px}
    .confirm-alert {
        width: 500px;
        left: calc(50% - 250px);
    }
    .cancel {margin-top:-108px;}
    .confirm {margin-top:-80px;}
}
@media (min-width:700px) and (max-width:999px){
    html{font-size:16px}
    .confirm-alert {
        width: 400px;
        left: calc(50% - 200px);
    }
    .cancel {margin-top:-100px;}
    .confirm {margin-top:-80px;}
}
@media (max-width:699px){
    html{font-size:16px}
    .confirm-alert {
        width: 400px;
        left: calc(50% - 200px);
    }
    .cancel {margin-top:-95px;}
    .confirm {margin-top:-80px;}
	input[type="checkbox"] + label {padding-left:27px;}
}
.cancel { opacity: 1;}

.confirm-alert {display:none;background-color:white;position: fixed;height: 30%;top:30%;text-align: center;z-index:1000;}
.alert-title {position:relative;background-color:white;z-index:1;padding-top:30px;font-size:24px;height:100px;}
.alert-message {position:relative;background-color:white;z-index:1;padding-top:20px;height:120px;}
.confirm-background {background-color:black;opacity: 0.2;height:100%;width:100%;top:0;left:0;position: fixed;min-height:600px;}
.confirm {width:49.5%;}
.confirm-btn {height:60px;background-color: white;position:relative;z-index: 1;}

/* modal */
.modal,.modal-box {z-index: 900;}
.modal-sandbox {position: fixed;width: 100%;height: 100%;top: 0;left: 0;background: transparent;}
.modal {display: none; position: fixed;width: 100%;height: 100%;left: 0;top: 0;background: rgb(0,0,0);background: rgba(0,0,0,.8);overflow: auto;}
.modal-box {position: relative;width: 80%;max-width: 920px;margin: 100px auto;
animation-name: modalbox;
animation-duration: .4s;
animation-timing-function: cubic-bezier(0,0,.3,1.6);
}
.modal-header {padding: 10px 20px;background: #1c46f2;}
.modal-header-txt{color: #ffffff;font-size:1.1rem;}
.modal-body {background: #ECEFF1;padding: 30px 20px;height:500px;overflow: scroll;}
.modal-body-txt{font-size:14px;}
.modal-body-txt ul li{font-size:14px;color:#000;}
.modal-body-txt ul li:last-child{margin-bottom:10px;}
@media (max-width:699px){
.modal-body{height:400px;}
.c-section_infos_inner h2{font-size:3rem;}
.c-sections_infos_text p{font-size:1rem;margin-bottom:20px;}
.s-line{margin:10px 0 20px 0;width:20px;height:3px;background:#333;}
}

/* Close Button */
.close-modal {text-align: right;cursor: pointer;}
/* Animation */
@-webkit-keyframes modalbox {
0% {top: -250px; opacity: 0;}
100% {top: 0; opacity: 1;}
}
@keyframes modalbox {
0% {top: -250px; opacity: 0;}
100% {top: 0; opacity: 1;}
}
.modal-trigger {float:right;padding: 0px;background: transparent;color: #666;text-decoration: none;}
/*.modal-trigger {position: absolute;top: 50%;left: 50%;
-webkit-transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
-o-transform: translate(-50%, -50%);
transform: translate(-50%, -50%);
transition: ease .2s;
}*/
.modal-trigger:hover {color:#000;}
</style>

<div class="o-scroll" id="js-scroll" data-scroll-container>
     <div data-scroll-section>
        <div class="o-container">
            <div class="c-cta">
                <div class="c-cta_content">
                    <div class="o-layout -gutter">
                        <div class="o-layout_item u-1/2" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2" data-scroll-position="top">
                            <span class="u-label c-header_heading_label">
                                <a href="http://www.tara.co.kr/" target="_blank">
                                    <img src="/assets/img/common/tara_logo2.png" alt="tara logo" />
                                </a>
                            </span>
                        </div>
                        <div class="o-layout_item u-1/2" data-scroll data-scroll-direction="horizontal" data-scroll-speed="2" data-scroll-position="top">
                            <!--<div class="u-text-right">
                                <p class="u-label c-header_heading_label">
                                    <a href="javascript:history.back()">main</a>
                                </p>
                            </div>-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="" data-scroll-section>
        <div class="o-container" id="speed-control">
            <div class="o-layout -gutter">
                <div class="o-layout_item u-1/2@from-medium">
                    <div class="c-section_infos_inner" data-scroll data-scroll-offset="10">
                        <h2>
                           CONTACT US
                        </h2>
                        <div class="c-sections_infos_text u-text">
                            <p>
                                PM서비스에 대해 궁금하신 사항이 있으신 경우,<br />문의내용을 작성하시면 빠른 시일 내에 답변드릴 수 있도록 하겠습니다.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="o-layout_item u-1/2@from-medium">
                    <div class="c-cta_section">
                        <div class="c-cta_content_text" data-scroll data-scroll-offset="100">
                            <form name="form" method="post" enctype="multipart/form-data">
                                <div class="">
									<div class="s-line"></div>
                                    <div style="">분류를 선택하세요 *</div>
                                    <div class=""  style="">
                                        <select class="justselect" name="product">
                                          <option selected="selected" value="">선택</option>
                                          <option value="컨설팅">PM서비스 컨설팅</option>
                                          <option value="자료요청">PM서비스 자료요청</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="input-field col s6">
                                        <input type="text" name="name" data-validation="required">
                                        <label for="name">성함 *</label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="input-field col s6">
                                        <input type="text" name="email" data-validation="required email" placeholder="업무용 이메일을 입력해주세요.">
                                        <label for="email">이메일 *</label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="input-field col s6">
                                        <input type="text" name="tel" data-validation="required">
                                        <label for="">연락처 *</label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="input-field col s6">
                                        <input type="text" name="company" data-validation="required">
                                        <label for="">회사</label>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="input-field col s6">
                                        <textarea class="materialize-textarea" name="contents" id="contents" rows="10" required></textarea>
                                        <label for="">문의사항</label>
                                    </div>
                                </div>
                                <div class="">
                                    <input type="checkbox" id="personal_agree" name="personal_agree" value="y">
                                    <label for="personal_agree">개인정보 수집 및 이용에 대한 안내에 동의합니다.* </label>
									<a href="#" class="modal-trigger" data-modal="modal-name">ⓘ</a> 
                                </div>

                                <div class="text-center">
                                    <a class="c-cta_button o-button request_pmpremium" id="request" target="_blank" data-scroll data-scroll-offset="100">
                                    Send
                                    <span class="o-button_arrow u-icon">
                                        →
                                    </span>
                                </a>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Modal -->
<div class="modal" id="modal-name">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header">
		<div class="close-modal">&#10006;</div> 
		<div class="modal-header-txt">개인정보 수집 및 이용동의 안내</div>
    </div>
    <div class="modal-body">
		<div class="modal-body-txt">
			<div align="left">귀하께서 문의하신 다음의 내역은 법률에 의거 개인정보 수집, 이용에 대한 본인 동의가 필요한 항목입니다.<br /><br /></div>
			<ul>
				<li>1. 개인정보의 수집 항목</li>
				<li>㈜타라티피에스(이하 '회사'라 합니다)는 원활한 상담을 위해 아래와 같은 개인정보를 수집하고 있
					습니다. 선택 항목은 입력하지 않더라도 서비스 이용에는 제한이 없습니다.</li>
				<li>- 수집항목 : 필수(성함, 이메일, 연락처, 상담내용) 선택(회사명 등)</li>
			</ul>
			<ul>
				<li>2. 개인정보 이용목적</li>
				<li>“회사” 는 수집한 개인정보를 아래와 같은 목적을 위해 활용합니다.</li>
				<li>
					가. 서비스 제공을 위한 정보 활용: 온라인 상담 (온라인 상담, 전화상담, 이메
					일 문의 답변 등), 혜택 제공 및 안내, 분쟁 조정을 위한 기록 보존, 불만 민원 처리, 고지사항 전
					달의 목적으로 사용, 통계정보 등을 이용한 서비스 분석 등
				</li>
				<li>
					나. 마케팅 및 광고에 활용: 접속 빈도 파악, 서비스 이용에 대한 통계, 이벤트 경품 배송, 고객 지
					향적 이벤트와 광고성 정보 전달
				</li>
				<li>
					※ 온라인 이벤트 및 이벤트와 광고성 정보 전달 진행 시 이벤트 유형에 따라 수집되는 이름, 연
					락처, 주소 등에 대한 개인정보의 수집 항목, 수집 목적, 보유 기간을 별도 고지하여 동의를 받습
					니다.
				</li>
				<li>
					※ 회사는 익명 처리된 고객들의 개인정보를 집계한 후, 통계자료를 만들어 이용성향 분석을 위해
					사용할 수 있습니다.
				</li>
			</ul>
			<ul>
				<li>3. 개인정보의 보유 및 이용기간</li>
				<li>
					“회사”는 아래와 같이 필요한 기간 동안 동의 받은 “이용자”의 개인정보를 이용 보관함을 원칙으
					로 합니다. 또한 해당 보유 기간이 도래하면 해당 정보를 지체 없이 파기 합니다.
				</li>
				<li>
					* 개인정보 외 상담 내용은 서비스 개선 목적으로 개인을 식별할 수 없는 형태로 보관 될 수 있
					습니다.
				</li>
				<li>
					- 온라인 상담, 이메일 상담, 전화 상담 이용 시 수집된 개인정보 : 법령에 따른 보존기간 까지

				</li>
				<li>
					다만 상법, 국세기본법, 전자상거래 등에서의 소비자 보호에 관한 법률 등 관련 법령의 규정에 의
					하여 다음과 같이 거래 관련 권리 의무 관계의 확인 등을 이유로 일정기간 보유하여야 할 필요가
					있을 경우에는 일정기간 보유합니다. 이 경우 회사는 보관하는 개인정보를 그 보관의 목적으로만
					이용하며 보존 기간 및 보존 항목은 아래와 같습니다.
				</li>
				<li>
					- 통신사실확인자료 제공 시 “이용자” 확인에 필요한 성명, 전화번호 등: 12개월(통신비밀보호법)
				</li>
				<li>
					- “회사”와 고객 간에 민원, 소송 등 분쟁이 발생한 경우에 그 보유기간 내에 분쟁이 해결되지 않
					을 경우: 그 분쟁이 해결될 때까지
				</li>
			</ul>
			<ul>
				<li>4. 동의 거부권 및 미동의에 대한 불이익 안내</li>
				<li>
					고객님께서는 정보주체로서 개인정보 동의 거부권이 있으시며, 미동의 이용에 제약이 있을 수 있
					습니다.
				</li>
			</ul>
		</div>
      <!--<button class="close-modal">Close!</button>-->
    </div>
  </div>
</div>


<div class="confirm-alert">
    <div class="alert-title"></div>
    <div class="alert-message"></div>
    <div class="alert-btn">
        <div class="c-cta_button o-button cancel" data-scroll data-scroll-offset="100">확인</div>
    </div>
    <div class="confirm-btn">
        <div class="c-cta_button o-button cancel confirm confirm-button" data-type="submit" data-scroll data-scroll-offset="100">확인</div>
        <div class="c-cta_button o-button2 cancel confirm" data-type="cancel" data-scroll data-scroll-offset="100">취소</div>
    </div>
    <div class="confirm-background"></div>
</div>
<iframe name="ifr" id="ifr" width="0" height="0"></iframe>
<!-- jQuery Version 1.11.1
	    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh" crossorigin="anonymous"></script> -->
		<script>
		$(document).ready(function(){
			$('.justselect').each(function(){
				$(this).wrap('<div class="justselect-wrapper">');
			
				var justselectUL = document.createElement( "ul" );
					justselectUL.className = "justselect-list";
					
				var justselectTitle = document.createElement( "div" ); 	
					justselectTitle.className = "justselect-title";
					
				var	select = $(this).parent(),
					option = $(this).find($('option'));
					
					select.append(justselectTitle, justselectUL);		
					
					for (i = 0; i< option.length; i++) {
						var justselectLI = document.createElement( "li" );
							justselectUL.append(justselectLI),
							justselectLI_option = select.find($('.justselect-list li'));
							
							justselectLI_option.eq(i).text(option.eq(i).text());
							
							if (option.eq(i).attr('selected')) {
								justselectLI_option.eq(i).addClass('selected');
								select.find($('.justselect-title')).text(justselectLI_option.eq(i).text());
							}
							
							justselectLI_option.click(function(){
								$(this).addClass('selected').siblings().removeAttr('class');
								var index = $(this).index();
								
								select.find($('.justselect-list')).fadeOut();
								$('.justselect-body-overlay').remove();	
								
								option.eq(index).attr("selected", true).siblings().removeAttr("selected");
								select.find($('.justselect-title')).text($(this).text());
							});			    
					}
					
				select.find($('.justselect-title')).click(function(){
					select.find($('.justselect-list')).fadeToggle();
					
					var bodyOverlay = document.createElement( "div" ); 
						bodyOverlay.className = "justselect-body-overlay";
						//$('body').prepend(bodyOverlay);
			
						$('.justselect-body-overlay').click(function(){
							select.find($('.justselect-list')).fadeToggle();
							$('.justselect-body-overlay').remove();
						});						
				});			
			});
        });
		</script>

<script>
/*
===============================================================

Hi! Welcome to my little playground!

My name is Tobias Bogliolo. 'Open source' by default and always 'responsive',
I'm a publicist, visual designer and frontend developer based in Barcelona. 

Here you will find some of my personal experiments. Sometimes usefull,
sometimes simply for fun. You are free to use them for whatever you want 
but I would appreciate an attribution from my work. I hope you enjoy it.

===============================================================
*/

$(".modal-trigger").click(function(e){
  e.preventDefault();
  dataModal = $(this).attr("data-modal");
  $("#" + dataModal).css({"display":"block"});
  // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
});

$(".close-modal, .modal-sandbox").click(function(){
  $(".modal").css({"display":"none"});
  // $("body").css({"overflow-y": "auto"}); //Prevent double scrollbar.
});

</script>