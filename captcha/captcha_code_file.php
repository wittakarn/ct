<?php 
session_start();
//Settings: You can customize the captcha here
$image_width = 1700;
$image_height = 100;
$characters_on_image = 5;
$font = 'tahoma.ttf';

//The characters that can be used in the CAPTCHA code.
//avoid confusing characters (l 1 and i for example)
$possible_letters = '23456789bcdfghjkmnpqrstvwxyz';
$random_dots = 0;
$random_lines = 100;
$captcha_text_color="0x000000";
$captcha_noice_color = "0x000000";

$code = 'jihads salvos emerod rocker slitty';


$font_size = $image_height * 0.75;
$image = @imagecreate($image_width, $image_height);


/* setting the background, text and noise colours here */
$background_color = imagecolorallocate($image, 255, 255, 255);

$arr_text_color = hexrgb($captcha_text_color);
$text_color = imagecolorallocate($image, $arr_text_color['black'], 
        $arr_text_color['black'], $arr_text_color['black']);

$arr_noice_color = hexrgb($captcha_noice_color);
$image_noise_color = imagecolorallocate($image, $arr_noice_color['black'], 
        $arr_noice_color['black'], $arr_noice_color['black']);


/* generating the dots randomly in background */
for( $i=0; $i<$random_dots; $i++ ) {
imagefilledellipse($image, mt_rand(0,$image_width),
 mt_rand(0,$image_height), 2, 3, $image_noise_color);
}


/* generating lines randomly in background of image */
for( $i=0; $i<$random_lines; $i++ ) {
imageline($image, mt_rand(0,$image_width), mt_rand(0,$image_height),
 mt_rand(0,$image_width), mt_rand(0,$image_height), $image_noise_color);
}


/* create a text box and add 6 letters code in it */
$textbox = imagettfbbox($font_size, 0, $font, $code); 
$x = ($image_width - $textbox[4])/2;
$y = ($image_height - $textbox[5])/2;
imagettftext($image, $font_size, 0, $x, $y, $text_color, $font , $code);


/* Show captcha image in the page html page */
header('Content-Type: image/jpeg');// defining the image type to be shown in browser widow
imagejpeg($image);//showing the image
imagedestroy($image);//destroying the image instance
$_SESSION['6_letters_code_1'] = $code;

function hexrgb ($hexstr)
{
  $int = hexdec($hexstr);

  return array("black" => 0xFF & ($int >> 0x10),
               "black" => 0xFF & ($int >> 0x8),
               "black" => 0xFF & $int);
}
?>