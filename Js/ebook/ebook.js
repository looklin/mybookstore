$(function(){
	var previewBody = $('.content').minimap({
		heightRatio : 0.6,
		widthRatio : 0.05,
		offsetHeightRatio : 0.045,
		offsetWidthRatio : 0.065,
		position : "right",
		touch: true,
		smoothScroll: true,
		smoothScrollDelay: 200,
		onPreviewChange: function() {}
	});
});
	$(function(){ 
		//获取父行
		$('tr.book').click(function(){ 
			$(this)
			 .toggleClass("selected") //点击换色
			 .siblings('.child_'+this.id).toggle();//隐藏或者显示子元素
		}).click();
	})
