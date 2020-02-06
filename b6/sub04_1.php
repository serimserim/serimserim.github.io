<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>


<div hi_wrap>
    <div class="topimg">
        <img src="./img/img12.JPG" alt="">
    </div>
    <div class="headhi">
        <p class="txt1"> 
        <span class="hi">안녕하십니까?</span><br>
        <span class="jang">조달청 대구지방청장 박준훈 입니다.</span> <br><br>
        
        저희 대구지방조달청은 대구광역시와 경상북도 23개 시·군 지역 공공기관이 <br>
        필요로 하는 물자·용역·시설물을 조달하는 업무와 알루미늄·전기동 및 <br>
        주요 원자재를 비축하여 방출하는 업무를 담당하고 있습니다. <br><br>
        

        저희 청은 공공기관 고객 여러분에게 투명성과 공정성을 바탕으로 우수한 품질의 <br>
        물자·용역·시설물을 저렴한 가격과 최상의 서비스로 조달하는 최고가치의 <br>
        조달서비스를 제공하기 위하여 최선을 다하고 있습니다. <br><br>

        이와 함께 조달과정에서 일자리 창출과 지방·중소기업 지원, 여성·사회적기업의 <br>
        공공구매 확대 등 국정방향과 변화된 정책 패러다임에 맞추어 업무를 <br>
        수행하기 위해 노력하고 있습니다.<br><br>
        
        한편 희소금속등 원자재의 비축재고를 지속적으로 확대하여 원자재<br>
        가격 및 수급 안정을 위한 노력도 계속하고 있습니다.<br><br>
        
        이 웹사이트가 고객 여러분에게 유용한"정보샘터"가 될 수 있기를 바라며,<br>
        아울러 많은 관심과 애정으로 저희 청의 노력을 격려해 주시기 바랍니다.<br><br>
        
        저희 청의 서비스 및 업무처리와 관련하여 개선이 필요하거나 불편한 사항이<br>
        있으실 경우 이 홈페이지를 통해 고견을 제시해 주시면 소중히 받아들여 <br>
        조달행정의 개선에 적극 반영하도록 하겠습니다.<br><br>
        
        감사합니다.
        </p>    
    </div>
</div>




<?php
include_once(G5_THEME_PATH."/tail.php");
?>




<script>
$(document).ready(function(){
    $("#ctn_title").each(function(){
        var txt = $(this).text();
        if(txt=="대구지방조달청"){
            $(this).text("청장소개");
        }
    });
});    
</script>