<?php
include("pageheader.php");
$image=$_FILES["image"]["name"];
$title=$_POST["title"];
$text=$_POST["text"];

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

include("conect.php");
$result=mysqli_query($link,"INSERT INTO `news`(`title`, `text`, `image`) VALUES ('$title','$text','$imageurl')");
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