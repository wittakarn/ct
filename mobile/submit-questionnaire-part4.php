<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once("../config.php");
    require_once("../connection.php");
    require_once(DOCUMENT_ROOT."class/UserInformation.php");
    require_once(DOCUMENT_ROOT."class/Phone.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>submit</title>
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>กรุณารอสักครู่</h1>
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                        $conn = DataBaseConnection::createConnect();
                        
                            if(isset($_REQUEST['uuid'])){
                                $conn->beginTransaction();
                                
                                UserInformation::updatePhone($conn, $_REQUEST['uuid'], $_REQUEST['phone']);
                                $phone = new Phone($conn, $_REQUEST);
                                $phone->create();

                                UserInformation::updateRoundCount($conn, $_REQUEST['uuid']);
                                
                                $conn->commit();
                            }
                    }
                ?>
                <input type="hidden" name="uuid" value="<?php echo $_REQUEST['uuid']; ?>" />
            </div>
        </div>
    </div>
</body>

</html>
<!-- jQuery Version 1.11.1 -->
<script src="<?php echo ROOT; ?>js/jquery.js"></script>

<script type="text/javascript">
    setTimeout(function(){
        <?php
            $redirectUrl = ROOT."mobile/questionnaire-part2.php?uuid=".$_REQUEST['uuid'];
            if(isset($conn)){
                $roundCount = UserInformation::getRoundCount($conn, $_REQUEST['uuid']);
                if($roundCount == 10){
                    $redirectUrl = ROOT."mobile/thank-you.php";
                }
            }
        ?>
        window.location = "<?php echo $redirectUrl; ?>";
    }, 3000);
</script>