<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<!-- * 카카오맵 - 지도퍼가기 -->
<!-- 1. 지도 노드 -->
<div id="daumRoughmapContainer1578021056913" class="root_daum_roughmap root_daum_roughmap_landing"></div>

<!--
	2. 설치 스크립트
	* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
-->
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<!-- 3. 실행 스크립트 -->
<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1578021056913",
		"key" : "wgyh",
		"mapWidth" : "640",
		"mapHeight" : "360"
	}).render();
</script>

<div class="ad">
<span class="ad_txt">주소 및 대표전화</span>  <br>
<span class="ad_txt">주소 :</span> 	  대구광역시 달서구 이곡공원로 54 (우) 42620 <br>
<span class="ad_txt">대표전화 :</span>   070-4056-7933~4
</div>


<?php
include_once(G5_THEME_PATH."/tail.php");
?>

ctn_title

<script>
$(document).ready(function(){
    $("#ctn_title").each(function(){
        var txt = $(this).text();
        if(txt=="대구지방조달청"){
            $(this).text("오시는 길");
        }
    });
});    
</script>