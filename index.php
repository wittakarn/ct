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
    <link href="css/usinfo.css" rel="stylesheet">
</head>

<body>
    <!-- Page Content -->
    <div class="container">
        <h1>ข้อมูลทั่วไป</h1>
        <hr/>
        <div class="row">
            <div class="col-md-8">
                <form id="userInfoForm" action="submit-userinfo.php" method="post" class="form-horizontal" role="form">

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
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <!-- /.email -->

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
                            <input type="radio" name="gender" value="1" checked="true"> ชาย <br>
                            <input type="radio" name="gender" value="2"> หญิง <br>
                        </div>
                    </div>
                    <!-- /.gender -->

                    <!-- age -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">อายุ</label>
                        <div class="col-sm-9">
                            <input type="radio" name="age" value="1" checked="true"> 10-25 <br>
                            <input type="radio" name="age" value="2"> 26-40 <br>
                            <input type="radio" name="age" value="3"> 41-60 <br>
                            <input type="radio" name="age" value="4"> มากกว่า 60 <br>
                        </div>
                    </div>
                    <!-- /.age -->

                    <!-- nation -->
                    <div class="form-group">
                        <label for="favoriteColor[]" class="col-sm-3 control-label">สีที่ชอบ(เลือก 2 สี)</label>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-12">
                                    <input id="red" type="checkbox" name="favoriteColor[]" value="#FF0000"></input>
                                    <input id="orange" type="checkbox" name="favoriteColor[]" value="#FF7F00"></input>
                                    <input id="yellow" type="checkbox" name="favoriteColor[]" value="#FFFF00"></input>
                                    <input id="chartreuseGreen" name="favoriteColor[]" type="checkbox" value="#7FFF00"></input>
                                </div>
                                <div class="col-sm-12">
                                    <input id="green" type="checkbox" name="favoriteColor[]" value="#00FF00"></input>
                                    <input id="springGreen" type="checkbox" name="favoriteColor[]" value="#00FF7F"></input>
                                    <input id="cyan" type="checkbox" name="favoriteColor[]" value="#00FFFF"></input>
                                    <input id="azure" type="checkbox" name="favoriteColor[]" value="#007FFF"></input>
                                </div>
                                <div class="col-sm-12">
                                    <input id="blue" type="checkbox" name="favoriteColor[]" value="#0000FF"></input>
                                    <input id="violet" type="checkbox" name="favoriteColor[]" value="#7F00FF"></input>
                                    <input id="magenta" type="checkbox" name="favoriteColor[]" value="#FF00FF"></input>
                                    <input id="rose" type="checkbox" name="favoriteColor[]" value="#FF007F"></input>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.nation -->

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

    <script src="js/usinfo.js"></script>

</body>

</html>