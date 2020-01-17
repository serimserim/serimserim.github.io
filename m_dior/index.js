    $(document).ready(function(){
        var wd = parseInt($("#visual").width());
        function nextAni(){
            $(".sl_box").not(":animated").animate({"margin-left":-wd+"px"}, 600, function(){
                $(".sl_box li").removeClass("on");
                $(".sl_box li").eq(0).appendTo($(".sl_box"));
                $(".sl_box").css("margin-left", "0px");
                $(".sl_box li").eq(0).addClass("on");
                $(".btn_box li").eq(0).appendTo($(".btn_box"));
                $(".btn_box li label").removeClass("on");
                $(".btn_box li").eq(0).find("label").addClass("on");
            });
        }
        var intv = setInterval(function(){
            nextAni();
        }, 3200); 
        
        var loadingToSplash = setTimeout(function(){
            loadSplash();
        }, 1000);
        
        
    });    