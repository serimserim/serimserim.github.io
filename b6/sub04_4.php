<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>


<section class="page_wrap">
    <ul class="thum_lst">
        <li class="col1">
            <div class="col_wrap">
                <h3 class="lst_tit">조달사업을 통해 정부정책 지원</h3>
                <p class="lst_com">-중소, 지역, 여성기업 등 경제적 약자에 대한 판로지원 확대 <br>
                                    -벤처기업 등의 신기술제품을 우수제품으로 선정 판로지원 </p>
                </div></li>
        <li class="col2">
            <div class="col_wrap">
                <h3 class="lst_tit">고객감동의 최고가치 서비스 제공</h3>
                <p class="lst_com">-맞춤형(On-Demand)구매서비스 확대 <br>
                                    -고객의 현장 목소리를 반영하는 「상시 모니터링제·해피콜 서비스」실시 <br>
                                    -조달물품 품질관리 강화</p> 
            </div></li>
        <li class="col3"><div class="col_wrap">
                <h3 class="lst_tit">원자재 수급 및 가격안정을 위한 비축사업 활성화</h3>
                <p class="lst_com">-중소기업에 안정적 원자재 공급 지속 추진 <br>
                                    -비축물자에 대한 국내외 시장 정보 제공 <br></p>
            </div></li>
        <li class="col4"><div class="col_wrap">
                <h3 class="lst_tit">전자조달서비스 이용을 통한 공공조달 효율화 선도 </h3>
                <p class="lst_com">-나라장터 사용자 교육 확대실시로 활용도 제고 <br>
                                    -나라장터를 통한 전자계약 활성화 <br>
                                    -물품대금 온라인 청구 확산으로 투명성 제고</p>
            </div></li>
        <li class="col5"><div class="col_wrap">
                <h3 class="lst_tit">조달행정의 전문화·효율화</h3>
                <p class="lst_com">-현장학습제를 통한 전문성 강화 <br>
                                    -신규직원의 조기 직장적응을 휜한 Mentor제 운용       </p>
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
            $(this).text("중점 추진 사항");
        }
    });
});    
</script>