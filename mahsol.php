<div class="row">
    <p class="col">
        <a href="news_add.php">+</a>
        لیست اخبار
    </p>
</div>
<?php
include("conect.php");
$result=mysqli_query($link,"SELECT * FROM `news`");
mysqli_close($link);
$row=mysqli_fetch_array($result);

while($row){
?>
<div class="row">
    <img class="img-thumbnail m-1 p-1" src="<?php echo($row["image"]) ?>" alt="">
    <span class="col-12 col-md h5"><?php echo($row["title"]) ?></span>
    <span class="col-12 col-md h6"><?php echo($row["text"]) ?> </span>
    <a class="btn btn-danger" href="news_delete.php?id=<?php echo($row["id"]) ?>">-</a>
    <a class="btn btn-success" href="news_edit.php?id=<?php echo($row["id"]) ?>">*</a>
</div>
<?php
$row=mysqli_fetch_array($result);
}