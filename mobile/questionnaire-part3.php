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

    <title>เบอร์โทรศัพท์</title>
    <link href="<?php echo ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ROOT; ?>css/jquery-ui.css" rel="stylesheet">
    <link href="<?php echo ROOT; ?>css/questionnaire.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROOT; ?>css/keyboard.css">
    <link rel="stylesheet" href="<?php echo ROOT; ?>css/ct-keyboard.css">
    <style>
        h1 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h1>Email</h1>
    <form id="userInfoForm" action="submit-questionnaire-part3.php" method="post" role="form">

        <input id="keyboard" type="text" name="email">
        <!-- button -->
        <div class="row">
            <div class="col-xs-5">
                <button type="reset" class="form-control btn btn-default" onclick="location.reload();">เริ่มใหม่</button>
            </div>
            <div class="col-xs-2">
            </div>
            <div class="col-xs-5">
                <button id="submitButton" type="button" class="form-control btn btn-default">ยืนยัน</button>
            </div>
        </div>
        <!-- /.button -->
        <div id="pressure-scale">0</div>
        <input type="hidden" name="uuid" value="<?php echo $_REQUEST['uuid']?>" />
        <input type="hidden" id="eventInput" name="eventData" />
    </form>

    <script src="<?php echo ROOT; ?>js/jquery.js"></script>
    <script src="<?php echo ROOT; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo ROOT; ?>js/jquery.pressure.js"></script>
    <script src="<?php echo ROOT; ?>js/jquery.keyboard.js"></script>
    <script src="<?php echo ROOT; ?>js/gyronorm.complete.min.js"></script>
    <script src="<?php echo ROOT; ?>js/ct-gyronorm.js"></script>
    <script src="<?php echo ROOT; ?>js/ct-keyboard.js"></script>
    <script src="<?php echo ROOT; ?>js/ct-pressure.js"></script>
    <script src="<?php echo ROOT; ?>js/ct-touch.js"></script>
    <script src="<?php echo ROOT; ?>js/questionnaire-part3.js"></script>
    <script>
        var typeIndex = 0;
        var touchs = [];
        var gyroNorm = {};
    </script>
</body>

</html>