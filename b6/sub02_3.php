<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/head.php');
?>


<?php
include_once(G5_THEME_PATH."/tail.php");
?>

<script>
$(document).ready(function(){
    $("#ctn_title").each(function(){
        var txt = $(this).text();
        if(txt=="대구지방조달청"){
            $(this).text("업무추진비");
        }
    });
});    
</script>