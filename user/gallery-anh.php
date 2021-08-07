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
    <link rel="stylesheet" href="gallery-anh.css">
</head>

<body>
    <?PHP
    include("header1.php");
    ?>
    <?PHP
    include("../connect/open.php");
    if (isset($_GET["search"])) {
        $search = $_GET["search"];
        $sql = "SELECT * FROM `anh` WHERE tenAnh LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM `anh` WHERE trangThai=1 ORDER BY `anh`.`maAnh` DESC ";
    }
    $result = mysqli_query($con, $sql);
    include("../connect/close.php");
    $i = 3;
    ?>

    <div class="giao-dien-gallery-anh">
        <h1>ẢNH</h1>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maAnh=74";
        $resultAnh = mysqli_query($con, $sql);
        $anhNen = mysqli_fetch_array($resultAnh);
        include("../connect/close.php");
        ?>
        <img src="<?PHP echo $anhNen["Anh"] ?>">
    </div>
    <br>
    <div class="phanloai-anh">
        <a href="gallery-anh.php">Tất Cả</a>
        <a href="gallery-anh-admin.php">WEBSITE</a>
        <a href="gallery-anh-user.php">NGƯỜI DÙNG</a>

    </div>

    <div>

        <?PHP
        while ($anh = mysqli_fetch_array($result)) {
            if ($i % 3 == 0) {
        ?>
    </div>
    <div class="start-anh">
    <?PHP } ?>
    <div class="anh">
        <a href="anh-chitiet.php?ma-anh=<?PHP echo $anh["maAnh"] ?>">
            <img src="<?PHP echo $anh["Anh"] ?>">
        </a>
    </div>
<?PHP
            $i++;
        }
?>
    </div>
</body>

</html>