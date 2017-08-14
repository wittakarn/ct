<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once("config.php");
    require_once("connection.php");
    require_once(DOCUMENT_ROOT."class/UserInformation.php");
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
                        $uuid = uniqid();
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $conn = DataBaseConnection::createConnect();
                            
                            try{
                                if(isset($_REQUEST['name'])){
                                    $conn->beginTransaction();

                                    $userInfo = new UserInformation($conn, $_REQUEST);
                                    $userInfo->create($uuid);
                                    
                                    $conn->commit();
                                }
                            } catch (PDOException $e) {
                                $conn->rollBack();
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
    $("#form-submit").submit();
</script>