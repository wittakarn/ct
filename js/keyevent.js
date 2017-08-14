var charIndex = 1;
var Keystroke = function (keyCode, time1, time2, time3) {
  this.keyCode = keyCode;
  this.time1 = time1;
  this.time2 = time2;
  this.time3 = time3;
};

var inputElement = $("body");
var showInput = $("#showTyping");
var storageJsonString = $("#jsonString");
var submitButton = $("button.btn-primary.pull-right");
var keystrokeArray = [];
var startIndex = 1;
var keyDownTime;
var keyPressTime;
var keyUpTime;

function addNewKeyCodeToJson(code, keyDownTime, keyPressTime, keyUpTime) {
  keystrokeArray.push(new Keystroke(code, keyDownTime, keyPressTime, keyUpTime));
  keyDownTime = null;
  keyPressTime = null;
  keyUpTime = null;
  storageJsonString.val(JSON.stringify(keystrokeArray));
}

function removeLastShowTyping(code) {
  if (code === 8 || code === 48) {
    var text = showInput.val();
    var textLength = text.length;
    if (textLength > 0) {
      showInput.val(text.substring(0, textLength - 1));
    }
  }
}

function addShowTyping(code) {
  if (code !== 8 && code !== 13 && code !== 48) {
    var text = showInput.val();
    text = text.concat(String.fromCharCode(code));
    showInput.val(text);
  }
}

function onload() {

  showInput.val("");

  submitButton.click(function (event) {
    if (showInput.val().length < 20) {
      alert("กรุณาพิมพ์คำให้ครบ ก่อนกดปุ่มยืนยัน");
    }else{
      $("form").submit();
    }
  })

  inputElement.keydown(function (event) {
    var code = event.keyCode;
    if (code >= 65 && code <= 111) {
      keyDownTime = (new Date()).getTime();
    }
    if (code === 32) {
      addNewKeyCodeToJson(code, (new Date()).getTime(), null, null);
    }
  });


  inputElement.keypress(function (event) {
    var code = event.keyCode;
    if (code >= 65 && code <= 111) {
      keyPressTime = (new Date()).getTime();
    }
  });

  inputElement.keyup(function (event) {
    var code = event.keyCode;

    if (code >= 65 && code <= 111) {
      keyUpTime = (new Date()).getTime();
      addNewKeyCodeToJson(code, keyDownTime, keyPressTime, keyUpTime);
    }
  });

  inputElement.keypress(function (event) {
    addShowTyping(event.keyCode);
  });

  inputElement.keydown(function (event) {
    removeLastShowTyping(event.keyCode);
  });
}

onload();