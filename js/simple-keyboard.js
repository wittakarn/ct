var Keyboard = window.SimpleKeyboard.default;

var keyboard = new Keyboard({
    onChange: input => onChange(input),
    onKeyPress: button => onKeyPress(button),
    useTouchEvents: true,
    debug: false,
    useButtonTag: true,
    theme: "hg-theme-default hg-theme-ios",
    layout: {
        default: [
            "q w e r t y u i o p",
            "a s d f g h j k l",
            "{shift} z x c v b n m {bksp}",
            "{alt} {space} {enter}"
        ],
        shift: [
            "Q W E R T Y U I O P",
            "A S D F G H J K L",
            "{shiftactivated} Z X C V B N M {bksp}",
            "{alt} {space} {enter}"
        ],
        alt: [
            "1 2 3 4 5 6 7 8 9 0",
            `@ # $ & * ( ) ' " , .`,
            "{shift} % - + = / ; : ! ? {bksp}",
            "{default} {space} {enter}"
        ]
    },
    display: {
        "{alt}": "123",
        "{shift}": "⇧",
        "{shiftactivated}": "⇧",
        "{enter}": "return",
        "{bksp}": "⌫",
        "{space}": " ",
        "{default}": "ABC",
    }
});

function handleLayoutChange(button) {
    let currentLayout = keyboard.options.layoutName;
    let layoutName;

    switch (button) {
        case "{shift}":
        case "{shiftactivated}":
        case "{default}":
            layoutName = currentLayout === "default" ? "shift" : "default";
            break;

        case "{alt}":
            layoutName = currentLayout === "alt" ? "default" : "alt";
            break;

        default:
            break;
    }

    if (layoutName) {
        keyboard.setOptions({
            layoutName: layoutName
        });
    }
}