<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>Captcha Demo - UandBlog</title>
</head>

<body style="background-color:#D8D8D8;">

    <div style="width:500px; margin:0 auto; margin-top:100px; background:#F0F0F0; padding:10px;">

        <h2>Captcha Demo - UandBlog</h2>

        <form action="submitPage.php" method="post">
            <table width="100%" border="0" cellspacing="5" cellpadding="5">
                <tr style="color:#F00;">
                    <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:15px;">
                        <?php if(isset($_REQUEST['msg1'])){?>
                        <?php echo $_REQUEST['msg1'];?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Name:</td>
                    <td><input name="name" type="text" required></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input name="email" type="email"></td>
                </tr>
                <tr>
                    <td>Message:</td>
                    <td><textarea name="msg" cols="" rows=""></textarea></td>
                </tr>

                <tr>
                    <td style=" text-transform:uppercase;" valign="top">captcha:</td>

                    <td>*Please fill in the captcha security below</td>
                </tr>

                <tr>

                    <td valign="top">&nbsp;</td>
                    <td><input id="6_letters_code_1" name="6_letters_code_1" required type="text" style="border:1px solid #e2d5ca !important;"></td>
                </tr>

                <tr>

                    <td class="blk" valign="top">&nbsp;</td>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">


                            <tr>
                                <td style="text-align:left;"> <img src="captcha_code_file.php?rand=<?php echo rand();?>" id='captchaimg' width="100%"></td>
                                <td style="text-align:right;"></td>
                            </tr>
                            <tr>

                                <td colspan="2" style="font-family:Arial, Helvetica, sans-serif; font-size:11px;"> Can't read the image? click <a href='javascript: refreshCaptcha();' style="color:#F00;">here</a>                                    to refresh</td>

                            </tr>
                        </table>

                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="submit_btn" name="Submit1" type="submit">Submit</button></td>

                </tr>
            </table>
        </form>

    </div>


    <script type='text/javascript'>
        function refreshCaptcha() {
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0, img.src.lastIndexOf("?")) + "?rand=" + Math.random() * 1000;
        }
    </script>

</body>

</html>