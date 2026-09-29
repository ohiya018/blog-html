// =========================
// 泡・トップページ用の処理
// =========================

const bubbleArea = document.querySelector(".bubble-area");
const scrollButton = document.querySelector(".scroll");
const mainvisual = document.querySelector(".mainvisual");


// =========================
// トップページにだけ実行
// =========================

if (bubbleArea && mainvisual) {

    // =========================
    // 泡を作る
    // =========================

    function createBubble() {

        // 泡を作る
        const bubble = document.createElement("span");

        // bubbleクラスを付ける
        bubble.classList.add("bubble");


        // =========================
        // 泡の大きさ
        // =========================

        const minSize = 10;
        const maxSize = 80;

        const size =
            Math.random() * (maxSize - minSize) + minSize;

        bubble.style.width = `${size}px`;
        bubble.style.height = `${size}px`;


        // =========================
        // 泡の横位置
        // =========================

        const position = Math.random() * 100;

        bubble.style.left = `${position}%`;


        // =========================
        // 泡が上がる時間
        // =========================

        const duration = Math.random() * 4 + 6;

        bubble.style.animationDuration = `${duration}s`;


        // =========================
        // 泡を追加
        // =========================

        bubbleArea.appendChild(bubble);


        // =========================
        // 泡を削除
        // =========================

        setTimeout(() => {

            bubble.remove();

        }, duration * 1000);
    }


    // =========================
    // 0.7秒ごとに泡を作る
    // =========================

    setInterval(() => {

        createBubble();

    }, 700);


    // =========================
    // Scrollボタン
    // =========================

    if (scrollButton) {

        scrollButton.addEventListener("click", function (e) {

            e.preventDefault();

            document.querySelector("#blog").scrollIntoView({
                behavior: "smooth"
            });

        });

    }
}


// =========================
// Page Top
// =========================

const pageTop = document.querySelector(".pagetop");

if (pageTop && mainvisual) {

    window.addEventListener("scroll", function () {

        if (window.scrollY >= mainvisual.offsetHeight) {

            pageTop.classList.add("show");

        } else {

            pageTop.classList.remove("show");

        }

    });

}