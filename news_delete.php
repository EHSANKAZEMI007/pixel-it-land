<?php
include("pageheader.php");
$id=$_GET["id"];

include("conect.php");
$result=mysqli_query($link,"DELETE FROM `news` WHERE `id`=$id");
mysqli_close($link);
if($result===true){
    echo("حذف  شد");
}else{
    echo("حذف  نشد");
}

?>

<?php
include("pagefooter.html");
?>