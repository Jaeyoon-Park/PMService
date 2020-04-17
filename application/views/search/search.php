<style>
html, body {
  height: 100%;
  margin: 0;
}
.search_wrap{width:100%;height:100%;min-width:1266px;min-height:860px;background:linear-gradient(to right, #e6e9f0, #eef1f5);overflow:hidden;}
.search_form{position:relative;max-width:700px;margin:auto;margin-top:10%;overflow:hidden;padding:40px;text-align:center;}
.search_form_left{width:49%;float:left;background:url(/assets/img/search_ok.png) no-repeat center #fff;overflow:hidden;height:430px;}
.search_form_right{width:51%;float:right;background:#fabf62;overflow:hidden;height:430px;padding:45px 0;}
.search_title{width:84%;margin:20px auto 20px auto;border-bottom:1px dashed #1c3e58;padding-bottom:20px;font-size:16px;font-weight:normal;color:#1c3e58;}
.search_form input[type=text]{width:84%;height:40px;padding:0 10px;border:0;}
.search_form input::placeholder { color: #c5c5c5;}

#topBtn{display:none;}
</style>



<div class="search_wrap">
<form name="search" method="post">
    <div class="search_form">
		<div class="search_form_left">
		</div>
		<div class="search_form_right">
			<div class="search_title">문의내역을 확인하시려면<br /> 아래의 정보를 입력해주세요.</div>
			<div>
				<input type="radio" name="type" id="type_phone" value="phone" checked />
				<label for="type_phone">핸드폰번호</label>
				<input type="radio" name="type" id="type_email" value="email" style="margin-left:20px;" />
				<label for="type_email">이메일</label>
			</div>
			<div style="padding-top:20px;padding-bottom:5px;">
				<input type="text" name="name" placeholder="이름" />
			</div>
			<div class="search_phone" style="padding-bottom:25px;">
				<input type="text" name="phone" placeholder="전화번호" />
			</div>
			<div class="search_email" style="padding-bottom:25px;display:none;">
				<input type="text" name="email" placeholder="이메일" />
			</div>
			<div style="width:84%;margin:0 auto;">
				<span class="search" style="width:100%; height:42px; text-align: center; line-height: 42px; background-color:#1c3e58; color: white; display:inline-block;cursor:pointer;">확인하기</span>
			</div>
		</div>
		<span class="btn-main" style="width:100%;display:inline-block;text-align: center; cursor:pointer;padding-top:20px;color:#999;">&lt; 메인으로</span>
    </div>
</form>
</div>
<script>
    $(":input:radio[name=type]").on("change", function(){
        if($(this).val() == "email"){
            $(".search_phone").hide();
            $(".search_email").show();
        }else{
            $(".search_phone").show();
            $(".search_email").hide();
        }
    })
</script>