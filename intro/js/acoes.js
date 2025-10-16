window.onload = function () {
    const gif = document.getElementById('gifGambiarra');
    let isMoving = false;
    let moveTimeout;

    document.onmousemove = function (event) {
        gif.style.left = (event.pageX - 105) + 'px';
        gif.style.top = (event.pageY - 40) + 'px';

        if (!isMoving) {
            gif.src = 'img/img2.gif';
            isMoving = true;
        }

        clearTimeout(moveTimeout);
        moveTimeout = setTimeout(() => {
            gif.src = 'img/img1.webp';
            isMoving = false;
        }, 100); // 100ms parado troca o gato
    };
};