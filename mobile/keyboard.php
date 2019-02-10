<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/css/index.css">
  <style id="/src/index.css:-css" type="text/css">
    input {
      width: 100%;
      height: 100px;
      padding: 20px;
      font-size: 20px;
      border: none;
      box-sizing: border-box;
    }

    /**
    * hg-theme-default theme
    */
    .simple-keyboard.hg-theme-ios {
      margin: auto;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-row .hg-button {
      flex-grow: 1;
      cursor: pointer;
    }

    .simple-keyboard.hg-theme-ios .hg-row {
      display: flex;
    }

    .simple-keyboard.hg-theme-ios .hg-row:not(:last-child) {
      margin-bottom: 5px;
    }

    .simple-keyboard.hg-theme-ios .hg-row .hg-button:not(:last-child) {
      margin-right: 5px;
    }

    .simple-keyboard.hg-theme-ios .hg-row:nth-child(2) {
      margin-left: 18px;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default {
      background-color: rgba(0, 0, 0, 0.1);
      padding: 5px;
      border-radius: 5px;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default.hg-layout-custom {
      background-color: #e5e5e5;
      padding: 5px;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button {
      border-radius: 5px;
      box-sizing: border-box;
      padding: 0;
      background: white;
      border-bottom: 1px solid #b5b5b5;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: none;
      font-weight: 400;
      font-size: 20px;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button:active,
    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button:focus {
      background: #e4e4e4;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button.hg-functionBtn {
      background-color: #adb5bb;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button.hg-button-space,
    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button.hg-button-shift,
    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button.hg-button-shiftactivated {
      background-color: #ffffff;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button.hg-button-alt,
    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button.hg-button-enter {
      flex-grow: 1;
    }

    .simple-keyboard.hg-theme-ios.hg-theme-default .hg-button.hg-button-space {
      flex-grow: 5;
    }

    .input-text {
      height: 30px;
      border: 1px solid black;
      font-size: 25px;
    }
  </style>
</head>

<body>
  <div class="input-text" placeholder="Tap on the virtual keyboard to start"></div>
  <div class="simple-keyboard hg-theme-default hg-theme-ios hg-layout-default"></div>
  <script src="https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/index.min.js"></script>
  <script>
    let Keyboard = window.SimpleKeyboard.default;

    let keyboard = new Keyboard({
      onChange: input => onChange(input),
      onKeyPress: button => onKeyPress(button),
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

    console.log(keyboard);

    function onChange(input) {
      document.querySelector(".input-text").innerHTML = input;
      console.log("Input changed", input);
    }

    function onKeyPress(button) {
      console.log("Button pressed", button);

      /**
       * Handle toggles
       */
      if (button.includes("{") && button.includes("}")) {
        handleLayoutChange(button);
      }
    }

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
  </script>
</body>

</html>