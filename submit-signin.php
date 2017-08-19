<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once("config.php");
    require_once("connection.php");
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
                <form id="form-submit" class="form-inline" action="17words.php" method="get">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $conn = DataBaseConnection::createConnect();
                            
                            try{
                                if(isset($_REQUEST['email'])){
                                    $user = User::get($conn, $_REQUEST['email']);
                                    $isFailed = true;
                                    if($user != null && $user["password"] == $_REQUEST['password']){
                                        $isFailed = false;
                                        $uuid = uniqid();

                                        $userKey = new UserKey($conn, $_REQUEST);
                                        $userKey->create($uuid);
                                    }
                                }

                                if($isFailed){
                                    echo "<h2>Email หรือ Password ผิดกรุณาลองอีกครั้ง</h2>";
                                }else{
                                    echo "<h2>กรุณารอซักครู่</h2>";
                                    echo "<input type='hidden' name='uuid' value=".$uuid." />";
                                }
                            } catch (PDOException $e) {
                                $conn->rollBack();
                                echo "Failed: " . $e->getMessage();
                            }
                            $conn = null;
                        }
                    ?>
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
        if($isFailed){
            echo "form.attr('action', 'index.php');";
        }
    ?>
    setTimeout(function(){
        form.submit();
    }, 3000);
</script>