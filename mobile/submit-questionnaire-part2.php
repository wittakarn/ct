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
                <form id="form-submit" class="form-inline" action="questionnaire-part3.php" method="get">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $conn = DataBaseConnection::createConnect();
                            
                                if(isset($_REQUEST['email'])){
                                    $conn->beginTransaction();
                                    
                                    UserInformation::updatePhone($conn, $_REQUEST['email'], $_REQUEST['phone']);
                                    $phone = new Phone($conn, $_REQUEST);
                                    $phone->create();
                                    
                                    $conn->commit();
                                }
                            $conn = null;
                        }
                    ?>
                    <input type="hidden" name="uuid" value="<?php echo $_REQUEST['uuid']; ?>" />
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!-- jQuery Version 1.11.1 -->
<script src="<?php echo ROOT; ?>js/jquery.js"></script>

<script type="text/javascript">
    var form = $("#form-submit");
    <?php
        if($duplicateUser != null || $createUserFailed){
            echo "form.attr('action', 'questionnaire.php');";
        }
    ?>
    setTimeout(function(){
        form.submit();
    }, 3000);
</script>