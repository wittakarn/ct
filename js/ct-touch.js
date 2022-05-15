function initTouch() {
    $('.ui-keyboard-button').on({
        'touchstart': function (event) {
            var originalEvent = event.originalEvent;
            var changedTouche = originalEvent.changedTouches && originalEvent.changedTouches.length > 0 ? originalEvent.changedTouches.item(0) : null;

            var touch = originalEvent && originalEvent.touches && originalEvent.touches[0];
            var e = touch || event;
            var offset = $(e.target).offset();

            var offsetX = originalEvent.layerX || e.pageX - offset.left;
            var offsetY = originalEvent.layerY || e.pageY - offset.top;
            
            touchs = touchs.concat({
                value: $(this).attr('data-value'),
                keyDown: (new Date()).getTime(),
                offsetX: new Number(offsetX).toFixed(2),
                offsetY: new Number(offsetY).toFixed(2),
                pageX: new Number(changedTouche.pageX).toFixed(2),
                pageY: new Number(changedTouche.pageY).toFixed(2),

                radius: new Number(changedTouche.radiusX).toFixed(2),

                doAlpha: 0,
                doBeta: 0,
                doGamma: 0,
                doAbsolute: 0,

                dmX: 0,
                dmY: 0,
                dmZ: 0,

                dmGx: 0,
                dmGy: 0,
                dmGz: 0,

                dmAlpha: 0,
                dmBeta: 0,
                dmGamma: 0,

                // doAlpha: new Number(gyroNorm.do.alpha).toFixed(2),
                // doBeta: new Number(gyroNorm.do.beta).toFixed(2),
                // doGamma: new Number(gyroNorm.do.gamma).toFixed(2),
                // doAbsolute: new Number(gyroNorm.do.absolute).toFixed(2),

                // dmX: new Number(gyroNorm.dm.x).toFixed(2),
                // dmY: new Number(gyroNorm.dm.y).toFixed(2),
                // dmZ: new Number(gyroNorm.dm.z).toFixed(2),

                // dmGx: new Number(gyroNorm.dm.gx).toFixed(2),
                // dmGy: new Number(gyroNorm.dm.gy).toFixed(2),
                // dmGz: new Number(gyroNorm.dm.gz).toFixed(2),

                // dmAlpha: new Number(gyroNorm.dm.alpha).toFixed(2),
                // dmBeta: new Number(gyroNorm.dm.beta).toFixed(2),
                // dmGamma: new Number(gyroNorm.dm.gamma).toFixed(2),
            });
        }
    });

    $('.ui-keyboard-button').on({
        'touchend': function () {
            touchs[typeIndex].keyUp = (new Date()).getTime();
            typeIndex += 1;
            console.log(touchs);
        }
    });
}