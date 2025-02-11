<?php
include("pageheader.php");?>
            <!-- ************************* -->
            <link rel="stylesheet" href="bootstrap.css">
            <link rel="stylesheet" href="index.css">
<form action="vorod bh hesab.php" method ="post">

    <div class="container">

<div class="row">

<input type="text" name = "fname" placeholder="نام" class="col-lg-6 col-md-12 col-sm-12">



<input type="text" name = "username" placeholder="یوزر نیم" class="col-lg-6 col-md-12 col-sm-12">



<input type="password" name = "pass" placeholder=" رمز" class="col-lg-6 col-md-12 col-sm-12 bg-info" >



<input type="password" name = "repass" placeholder="تکرار رمز" class="col-lg-6 col-md-12 col-sm-12 bg-info">



<input type="text" name = "email" placeholder="ایمل" class="col-lg-6 col-md-12 col-sm-12">



<input type="text" name = "telefon" placeholder="تلفن همراه" class="col-lg-6 col-md-12 col-sm-12">

<input type="submit">

</div>
</form>
            <!-- ************************* -->
            <?php
include("pagefooter.html");
?>