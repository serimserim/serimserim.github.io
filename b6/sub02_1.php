<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>

<div>

</div>

<?php
include_once(G5_THEME_PATH."/tail.php");
?>

<script>
$(document).ready(function(){
    $("#ctn_title").each(function(){
        var txt = $(this).text();
        if(txt=="대구지방조달청"){
            $(this).text("관내생산물품조달정보공개방");
        }
    });
});    
</script>