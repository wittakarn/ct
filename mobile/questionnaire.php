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
                <form id="userInfoForm" action="submit-questionnaire.php" method="post" class="form-horizontal" role="form">

                    <!-- name -->
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">ชื่อ-นามสกุล</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" placeholder="Name" autofocus="true">
                        </div>
                    </div>
                    <!-- /.name -->

                    <!-- email -->
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <!-- /.email -->

                    <!-- password -->
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">รหัสผ่าน</label>
                        <div class="col-sm-9">
                            <input type="password" id="ps" name="password" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <!-- /.password -->

                    <!-- confirm password -->
                    <div class="form-group">
                        <label for="confirm_password" class="col-sm-3 control-label">ยืนยันรหัสผ่าน</label>
                        <div class="col-sm-9">
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password">
                        </div>
                    </div>
                    <!-- /.confirm password -->

                    <!-- phone -->
                    <div class="form-group">
                        <label for="phone" class="col-sm-3 control-label">เบอร์โทรศัพท์</label>
                        <div class="col-sm-9">
                            <input type="text" name="phone" class="form-control" placeholder="Telephone">
                        </div>
                    </div>
                    <!-- /.phone -->

                    <!-- gender -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">เพศ</label>
                        <div class="col-sm-9">
                            <input type="radio" name="gender" value="1" checked="true"> ชาย </input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input type="radio" name="gender" value="2"> หญิง </input>
                        </div>
                    </div>
                    <!-- /.gender -->

                    <!-- age -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">อายุ</label>
                        <div class="col-sm-9">
                            <input type="radio" name="age" value="1" checked="true"> 10-25 </input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input type="radio" name="age" value="2"> 26-40 </input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input type="radio" name="age" value="3"> 41-60 </input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input type="radio" name="age" value="4"> มากกว่า 60 </input>
                        </div>
                    </div>
                    <!-- /.age -->

                    <!-- education -->
                    <div class="form-group">
                        <label for="education" class="col-sm-3 control-label">ระดับการศึกษา</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="education">
                                <option value="">============== โปรดระบุ ==============</option>
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
                        <label for="occupation" class="col-sm-3 control-label">อาชีพ</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="occupation">
                                <option value="">============== โปรดระบุ ==============</option>
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

                    <!-- button -->
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="reset" class="btn btn-default">เริ่มใหม่</button>
                        <button type="submit" class="btn btn-default">ยืนยัน</button>
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