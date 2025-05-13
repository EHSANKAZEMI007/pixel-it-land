<?php
include("pageheader.php");
$title=$_POST["title"];
$text=$_POST["text"];
$id=$_POST["id"];


include("conect.php");
$result=mysqli_query($link,"UPDATE `news` SET `title`='$title',`text`='$text' WHERE `id`='$id'");
mysqli_close($link);
if($result===true){
    echo("ذخیره  شد");
}else{
    echo("ذخیره  نشد");
}

?>

<?php
include("pagefooter.html");
?>