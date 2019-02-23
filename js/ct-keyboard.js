$(function () {
    $('#keyboard').keyboard({
        usePreview: false,
        alwaysOpen: true,
        lockInput: true,
        noFocus: true,
        display: {
            'bksp': "⌫",
            'accept': 'return',
            'normal': 'ABC',
            'meta1': '123',
            'meta2': '#+=',
            'space': 'space',
        },
        layout: 'custom',
        customLayout: {
            'normal': [
                'q w e r t y u i o p',
                'a s d f g h j k l',
                '{s} z x c v b n m {bksp}',
                '{meta1} {space} .'
            ],
            'shift': [
                'Q W E R T Y U I O P',
                'A S D F G H J K L',
                '{s} Z X C V B N M {bksp}',
                '{meta1} {space} .'
            ],
            'meta1': [
                '1 2 3 4 5 6 7 8 9 0',
                '- / : ; ( ) \u20ac & @',
                '{meta2} . , ? ! \' " {bksp}',
                '{normal} {space} .'
            ],
            'meta2': [
                '[ ] { } # % ^ * + =',
                '_ \\ | ~ < > $ \u00a3 \u00a5',
                '{meta1} . , ? ! \' " {bksp}',
                '{normal} {space} .'
            ]
        },
        visible: function (event, keyboard, el) {
            init();
        }
    });
});