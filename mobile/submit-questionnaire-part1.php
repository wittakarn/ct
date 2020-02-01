<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once("../config.php");
    require_once("../connection.php");
    require_once(DOCUMENT_ROOT."class/UserInformation.php");
    require_once(DOCUMENT_ROOT."class/User.php");
    require_once(DOCUMENT_ROOT."class/UserKey.php");
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
                <form id="form-submit" class="form-inline" action="questionnaire-part2.php" method="get">
                    <?php
                        $createUserFailed = false;
                        $uuid = uniqid();
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $conn = DataBaseConnection::createConnect();
                            
                            try{
                                if(isset($_REQUEST['age'])){
                                    $conn->beginTransaction();
                                    
                                    $userInfo = new UserInformation($conn, $_REQUEST);
                                    $userInfo->createInfoForMobile($uuid);
                                    
                                    $conn->commit();
                                }
                            } catch (PDOException $e) {
                                $createUserFailed = true;
                                echo "Failed: " . $e->getMessage();
                            }
                            $conn = null;
                        }
                    ?>
                    <input type="hidden" name="uuid" value="<?php echo $uuid?>" />
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
        if($createUserFailed){
            echo "form.attr('action', 'questionnaire-part1.php');";
        }
    ?>
    setTimeout(function(){
        form.submit();
    }, 3000);
</script>