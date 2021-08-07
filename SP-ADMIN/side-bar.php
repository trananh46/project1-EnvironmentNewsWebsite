<?PHP
$quyenAD = $_SESSION["admin"];
include("../connect/open.php");
$sql = "SELECT * FROM `admin` WHERE username='$quyenAD'";
$result = mysqli_query($con, $sql);
$QuyenAD = mysqli_fetch_array($result);
include("../connect/close.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!---- side bar bắt đầu ----->

    <div class="side_bar">
        <center>
            <img src="anh.jpg" class="profile_image" alt="">
            <h4><?PHP echo $QuyenAD["tenAdmin"] ?></h4>
        </center>
        <?PHP if ($QuyenAD["quyenKiemSoat"] == 0) { ?>
            <a href="colleague.php"><i class="fas fa-desktop"></i><span>COLLEAGUE</span></a>
        <?PHP } ?>
        <a href="members-list.php"><i class="fas fa-cogs"></i><span>Members List</span></a>
        <a href="up-baiviet.php"><i class="fas fa-table"></i><span>Post</span></a>
        <a href="up-picture.php"><i class="fas fa-th"></i><span>Picture</span></a>
        <a href="up-video.php"><i class="fas fa-info-circle"></i><span>Video</span></a>
        <a href="up-danhmuc.php"><i class="fas fa-adjust"></i><span>Type</span></a>
        <a href="comment.php"><i class="fas fa-sliders-h"></i><span>COMMENT</span></a>
    </div>
    <!---- side bar kết thúc ----->
</body>

</html>