<?php
include("pageheader.php");
$id=$_GET["id"];
include("conect.php");
$result=mysqli_query($link,"SELECT * FROM `news` WHERE `id`=$id;");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row){

?>

<div class="row">
    <p class="col">خبر را وارد کنید</p>
</div>
<form action="news_edit_action.php" method="post" enctype="multipart/form-data" class="row m-2">
    

    <input type="text" class="col-12 col-md card m-1" 
    name="title" value="<?php echo($row["title"]);?>" placeholder="عنوان">

    <input type="text" class="col-12 col-md card m-1" 
    name="id" placeholder="id" hidden value="<?php echo($id); ?>">

    <input type="text" class="col-12 col-md card m-1" 
    name="text"value="<?php echo($row["text"]);?>" placeholder="متن خبر">

    <input type="submit" class="col-12 col-md card m-1" 
    value="ذخیره">
</form>


<?php

}else{
    echo("محصول یافت نشد");
}

include("pagefooter.html");
?>