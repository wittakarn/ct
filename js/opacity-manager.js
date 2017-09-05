var OpacityManager = (function () {
    var sliderElement = $("#opacity-slider"),
        init = function () {
            bindEvent();
        },
        bindEvent = function () {
            sliderElement.slider({
                orientation: "horizontal",
                range: "min",
                max: 1,
                min: 0,
                value: 0,
                step: 0.15,
                slide: updateOpacity,
                create: displayScale,
            });
        }
        displayScale = function(){
            var scaleWidth = $(".ui-slider").width() / 6;
            for (var i = 0; i < 7; i++) {
                var el = $('<label>'+(i * 15) / 100+'</label>').css('left',(scaleWidth * i)+'px');
                sliderElement.append(el);
            }
        },
        updateOpacity = function (event, ui) {
            var opacity = ui.value;
            $(".color-word").css('opacity', opacity)
            $(".overlay").css('opacity', 1 - opacity)
            $("#opacityBackground").val(opacity);
        };

    return {
        init: init,
    };
})();

OpacityManager.init();