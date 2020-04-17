<style>
html, body {
  height: 100%;
  margin: 0;
}
.search_wrap{width:100%;min-width:1266px;min-height:860px;background:url(/assets/img/con4_img_02.png) no-repeat bottom left #fabf62;overflow:hidden;}

.detail-container { text-align:center;width:1000px;margin:0 auto;min-width:800px;padding-bottom:50px;padding-top:80px; }
.detail-row { display:flex;line-height:30px; }
.col-title { float:left;text-align: left;width:27%;background-color:#eee;padding:10px 20px;border-bottom: 1px solid #ddd;font-size:13px; }
.col-value { float:right;text-align: left;width:73%;background-color:#fff; padding:10px 20px;border-bottom: 1px solid #ddd;color:#333;font-size:13px;}
.col-btn-row { text-align: right; width:100%; margin-top:30px; }
.col-btn {width:123px; height:40px; text-align: center; line-height: 40px; background-color:#333; color: white; display:inline-block;cursor:pointer; }

.detail-title{background-color: #1c3e58;  color:#fff;  font-weight:bold;padding: 13px 20px;font-size:15px;text-align:;}
#topBtn{display:none;}
</style>
<div class="search_wrap">
<div>
    <div class="detail-container">
		<div class="detail-title">
			문의 내역
		</div>
        <div class="detail-row">
            <div class="col-title">작업코드</div>
            <div class="col-value"><?=$jdata['job_code']?></div>
        </div>
        <div class="detail-row">
            <div class="col-title">작업명</div>
            <div class="col-value"><?=$jdata['job_title']?></div>
        </div>
        <div class="detail-row">
            <div class="col-title">진행상황</div>
            <div class="col-value"><?=$jdata['job_status']?></div>
        </div>
        <div class="detail-row">
            <div class="col-title">작업주문일</div>
            <div class="col-value"><?=substr($jdata['job_order_date'], 0, 10)?></div>
        </div>
        <div class="detail-row">
            <div class="col-title">작업시작일</div>
            <div class="col-value"><?=substr($jdata['job_start_date'], 0, 10)?></div>
        </div>
        <div class="detail-row">
            <div class="col-title">작업종료일</div>
            <div class="col-value"><?=($jdata['job_end_date'] > '2000-01-01') ? substr($jdata['job_end_date'], 0, 10) : '-'?></div>
        </div>
        <div class="detail-row">
            <div class="col-title">제품수량</div>
            <div class="col-value"><?=$jdata['product_quantity']?></div>
        </div>
        <div class="detail-row">
            <div class="col-title">총금액</div>
            <div class="col-value"><?=number_format(($jdata['selling_total'] * 1.1) - $jdata['total_cut_price'])?> 원</div>
        </div>
        <div class="detail-row">
            <div class="col-btn-row">
                <div class="col-btn btn-back">뒤로가기</div>
            </div>
        </div>
    </div>
</div>
</div>
<form action="/search" method="post" name="list_form">
    <input type="hidden" name="name" value="<?=$_SESSION['user_info']['name']?>" />
    <input type="hidden" name="type" value="<?=$_SESSION['user_info']['type']?>" />
    <input type="hidden" name="phone" value="<?=$_SESSION['user_info']['phone']?>" />
    <input type="hidden" name="email" value="<?=$_SESSION['user_info']['email']?>" />
</form>
<script>
    $(".btn-back").on("click",function(){
        $("form[name=list_form]").submit();
    })
</script>