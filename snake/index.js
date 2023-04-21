const canvasEl = document.getElementById("canvas");
const ctx = canvasEl.getContext("2d");

class Snake {
    constructor(){
        this.eatedCount = 0
        this.x = 50,
        this.y
    }

    draw() {
        ctx.beginPath();
        ctx.fillStyle = "red";
        ctx.fillRect(20, 20, 20, 20);
        ctx.closePath();
    }
}

function drawFood() {
    ctx.beginPath();
    ctx.fillStyle = "red";
    ctx.fillRect(20, 20, 20, 20);
    ctx.closePath();
}

function gameLoop() {
    drawFood();
}

window.requestAnimationFrame(gameLoop);