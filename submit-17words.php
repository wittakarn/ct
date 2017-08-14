<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    require_once("config.php");
    require_once("connection.php");
    require_once(DOCUMENT_ROOT."class/Words17.php");
    require_once(DOCUMENT_ROOT."class/Alphabets17.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>submit</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>กรุณารอสักครู่</h1>
                <form id="form-submit" class="form-inline" action="random-string.php" method="get">
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                            $conn = DataBaseConnection::createConnect();
                            
                            try{
                                if(isset($_REQUEST['uuid'])){

                                    $conn->beginTransaction();

                                    $words = explode(" ", $_REQUEST['sentense']);
                                    $words17Index = 1;
                                    foreach($words as $word) {
                                        $words17 = new Words17($conn, $_REQUEST);
                                        $words17->create($_REQUEST['uuid'], $words17Index++, $word);
                                    }

                                    $jsonObj = json_decode($_REQUEST['json_string'], true);
                                    $alphabet17Index = 1;
                                    foreach($jsonObj as $item) {
                                        $alphabets17 = new Alphabets17($conn, $item);
                                        $alphabets17->create($_REQUEST['uuid'], $alphabet17Index++);
                                    }
                                    
                                    $conn->commit();
                                }
                            } catch (PDOException $e) {
                                $conn->rollBack();
                                echo "Failed: " . $e->getMessage();
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
<script src="js/jquery.js"></script>

<script type="text/javascript">
    $("#form-submit").submit();
</script>