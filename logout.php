<?php

include("pageheader.php");
?>
<?php
unset($_SESSION["login"]);
unset($_SESSION["admin"]);
?>
<script>
    location.replace("index.php");
</script>
<?php
include("pagefooter.html");
?>