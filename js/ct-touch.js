function initTouch() {
    $('.ui-keyboard-button').on({
        'touchstart': function (event) {
            var original = event.originalEvent;
            var touch = original.changedTouches && original.changedTouches.length > 0 ? original.changedTouches.item(0) : null;
            touchs = touchs.concat({
                value: $(this).attr('data-value'),
                keyDown: (new Date()).getTime(),
                offsetX: new Number(original.layerX).toFixed(2),
                offsetY: new Number(original.layerY).toFixed(2),
                pageX: new Number(touch.pageX).toFixed(2),
                pageY: new Number(touch.pageY).toFixed(2),

                radius: new Number(touch.radiusX).toFixed(2),

                doAlpha: new Number(gyroNorm.do.alpha).toFixed(2),
                doBeta: new Number(gyroNorm.do.beta).toFixed(2),
                doGamma: new Number(gyroNorm.do.gamma).toFixed(2),
                doAbsolute: new Number(gyroNorm.do.absolute).toFixed(2),

                dmX: new Number(gyroNorm.dm.x).toFixed(2),
                dmY: new Number(gyroNorm.dm.y).toFixed(2),
                dmZ: new Number(gyroNorm.dm.z).toFixed(2),

                dmGx: new Number(gyroNorm.dm.gx).toFixed(2),
                dmGy: new Number(gyroNorm.dm.gy).toFixed(2),
                dmGz: new Number(gyroNorm.dm.gz).toFixed(2),

                dmAlpha: new Number(gyroNorm.dm.alpha).toFixed(2),
                dmBeta: new Number(gyroNorm.dm.beta).toFixed(2),
                dmGamma: new Number(gyroNorm.dm.gamma).toFixed(2),
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