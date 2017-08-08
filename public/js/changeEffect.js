$('#eimg').on('click', changeIMG);

var img = new Array();

// 配列に画像を格納
img[0] = new Image();
img[0].src = "/system_lara/public/image/effectsIMG/PlusEffect.png";
img[1] = new Image();
img[1].src = "/system_lara/public/image/effectsIMG/MinusEffect.png";

// クリックカウント用関数
var cnt = 0;

// 画像を切り替える関数
function changeIMG() {
    if (cnt == 1) {
        cnt = 0;
    } else {
        cnt++;
    }
    this.src = img[cnt].src;
}
