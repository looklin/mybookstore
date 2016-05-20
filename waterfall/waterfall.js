var positionArr = new Array();
var Div = null;
var divList = null;
var columCount = 0;
var horizontalSpace = 0;
var verticalSpace = 0;
window.onload = function(){
	waterfall();	
	scrollLoad();			
}
window.onresize = function(){
	// positionArr = new Array();
	waterfall();
}
//用来计算最小的top值的坐标的下标值是多少
function minTopIndex(){
	var minTop = positionArr[0].top;
	var index = 0;
	for(var i=0; i<positionArr.length; i++){
		if(positionArr[i].top < minTop) {
			minTop = positionArr[i].top;
			index = i;
		}
	}
	return index;
}
function waterfall(){
	//最外层的DIV
	Div = document.getElementById("wrap");
	//所有的图片div
	divList = Div.getElementsByTagName("div");
	//页面的列数   取整 (页面总宽度/单个图片的宽度)
	columCount = Math.floor(Div.offsetWidth/divList[0].offsetWidth);
	//左右间隙   （ 页面总宽度-（单个图片的宽度X列数））/（列数+1）
	horizontalSpace = Math.floor((Div.offsetWidth-divList[0].offsetWidth*columCount)/(columCount+1));
	//上下间隙
	verticalSpace = 10;
	//创建N列坐标，保存到一个数组当中,便于设定图片的位置
	for(var i=0; i<columCount; i++){
		var obj = new Object();
		//第N列 left = (N-1)*图片宽度 + N*左右间隙
		obj.left = i*divList[0].offsetWidth + (i+1)*horizontalSpace;
		obj.top = verticalSpace;
		positionArr.push(obj);
	}
	//拿到所有图片，开始定位
	for(var k=0; k<divList.length; k++){
		//此刻，哪一列的top值，最小，就放到哪一列
		var index = minTopIndex();
		$(divList[k]).animate({left:positionArr[index].left,top:positionArr[index].top},1000,function(){
		})
		positionArr[index].top += divList[k].offsetHeight + verticalSpace;
	}
}


function scrollLoad () {
	window.onscroll = function () {
		if (checkScroll() === true) {
			//加载数据
			// var boxes = document.getElementsByClassName('box');
			// boxes[boxes.length-1].style.background = 'red';
			var data = loadData();
			//在页面添加图片
			appendBox(data);

			waterfall();
		}
	}
	
}

function appendBox(d) {
	var main = document.getElementById('wrap');
	for (var i = 0; i < d.length; i++) {
		var pic = document.createElement('div');
		var img = document.createElement('img');
		img.src = d[i];
		pic.appendChild(img);
		main.appendChild(pic);
	};
}
function loadData () {
	var imgs = [
		'waterfall/21.jpg',
		'waterfall/2.jpg',
		'waterfall/3.jpg',
		'waterfall/4.jpg',
		'waterfall/5.jpg',
		'waterfall/6.jpg',
		'waterfall/7.jpg',
		'waterfall/8.jpg',
		'waterfall/9.jpg',
		'waterfall/10.jpg'
	];
	return imgs;
}
function checkScroll () {
	var boxes = document.getElementsByTagName('div');
	var offsetTop = boxes[boxes.length-1].offsetTop;
	var scrollTop = document.documentElement.scrollTop ?
					document.documentElement.scrollTop :
					document.body.scrollTop;

	var clientHeight = document.documentElement.clientHeight ?
					document.documentElement.clientHeight :
					document.body.clientHeight;

	if (offsetTop < (scrollTop+clientHeight)) {
		return true;
	} else {
		return false;
	}
}
