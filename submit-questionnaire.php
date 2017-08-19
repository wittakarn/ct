<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once("config.php");
    require_once("connection.php");
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
                <form id="form-submit" class="form-inline" action="17words.php" method="get">
                    <?php
                        $createUserFailed = false;
                        $uuid = uniqid();
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $conn = DataBaseConnection::createConnect();
                            
                            try{
                                if(isset($_REQUEST['name'])){
                                    $duplicateUser = User::get($conn, $_REQUEST['email']);
                                    if($duplicateUser == null){
                                        $conn->beginTransaction();
                                        
                                        $userInfo = new UserInformation($conn, $_REQUEST);
                                        $userInfo->create($uuid);
    
                                        $user = new User($conn, $_REQUEST);
                                        $user->create($uuid);

                                        $userKey = new UserKey($conn, $_REQUEST);
                                        $userKey->create($uuid);
                                        
                                        $conn->commit();
                                    }else{
                                        echo "<h2>ในระบบมี Email ที่ท่านระบุแล้ว กรุณาใช้ Email อื่น</h2>";
                                    }
                                }
                            } catch (PDOException $e) {
                                if($duplicateUser == null){
                                    $conn->rollBack();
                                }
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
<script src="js/jquery.js"></script>

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