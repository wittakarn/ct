var $pressureScale = $('#pressure-scale');
var keyboardButton = {
    start: function (event) {
        console.log('start', event);
    },

    change: function (force, event) {
        // event.preventDefault();
        $pressureScale.css('width', $.pressureMap(force, 0, 1, 200, 300) + 'px');
        $pressureScale.html(force);
        console.log('change', force);
    },

    startDeepPress: function (event) {
        console.log('start deep press', event);
        $pressureScale.css('background-color', '#FF0040');
    },

    endDeepPress: function () {
        console.log('end deep press');
        $pressureScale.css('background-color', '#0080FF');
    },

    end: function () {
        console.log('end');
        $pressureScale.css('width', '200px');
        $pressureScale.html(0);
    },

    unsupported: function () {
        console.log(this);
        $pressureScale.html('Your device / browser does not support this :(');;
    }
}
