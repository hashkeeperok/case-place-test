function canvasInit(canvas) {
    canvas.width = 1000;
    canvas.height = 1000;
    canvas.style.backgroundColor = '#d1cbf8';
}

function toRad(num) {
    return num * Math.PI / 180;
}

function drawRectInCenter(canvas, context, width, height, color, angle) {
    context.clearRect(0, 0, canvas.width, canvas.height);

    const x = canvas.width / 2 - width / 2;
    const y = canvas.height / 2 - height / 2;

    if (angle) {
        const radAngle = toRad(angle);
        const dx = canvas.width / 2;
        const dy = canvas.height / 2;

        context.save();
        context.translate(dx, dy);
        context.rotate(radAngle);
        context.translate(-dx, -dy);
    }

    context.fillStyle = color;
    context.fillRect(x, y, width, height);

    if (angle) {
        context.restore();
    }
}

$(function () {
    $('#task1Form button').on('click', function (e) {
        e.preventDefault();

        $.get('/task1?text=' + $('#testText').val(), function (data) {
            let resText = "";

            for (const [key, value] of Object.entries(data)) {
                resText += key + ': ' + value + '<br>';
            }
            $('#testResult').html(resText);
        });
    });


    const canvas = document.getElementById('testCanvas');
    canvasInit(canvas);

    const context = canvas.getContext('2d');
    drawRectInCenter(canvas, context, 200, 100, '#2812ba');

    $('#task2Form button').on('click', function (e) {
        e.preventDefault();
        drawRectInCenter(canvas, context, 300, 100, '#2812ba', 45);
    });
});
