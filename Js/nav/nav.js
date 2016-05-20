 $(function() {
            $('#nav li').hover(function(){
                var index=$(this).index();
                $('audio').get(index).play();
            });
          	$("#nav>ul>li").hover(
          		function() {
					$(this).find("a:first").animate({"top": "20px"},"fast");
					$(this).find("span").animate({"top": "-20px"},"fast");
					if (!$(this).find("ul").is(":animated")) $(this).find("ul").slideDown("fast")
				},
				function() {
					// $(this).removeClass("sfhover");
					$(this).find("a:first").animate({"top": "5px"},"fast");
					$(this).find("span").animate({"top": "20px"},"fast");
					if (!$(this).find("ul").is(":animated")) $(this).find("ul").slideUp("fast");
					$("#nav ul ul").slideUp("fast")
				})
        }); 