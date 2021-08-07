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
    <link rel="stylesheet" href="danhmuc-baiviet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <?PHP
    include("header1.php");
    ?>

    <?PHP
    include("../connect/open.php");
    if (isset($_GET["search"])) {
        $search = $_GET["search"];
        $sql = "SELECT * FROM `baiviet` WHERE tenBaiViet LIKE '%$search%'";
    } else {
        $sql = "SELECT * FROM `baiviet` WHERE maUSER AND trangThai =1 ORDER BY `maBaiViet` DESC";
    }
    $result = mysqli_query($con, $sql);
    include("../connect/close.php");
    $i = 3;
    ?>

    <div class="giao-dien-gallery-baiviet">
        <h1>BÀI VIẾT</h1>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maAnh=75";
        $resultAnh = mysqli_query($con, $sql);
        $anhNen = mysqli_fetch_array($resultAnh);
        include("../connect/close.php");
        ?>
        <img src="<?PHP echo $anhNen["Anh"] ?>">
    </div>
    <br>
    <div class="phanloai-baiviet">
        <a href="danhmuc-baiviet.php">Tất Cả</a>
        <a href="danhmuc-baiviet-admin.php">WEBSITE</a>
        <a href="danhmuc-baiviet-user.php">NGƯỜI DÙNG</a>
    </div>
    <div>
        <?PHP
        while ($baiviet = mysqli_fetch_array($result)) {
            if ($i % 3 == 0) {
        ?>
    </div>

    <div class="start-baiviet">
    <?PHP
            }
    ?>
    <!----BÀI VIẾT---->



    <div class="t">

        <img src="<?PHP echo $baiviet["anh"] ?>" width="418" height="300">
        <br>

        <p class="ngay-dang-bai-viet-moinhat">

            Ngày Đăng:
            <?PHP echo $baiviet["ngayDang"] ?>
        </p>
        <br>

        <h1 class="ten-baiviet-moinhat">
            <?PHP
            echo $baiviet["tenBaiViet"]
            ?>
        </h1>

        <p class="mieuta-baiviet-moinhat">
            <?PHP
            echo $baiviet["mieuTa"]
            ?>
        </p>
        <br>

        <a href="baiviet-noibat.php?maBaiViet=<?PHP echo $baiviet["maBaiViet"] ?>"><i class="fas fa-arrow-circle-right"></i></a>
    </div>
<?PHP
            $i++;
        }
?>
    </div>
    <!----BÀI VIẾT---->
</body>

</html>