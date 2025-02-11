<?php
include("pageheader.php");?>
<!-- ************************* -->

<div class="container">

    <?php

    $username = $_POST["username"];

    $pass = $_POST["pass"];



    $o = mysqli_connect("localhost", "root", "", "picxel it");
    $r = mysqli_query($o, "SELECT * FROM `login` WHERE user nam ='$username' and pass ='$pass' ");

    mysqli_close($o);

    $row = mysqli_fetch_array($r);

    if ($row) {
        $_SESSION["login"] = true;

    ?>
        <script>
            alert("ورود به حساب با موفقیت انجام شد");
            location.replace("index.php");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("ورود به حساب با موفقیت انجام نشد");
            location.replace("index.php");
        </script>
    <?php
    }





    ?>
</div>

<!-- ************************* -->
<?php
include("pagefooter.html");
?>