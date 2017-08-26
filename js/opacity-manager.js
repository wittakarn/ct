var OpacityManager = (function () {
    var init = function () {
            bindEvent();
        },
        bindEvent = function () {
            $("#opacitySlider").slider({
                orientation: "horizontal",
                range: "min",
                max: 1,
                value: 0,
                step: 0.005,
                slide: updateOpacity,
            });
        },
        updateOpacity = function (event, ui) {
            $("#wording").css('background-color', 'rgba(0,0,0,' + ui.value + ')')
            $("#opacityBackground").val(ui.value);
        };

        return {
            init: init,
        };
})();

OpacityManager.init();