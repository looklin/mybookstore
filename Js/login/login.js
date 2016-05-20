window.onload=function(){
	var arr=$('#raside a');
	document.getElementById('bobble_btn1').onclick=function(){
		open();
	}
	document.getElementById('bobble_btn2').onclick=function(){
		clearInterval(time);
	}
	// open();
	function open(){
	for(var i=0;i<arr.length;i++){
		arr[i].style.display='block';
		arr[i].style.left=i*100+'px';
		arr[i].style.top=1100+'px';
		fly(arr[i]);
	}
	time=setInterval(function(){
		for(var i=0;i<arr.length;i++){
		arr[i].style.left=i*100+'px';
		arr[i].style.top=1100+'px';
		fly(arr[i]);
	}
	},16000);
	function fly(arr){
		var speed;
		speed=Math.floor(Math.random()*6+5);
		var timer=setInterval(function(){
		arr.style.top=(parseInt(arr.style.top)-speed)+'px';
		if(parseInt(arr.style.top)<=-100){
			arr.style.top=-100+'px'
			clearInterval(timer);
			arr.style.top=1100+'px';
			}
			console.log(arr.style.top);
		},40);
		arr.onmouseover=function(){
			clearInterval(timer);
		}
		arr.onmouseout=function(){
			fly(arr);
		}
	}
	
	}













}
