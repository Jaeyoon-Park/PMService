<?php
if(!isset($copyright))
{
    ?>

	<div class="spacer s0">
        <div class="footer">
			<div class="o-container">
				<div class="c-cta_content">
					<div class="o-layout">

						<div class="o-layout_item footer-add u-2/3@from-medium">
							<span class="footer_span">서울시 마포구 상암산로 34 디지털큐브빌딩 9층</span><span class="footer_span"> (주)타라티피에스</span><?php if(TEL_VIEW){ ?><span class="footer_span"><i class="fa fa-phone" aria-hidden="true"></i> 070-7609-6158</span><?php } ?><span class="footer_span"><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@tarapms.com" >info@tarapms.com</a></span><br />
							© 2020 TARA TPS All rights reserved.
						</div>
						<div class="o-layout_item footer-add u-1/3@from-medium">
							<div class="dropdown">
								<button onclick="myFunction()" class="dropbtn">Family Site</button>
								<div id="myDropdown" class="dropdown-content">
									<a href="http://www.tara.co.kr/" target="_blank">TARA GROUP</a>
									<a href="http://www.taratps.com/kor/" target="_blank">TARA TPS</a>
									<a href="http://ssakhedo.com/" target="_blank">싹해도</a>
									<a href="http://www.tarapaper.co.kr/" target="_blank">TARA DISTRIBUTION</a>
									<a href="https://www.taragrp.co.kr/" target="_blank">TARA GRAPICS</a>
									<a href="http://www.chogwang.co.kr/" target="_blank">CHOGWANG PRINTING</a>
									<a href="http://hamo-kitchen.com/" target="_blank">오래된 미래</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>




    <?php
}
?>
<script>
/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
/*
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
*/
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<iframe id="ifrm" name="ifrm" style="width:100%; height:300px; display:none;"></iframe>
</body>
</html>
