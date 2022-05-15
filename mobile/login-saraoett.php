<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once("../config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <link href="<?php echo ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ROOT; ?>css/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo ROOT; ?>css/questionnaire.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROOT; ?>css/keyboard.css">
    <link rel="stylesheet" href="<?php echo ROOT; ?>css/ct-keyboard.css">
    <style>
        h2 {
            text-align: center;
            margin: 10px;
        }
        #eventInput {
            overflow-wrap: break-word;
        }
        .gender-wrapper {
            text-align: center;
        }
        .radio-wrapper {
            padding: 15px;
            display: inline-block;
        }
    </style>
</head>

<body>
    <div class="gender-wrapper">
        <span class="radio-wrapper">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>
        </span>
        <span class="radio-wrapper">
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
        </span>
    </div>
    <hr/>
    <h2>saraoett</h2>
    <input id="keyboard" type="text" name="user">
    <!-- button -->
    <div class="row">
        <div class="col-xs-5">
            <button type="reset" class="form-control btn btn-default" onclick="location.reload();">เริ่มใหม่</button>
        </div>
        <div class="col-xs-2">
        </div>
        <div class="col-xs-5">
            <button id="validateButton" type="button" class="form-control btn btn-default">ยืนยัน</button>
        </div>
    </div>
    <!-- /.button -->
    <div id="pressure-scale">0</div>
    <div id="eventInput"></div>
    <div id="result-template"></div>

    <script src="<?php echo ROOT; ?>js/jquery.js"></script>
    <script src="<?php echo ROOT; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo ROOT; ?>js/jquery.pressure.js"></script>
    <script src="<?php echo ROOT; ?>js/jquery.keyboard.js"></script>
    <script src="<?php echo ROOT; ?>js/ct-keyboard.js"></script>
    <script src="<?php echo ROOT; ?>js/ct-pressure.js"></script>
    <script src="<?php echo ROOT; ?>js/ct-touch.js?121"></script>
    <script src="<?php echo ROOT; ?>js/login-saraoett.js?1"></script>
    <script>
        var typeIndex = 0;
        var touchs = [];
    </script>
</body>

</html>