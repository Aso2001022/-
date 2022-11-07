const bgm1 = document.querySelector("#bgm1");       // <audio>
const btn  = document.querySelector("#btn-play");   // <button>

btn.addEventListener("click", ()=>{
    // pausedがtrue=>停止, false=>再生中
    if( ! bgm1.paused ){
        btn.innerHTML = '<i class="fas fa-play"></i>';  // 「再生ボタン」に切り替え
        bgm1.pause();
    }
    else{
        btn.innerHTML = '<i class="fas fa-pause"></i>';  // 「一時停止ボタン」に切り替え
        bgm1.play();
    }
});

/**
 * [event] 再生終了時に実行
 */
bgm1.addEventListener("ended", ()=>{
    bgm1.currentTime = 0;  // 再生位置を先頭に移動(こいつはなくても大丈夫です)
    btn.innerHTML = '<i class="fas fa-play"></i>';  // 「再生ボタン」に変更
});