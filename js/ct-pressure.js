var $pressureScale = $('#pressure-scale');
var keyboardButton = {
    start: function (event) {
        console.log('start', event);
        var timestamp = (new Date()).getTime();
        pressure = pressure.concat({
            value: $(this).attr('data-value'),
            keyDown: timestamp,
            offsetX: new Number(event.layerX).toFixed(2),
            offsetY: new Number(event.layerY).toFixed(2),
            pageX: new Number(event.pageX).toFixed(2),
            pageY: new Number(event.pageY).toFixed(2)
        });
    },

    change: function (force, event) {
        // event.preventDefault();
        $pressureScale.css('width', $.pressureMap(force, 0, 1, 200, 300) + 'px');
        $pressureScale.html(force);
        pressure[typeIndex].force = new Number(force).toFixed(8);
    },

    startDeepPress: function (event) {
        $pressureScale.css('background-color', '#FF0040');
    },

    endDeepPress: function () {
        $pressureScale.css('background-color', '#0080FF');
    },

    end: function (event) {
        $pressureScale.css('width', '200px');
        $pressureScale.html(0);
        var timestamp = (new Date()).getTime();
        pressure[typeIndex].keyUp = timestamp;
        typeIndex += 1;
        console.log(pressure);
    },

    unsupported: function () {
        console.log(this);
        $pressureScale.html('Your device / browser does not support this :(');;
    }
}