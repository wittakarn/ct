<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once("config.php");
    require_once(DOCUMENT_ROOT."class/WordsGenerator.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fix letters test</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/display-sentense.css" rel="stylesheet">
    </style>
</head>

<body>
    <div class="container">
        <h1>Fix letters test</h1>
        <hr/>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <p id="wording">
                        <?php
                            $sentense = WordsGenerator::fixLettersGenerator();
                            echo $sentense;
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea rows="3" class="form-control" id="showTyping" readonly>
                    </textarea>
                </div>
            </div>
            <div class="col-md-12">
                <form class="form-inline" method="post" action="submit-fix-letters.php">
                    <input type="hidden" name="json_string" id="jsonString" style="width: 100%; height: 200px;"/>
                    <input type="hidden" name="sentense" value="<?php echo $sentense; ?>" />
                    <input type="hidden" name="uuid" value="<?php echo $_REQUEST['uuid']; ?>" />
                    <button type="button" class="btn btn-primary pull-right" tabindex="-1">ยืนยัน</button>
                </form>
            </div>
        </div>
    </div>
    <?php
        include("info-modal.php");
    ?>
</body>

</html>
<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script src="js/keyevent.js"></script>
<!-- reference file js ใน folder js หน้า key event -->
<script src="js/info-modal.js"></script>