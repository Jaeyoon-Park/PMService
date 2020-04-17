<style>
html, body {
  height: 100%;
  margin: 0;
}
.search_wrap{width:100%;min-width:1266px;min-height:860px;background:url(/assets/img/con4_img_02.png) no-repeat bottom left #fabf62;overflow:hidden;}

.view-container { text-align:center;width:1000px;margin:80px auto 50px auto;min-width:800px;padding-bottom:50px;}

.view-table-wrap{background:none;width:100%;padding:50px 0;}
.view-table { line-height: 1.5;  margin: 20px 0 0px 0;  }

table {  border-collapse: collapse;  width: 100%;}
th {  background-color: #1c3e58;  font-weight:bold;  padding: 15px 10px;text-align: center;color:#fff;}
td{background:none;border-bottom: 1px solid #1c3e58;padding:20px 10px;text-align: center;color:#333;font-size:13px;}
tr:hover{background:#fff;}
/*td:nth-child(7),td:nth-child(8){text-align:right;}*/

.view_detail { cursor:pointer; }
    
.col-btn { width:123px; height:40px; text-align: center; line-height: 40px; background-color:#333; color: white; display:inline-block;cursor:pointer; }

#topBtn{display:none;}
</style>
<div class="search_wrap">
<div class="view-container">
<div style="font-size:24px;color:#1c3e58;text-align:left;padding-top:30px;">문의 내역 <img src="/assets/img/search_okicon.png" /></div>
	<div class="view-table-wrap">
    <table class="view-table" style="width:100%;">
        <colgroup>
            <col width="12%" />
            <col width="30%" />
            <col width="8%" />
            <col width="11%" />
            <col width="11%" />
            <col width="11%" />
            <col width="7%" />
            <col width="10%" />
        </colgroup>
        <thead style="background-color:#cacaca;">
            <tr>
                <th>작업코드</th>
                <th>작업명</th>
                <th>작업상태</th>
                <th>작업등록일</th>
                <th>작업시작일</th>
                <th>작업종료일</th>
                <th>수량</th>
                <th>금액</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(count($jdata) > 0) {
                    foreach ($jdata as $row) {
                        ?>
                        <tr class="view_detail" data-serial="<?=$row['serial']?>">
                            <td><?=$row['job_code']?></td>
                            <td><?=$row['job_title']?></a></td>
                            <td><?=$row['job_status']?></a></td>
                            <td><?=substr($row['job_order_date'], 0, 10)?></td>
                            <td><?=substr($row['job_start_date'], 0, 10)?></td>
                            <td><?=substr($row['job_end_date'], 0, 10)?></td>
                            <td><?=($row['product_quantity']) ? $row['product_quantity'] : "-"?></td>
                            <td><?=number_format(($row['selling_total'] * 1.1) - $row['total_cut_price'])?> 원</td>
                        </tr>
                        <?php
                    }
                }else{
            ?>
                    <tr>
                        <td colspan="7">등록 된 목록이 없습니다.</td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
	</div>
   <div class="detail-row" style="text-align:right;">
        <div class="col-btn-row">
            <div class="col-btn btn-main">메인으로</div>
        </div>
    </div>
</div>
 
</div>