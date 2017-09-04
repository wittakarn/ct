var OpacityManager = (function () {
    var handleElement = $("#custom-handle"),
        init = function () {
            bindEvent();
        },
        bindEvent = function () {
            $("#opacitySlider").slider({
                orientation: "horizontal",
                range: "min",
                max: 1,
                value: 0,
                step: 0.15,
                slide: updateOpacity,
            });
            handleElement.text(0);
        },
        updateOpacity = function (event, ui) {
            var opacity = ui.value;
            $(".color-word").css('opacity', opacity)
            $(".overlay").css('opacity', 1 - opacity)
            $("#opacityBackground").val(opacity);
            handleElement.text(opacity);
        };

    return {
        init: init,
    };
})();

OpacityManager.init();