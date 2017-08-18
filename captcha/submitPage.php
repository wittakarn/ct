<?php
//UandBlog Demo

session_start();
if(isset($_REQUEST['Submit1'])){
    // code for check server side validation
    if(empty($_SESSION['6_letters_code_1'] ) ||
        strcasecmp($_SESSION['6_letters_code_1'], $_POST['6_letters_code_1']) != 0)
    {  
        $msg1="The Validation code does not match! Please Select Your Option Again";
        
        ?>

    <script>
        window.location.href = 'index.php?msg1=<?php echo $msg1;?>';
    </script>


    <?php 
}else{
$msg1="The Validation code matched !";
// DB Code
?>

    <script>
        window.location.href = 'index.php?msg1=<?php echo $msg1;?>';
    </script>

    <?php
}
}
?>