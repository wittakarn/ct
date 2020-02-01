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

    <title>ข้อมูลทั่วไป</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ROOT; ?>css/questionnaire.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <h1>ข้อมูลทั่วไป</h1>
        <hr/>
        <div class="row">
            <div class="col-md-8">
                <form id="userInfoForm" action="submit-questionnaire-part1.php" method="post" class="form-horizontal" role="form">
                    <!-- gender -->
                    <div class="form-group">
                        <label class="col-xs-3 control-label">เพศ</label>
                        <div class="col-xs-9">
                            <input type="radio" name="gender" value="1" checked="true"> ชาย </input>
                        </div>
                        <div class="col-xs-3"></div>
                        <div class="col-xs-9">
                            <input type="radio" name="gender" value="2"> หญิง </input>
                        </div>
                    </div>
                    <!-- /.gender -->

                    <!-- age -->
                    <div class="form-group">
                        <label class="col-xs-3 control-label">อายุ</label>
                        <div class="col-xs-9">
                            <input type="radio" name="age" value="1" checked="true"> 10-25 </input>
                        </div>
                        <div class="col-xs-3"></div>
                        <div class="col-xs-9">
                            <input type="radio" name="age" value="2"> 26-40 </input>
                        </div>
                        <div class="col-xs-3"></div>
                        <div class="col-xs-9">
                            <input type="radio" name="age" value="3"> 41-60 </input>
                        </div>
                        <div class="col-xs-3"></div>
                        <div class="col-xs-9">
                            <input type="radio" name="age" value="4"> มากกว่า 60 </input>
                        </div>
                    </div>
                    <!-- /.age -->

                    <!-- education -->
                    <div class="form-group">
                        <label for="education" class="col-xs-3 control-label">ระดับการศึกษา</label>
                        <div class="col-xs-9">
                            <select class="form-control" name="education">
                                <option value="">======= โปรดระบุ =======</option>
                                <option value="1">ต่ำกว่าปริญญาตรี</option>
                                <option value="2">ปริญญาตรี</option>
                                <option value="3">ปริญญาโท</option>
                                <option value="4">ปริญญาเอก</option>
                                <option value="5">อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.education -->

                    <!-- occupation -->
                    <div class="form-group">
                        <label for="occupation" class="col-xs-3 control-label">อาชีพ</label>
                        <div class="col-xs-9">
                            <select class="form-control" name="occupation">
                                <option value="">======= โปรดระบุ =======</option>
                                <option value="1">นักเรียน/นักศึกษา</option>
                                <option value="2">ค้าขาย/ธุรกิจส่วนตัว</option>
                                <option value="3">รับจ้าง</option>
                                <option value="4">พนักงานบริษัท</option>
                                <option value="5">พนักงานรัฐวิสาหกิจ</option>
                                <option value="6">ข้าราชการ</option>
                                <option value="7">ว่างงาน/พ่อบ้าน/แม่บ้าน/เกษียณอายุ</option>
                                <option value="8">อื่นๆ</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.occupation -->

                    <!-- posture -->
                    <div class="form-group">
                        <label for="posture" class="col-xs-3 control-label">ท่าทาง(ขณะทำแบบทำสอบ)</label>
                        <div class="col-xs-9">
                            <select class="form-control" name="posture">
                                <option value="">======= โปรดระบุ =======</option>
                                <option value="1">นั่ง</option>
                                <option value="2">ยืน</option>
                                <option value="3">เดิน</option>
                            </select>
                        </div>
                    </div>
                    <!-- /.posture -->

                    <!-- button -->
                    <div class="row">
                        <div class="col-xs-5">
                            <button type="reset" class="form-control btn btn-default">เริ่มใหม่</button>
                        </div>
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-5">
                            <button type="submit" class="form-control btn btn-default">ยืนยัน</button>
                        </div>
                    </div>
                    <!-- /.button -->

                </form>
                <!-- /.form -->

            </div>
            <!-- /.class="col-md-8" -->



        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="<?php echo ROOT; ?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo ROOT; ?>js/bootstrap.min.js"></script>

    <script src="<?php echo ROOT; ?>js/jquery.validate.js"></script>

    <script src="<?php echo ROOT; ?>js/questionnaire.js"></script>

</body>

</html>