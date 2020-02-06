<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<section class="page2_wrap">
    <ul class="thum2_lst">
        <li class="col2_1">
            <div class="col2_wrap">
                <h3 class="lst2_tit">경영관리과</h3>
                <p class="lst2_com"> · 시설공사 계약 <br>
                                    · 국유재산 관리<br>
                                    · 자금 및 재산관리<br>
                                    · 입찰등록 및 변경<br>
                                    · 나라장터 교육<br>
                                    · 공사관리(T/F) </p>
                </div></li>
        <li class="col2_2">
            <div class="col2_wrap">
                <h3 class="lst2_tit">자재구매과</h3>
                <p class="lst2_com">· 내자 조달물자 구매, 공급<br>
                                    · 총액계약품목(자재류) 구매<br>
                                    · 단가계약품목(자재류) 구매<br>
                                    · 다수공급자계약(MAS)<br>
                                    · 제3자 단가, 단가계약물품 납품요구 및 대금 지급<br>
                                    · 비축물자 보관관리 및 방출</p> 
            </div></li>
        <li class="col2_3"><div class="col2_wrap">
                <h3 class="lst2_tit">장비구매과</h3>
                <p class="lst2_com"> · 내자조달물자 기계(장비)류 구매, 공급 <br>
                                    · 총액계약품목(장비류) 구매<br>
                                    · 단가계약물품(장비류) 구매<br>
                                    · 다수공급자계약(MAS)<br>
                                    · 제3자 단가, 단가계약물품 납품요구 및 대금 지급 <br></p>
            </div></li>
    </ul>
</section>

<?php
include_once(G5_THEME_PATH."/tail.php");
?>

<script>
$(document).ready(function(){
    $("#ctn_title").each(function(){
        var txt = $(this).text();
        if(txt=="대구지방조달청"){
            $(this).text("조작 및 기능");
        }
    });
});    
</script>