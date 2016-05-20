
window.onload = function() {
    waterfall();
    scrollLoad();

}
window.resize(function() {
    waterfall();

    scrollLoad();
});

function waterfall() {
    var boxes = document.getElementsByClassName('box');
    var hArray = [];
    var minH, minIndex;
    //取得一个页面的宽度，做兼容性处理
    var clientW = document.documentElement.clientWidth ?
        document.documentElement.clientWidth :
        document.body.clientWidth;
    var boxW = boxes[0].offsetWidth;
    //列数
    var colCount = Math.floor(clientW / boxW);
    // console.log('clientW is ' + clientW);
    // console.log('boxW is ' + boxW);
    console.log('colCount is ' + colCount);

    for (var i = 0; i < boxes.length; i++) {
        if (i < colCount) {
            //第一行的图片
            hArray.push(boxes[i].offsetHeight);
        } else {
            //第二行及以后的图片
            //取得高度数组中的最小值和最小值所在的位置
            minH = hArray[0];
            minIndex = 0;

            for (var j = 0; j < hArray.length; j++) {
                if (minH > hArray[j]) {
                    minH = hArray[j];
                    minIndex = j;
                }
            }

            //将当前的box，设置到高度数组中最小值的下面
            boxes[i].style.position = 'absolute';
            boxes[i].style.top = minH + 50 + 'px';
            boxes[i].style.left = boxes[minIndex].offsetLeft + 'px';

            //对高度数组的最小值进行更新
            hArray[minIndex] += boxes[i].offsetHeight;

        }
    }
}


function scrollLoad() {
    window.onscroll = function() {
        if (checkScroll() === true) {
            var data = loadData();
            //在页面添加图片
            appendBox(data);
            waterfall();
        }
    }

}

function appendBox(d) {
    var main = document.getElementById('main');
    for (var i = 0; i < d.length; i++) {
        var box = document.createElement('div');
        box.className = 'box';
        var pic = document.createElement('div');
        pic.className = 'pic';
        var img = document.createElement('img');
        img.src = d[i];
        pic.appendChild(img);
        box.appendChild(pic);
        main.appendChild(box);
    };
}

function loadData() {
    var imgs = [
        '../images/bookPictures/2.jpg',
        '../images/bookPictures/野草.jpg',
        '../images/bookPictures/认同感.jpg',
        '../images/bookPictures/岛上书店.jpg',
        '../images/bookPictures/有鹿来.jpg',
        ' ../images/bookPictures/斯通纳.jpg',
        ' ../images/bookPictures/解忧杂货店.jpg',
        ' ../images/bookPictures/2.jpg',
        '../images/bookPictures/零下一度.jpg',
        '../images/bookPictures/嘿，三十岁.jpg'
    ];
    return imgs;
}

function checkScroll() {
    var boxes = document.getElementsByClassName('box');
    var offsetTop = boxes[boxes.length - 1].offsetTop;
    var scrollTop = document.documentElement.scrollTop ?
        document.documentElement.scrollTop :
        document.body.scrollTop;

    var clientHeight = document.documentElement.clientHeight ?
        document.documentElement.clientHeight :
        document.body.clientHeight;

    if (offsetTop < (scrollTop + clientHeight)) {
        return true;
    } else {
        return false;
    }
}
