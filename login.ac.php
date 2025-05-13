<?php
include("pageheader.php");

?>
<!-- ************************* -->

<div class="container">

    <?php

$username=$_POST["username"];
$password=$_POST["password"];

include("conect.php");
$result=mysqli_query($link,"SELECT * FROM `login` 
    WHERE `user nam`='$username' AND `pass`='$password'");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row){
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$row["admin"];
    ?>
    <script>
        alert("ورود انجام شد");
        location.replace("index.php");
    </script>
    <?php
}else{
    echo("نام کاربری یا رمز عبور صحیح نیست");
}
?>
</div>

<!-- ************************* -->
<?php
include("pagefooter.html");
?>