var btn = document.getElementById("nav-open");
var modal = document.getElementById("nav-modal");
btn.addEventListener('click', function() {
	modal.style = 'display: block; animation-name: fade-in; animation-duration: 0.3s; animation-timing-function: liner; animation-fill-mode: both;';
});
var closeBtn = document.getElementById('close-modal');
closeBtn.addEventListener('click', function() {
	modal.style = 'animation-name: fade-out; animation-duration: 0.3s; animation-timing-function: liner; animation-fill-mode: both;';
});


(function(){
    const target = document.getElementById( 'header' ),
          height     = 50;
    let offset       = 0,
        lastPosition = 0,
        ticking      = false;
    
    function onScroll() {
        if( lastPosition > height ) {
            if( lastPosition > offset ) {
                target.classList.add( 'head-animation' );
            } else {
                target.classList.remove( 'head-animation' );
            }
            offset = lastPosition;
        }
    }
    
    window.addEventListener( 'scroll', function(e) {
        lastPosition = window.scrollY;
        
        if( !ticking ) {
            window.requestAnimationFrame( function() {
                onScroll( lastPosition );
                ticking = false;
            });
            ticking = true;
        }
    });
})();

$(function() {
    $('.slide-fade').on('inview', function(event, isInView, visiblePartX, visiblePartY) {
        if (isInView) {
            $(this).stop().addClass('slide-fade-on');
        } else {
            //$(this).stop().removeClass('slide-fade-on');
        }
    });
});



var fadeConts = document.querySelectorAll('.fade-in'); // フェードさせる要素の取得
var fadeContsRect = []; // 要素の位置を取得するための配列
var fadeContsTop = []; // 要素の位置を取得するための配列
var windowY = window.pageYOffset; // ウィンドウのスクロール位置
var windowH = window.innerHeight; // ウィンドウの高さ
var remainder = 10; // ちょっとはみ出させる部分
// 要素の位置を取得
for (var i = 0; i < fadeConts.length; i++) {
  fadeContsRect.push(fadeConts[i].getBoundingClientRect());
}
for (var i = 0; i < fadeContsRect.length; i++) {
  fadeContsTop.push(fadeContsRect[i].top + windowY);
}
// ウィンドウがリサイズされたら、ウィンドウの高さを再取得
window.addEventListener('resize', function () {
  windowH = window.innerHeight;
});
// スクロールされたら
window.addEventListener('scroll', function () {
  // スクロール位置を取得
  windowY = window.pageYOffset;
  
  for (var i = 0; i < fadeConts.length; i++) {
    // 要素が画面の下端にかかったら
    if(windowY > fadeContsTop[i] - windowH + remainder) {
      // .showを付与
      fadeConts[i].classList.add('show');
    } else {
      // 逆に.showを削除
      fadeConts[i].classList.remove('show');
    }
  }
});

