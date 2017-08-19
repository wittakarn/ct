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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/questionnaire.css" rel="stylesheet">
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

                    <!-- faculty -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อคณะที่กำลังศีกษาหรือเคยเรียนอยู่</label>
                        <div class="col-sm-9">
                        <select class="form-control" name="faculty">
                            <option value="1">ครุศาสตร์</option>
                            <option value="2">จิตวิทยา</option>
                            <option value="3">ทันตแพทยศาสตร์</option>
                            <option value="4">นิติศาสตร์</option>
                            <option value="5">นิเทศศาสตร์</option>
                            <option value="6">พยาบาลศาสตร์</option>
                            <option value="7">พาณิชยศาสตร์และการบัญชี</option>
                            <option value="8">แพทยศาสตร์</option>
                            <option value="9">เภสัชศาสตร์</option>
                            <option value="10">รัฐศาสตร์</option>
                            <option value="11">วิทยาศาสตร์</option>
                            <option value="12">วิศวกรรมศาสตร์</option>
                            <option value="13">ศิลปกรรมศาสตร์</option>
                            <option value="14">เศรษฐศาสตร์</option>
                            <option value="15">สถาปัตยกรรมศาสตร์</option>
                            <option value="16">สหเวชศาสตร์</option>
                            <option value="17">สัตวแพทยศาสตร์</option>
                        </select>
                        </div>
                    </div>
                    <!-- /.faculty -->

                    <!-- favorite color -->
                    <div class="form-group">
                        <label for="favoriteColor" class="col-sm-3 control-label">รูปแบบที่ชอบ</label>
                        <div class="col-sm-9">
                        <input id="colorGroup1" type="radio" name="favoriteColor" value="#FF0000,#00FF00"></input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input id="colorGroup2" type="radio" name="favoriteColor" value="#FFFF00,#FF00FF"></input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input id="colorGroup3" type="radio" name="favoriteColor" value="#00FF00,#FF0000"></input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input id="colorGroup4" type="radio" name="favoriteColor" value="#00FFFF,#FF4000"></input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input id="colorGroup5" type="radio" name="favoriteColor" value="#0000FF,#FF8000"></input>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <input id="colorGroup6" type="radio" name="favoriteColor" value="#FF00FF,#FFFF00"></input>
                        </div>
                    </div>
                    <!-- /.favorite color -->

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
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.validate.js"></script>

    <script src="js/questionnaire.js"></script>

</body>

</html>