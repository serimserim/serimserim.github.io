<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<div class="lst_bt_wrap">
    <h3 class="lst_icon_h3">조달청 민원장터 메뉴</h3>
    <ul class="lst_txt">
        <li>민원상담</li>
        <li>조달신문고</li>
        <li>자주하는 질문</li>
        <li>증명서 발급신청</li>
    </ul>
</div>

<div class="lst_icon"> 
    <h3 class="lst_icon_h3">효율적인 민원처리 절차</h3>
    <ul class="lst_icon_wrap"> 
        <li class="lst_icon">
            <div class="icon1_wrap"><img src="./img/lst_icon1.png" alt=""></div>
            <strong class="icon_txt">자주하는 질문 검색</strong>
        </li>
        <li class="lst_icon">
            <div class="icon2_wrap"><img src="./img/lst_icon2.png" alt=""></div>
            <strong class="icon_txt">민원신청</strong>
        </li>
        <li class="lst_icon">
            <div class="icon3_wrap"><img src="./img/lst_icon3.png" alt=""></div>
            <strong class="icon_txt">민원접수 및 처리</strong>
        </li>
        <li class="lst_icon">
            <div class="icon4_wrap"><img src="./img/lst_icon4.png" alt=""></div>
            <strong class="icon_txt">처리결과 통보</strong>
        </li>
    </ul>
</div>
<?php
include_once(G5_THEME_PATH."/tail.php");
?>

<script>
$(document).ready(function(){
    $("#ctn_title").each(function(){
        var txt = $(this).text();
        if(txt=="대구지방조달청"){
            $(this).text("종합민원안내");
        }
    });
});    
</script>