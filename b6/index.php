<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/index_head.php');
?>

<ul id="comp_bn">
    <li>
        <button type="button" class="accordion-toggle bubn_btn">VISION 01<span>사업보기</span></button>
        <div class="accordion-content default bubn_img">
            <img src="<?php echo G5_URL ?>/theme/company/img/bu01.jpg" alt="회사설명">
            <div class="bubn_img_ov">
                <h3>VISION</h3>
                <p>1.창업·벤처기업 성장과 기술혁신 촉진<br>2.일자리 창출 등 경제 활력 제고</p>
                <a href="#">상세보기</a>
            </div>
        </div>
    </li>
    <li>
        <button type="button" class="accordion-toggle bubn_btn">VISION 02<span>사업보기</span></button>
        <div class="accordion-content  bubn_img">
            <img src="<?php echo G5_URL ?>/theme/company/img/bu01.jpg" alt="회사설명">
            <div class="bubn_img_ov">
                <h3>VISION</h3>
                <p>3.투명·공정한 조달시장 조성<br>4.조달서비스 품질 강화</p>
                <a href="#">상세보기</a>
            </div>
        </div>
    </li>
    <li>
        <button type="button" class="accordion-toggle bubn_btn">VISION 03<span>사업보기</span></button>
        <div class="accordion-content  bubn_img">
            <img src="<?php echo G5_URL ?>/theme/company/img/bu01.jpg" alt="회사설명">
            <div class="bubn_img_ov">
                <h3>VISION</h3>
                <p>5.효율적인 국가자산 관리<br>6.조달행정 역량 강화</p>
                <a href="#">상세보기</a>
            </div>
        </div>
    </li>
</ul>
<script type="text/javascript">
  $(document).ready(function($) {
    $("#comp_bn").find(".accordion-toggle").click(function(){
        $(this).next().slideToggle('fast');
        $(".accordion-content").not($(this).next()).slideUp('fast');
    });
  });
</script>
<ul id="comp_if">
    <li  class="com_bg1">
        <h2>지방청장소개</h2>
        <a href="#">지방청장소개 바로가기</a>
    </li>
    <li  class="com_bg2">
        <h2>종합민원안내</h2>
        <a href="#">종합민원안내 바로가기</a>
    </li>
    <li class="com_bg3">
        <h2>오시는길</h2>
        <a href="#">오시는길 바로가기</a>
    </li>
</ul>
<div id="comp_lt">
    <div class="li_notice">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        echo latest('theme/basic', 'notice', 4, 18);
        ?>
        <script>
        $(document).ready(function(){
            $(".lt_title a").each(function(){
            var txt = $(this).text();
            if(txt=="공지사항"){
                $(this).text("지방청 소식");
            }
    });
        });    
        </script>
    </div>
    <div class="li_gall">
        <?php
        // 이 함수가 바로 최신글을 추출하는 역할을 합니다.
        // 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수, 캐시타임, option);
        // 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
        $options = array(
            'thumb_width'    => 143, // 썸네일 width
            'thumb_height'   => 89,  // 썸네일 height
            'content_length' => 40   // 간단내용 길이
        );
        echo latest('theme/gallery', 'gallery', 3, 25, 1, $options);
        ?>
        <script>
        $(document).ready(function(){
            $(".lt_title a").each(function(){
                var txt = $(this).text();
                if(txt=="갤러리"){
                    $(this).text("지방청 행사앨범");
                }
            });
        });    
        </script>
    </div>
</div>
<?php
include_once(G5_THEME_PATH.'/tail.php');
?>