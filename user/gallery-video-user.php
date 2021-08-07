<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gallery-video-user.css">
</head>

<body>
    <?PHP
    include("header1.php");
    ?>
    <?PHP
    include("../connect/open.php");
    if (isset($_GET["search"])) {
        $search = $_GET["search"];
        $sql = "SELECT * FROM `video` WHERE tenVideo LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM `video` WHERE maUSER AND trangThai=1";
    }
    $result = mysqli_query($con, $sql);
    include("../connect/close.php");
    $i = 3;
    ?>
    <div class="giao-dien-gallery-video">
        <h1>VIDEO</h1>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maAnh=73";
        $resultAnh = mysqli_query($con, $sql);
        $anhNen = mysqli_fetch_array($resultAnh);
        include("../connect/close.php");
        ?>
        <img src="<?PHP echo $anhNen["Anh"] ?>">
    </div>
    <br>
    <div class="phanloai-video">
        <a href="gallery-video.php">Tất Cả</a>
        <a href="gallery-video-admin.php">WEBSITE</a>
        <a href="gallery-video-user.php">NGƯỜI DÙNG</a>
    </div>
    <div>
        <?PHP
        while ($video = mysqli_fetch_array($result)) {
            if ($i % 3 == 0) {
        ?>
    </div>
    <div class="start-video">
    <?PHP } ?>
    <div class="video">
        <a href="video-chitiet.php?ma-video=<?PHP echo $video["maVideo"] ?>">
            <video controls>
                <source src="<?PHP echo $video["Video"] ?>">
            </video>
        </a>
    </div>
<?PHP
            $i++;
        }
?>
    </div>
</body>

</html>