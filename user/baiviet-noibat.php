<?PHP
session_start();
if (isset($_GET["maBaiViet"])) {
    $maBaiViet = $_GET["maBaiViet"];
    include("../connect/open.php");
    $sql = "SELECT * FROM `baiviet` WHERE maBaiViet=$maBaiViet";
    $result = mysqli_query($con, $sql);
    $baiVietNoiBat = mysqli_fetch_array($result);
    include("../connect/close.php");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="baiviet-noibat.css">
        <link rel="stylesheet" href="environment.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>

    <body>
        <?PHP
        include("header1.php");
        ?>

        <h1><?PHP echo $baiVietNoiBat["tenBaiViet"] ?></h1>

        <div class="left">
            <div class="mieu-ta">
                <p>
                    <?PHP
                    echo $baiVietNoiBat["mieuTa"]
                    ?>
                </p>
            </div>

            <div class="content">

                <p>
                    <?PHP echo $baiVietNoiBat["noiDung"] ?>
                </p>
            </div>

            <?PHP if (isset($_SESSION["user"])) {
                $nguoiDung = $_SESSION["user"];
                include("../connect/open.php");
                $sql = "SELECT * FROM `user` WHERE username='$nguoiDung'";
                $result = mysqli_query($con, $sql);
                $maNguoiDung = mysqli_fetch_array($result);
                include("../connect/close.php");
            ?>

                <form action="binhluan.php" method="get">
                    <div class="start-binhluan-canhan">
                        <div class="binhluan-canhan">
                            <h1>Bình Luận Của Bạn</h1>
                            <input type="hidden" name="ma-baiviet" value="<?PHP echo $maBaiViet ?>">
                            <input type="hidden" name="ma-nguoidung" value="<?PHP echo $maNguoiDung["maUser"] ?>">
                            <textarea name="binh-luan" cols="80" rows="9" placeholder="Bạn Có Thể Bình Luận Tại Đây "></textarea> <br>
                            <button>Gửi Bình Luận</button>
                        </div>
                    </div>
                </form>
            <?PHP } else {
                echo "Đăng Nhập Để Bình Luận";
            } ?>

            <div class="start-binhluan-moinguoi">
                <h1>Bình Luận Của Mọi Người</h1>
                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `comment` INNER JOIN user ON comment.maUser=user.maUser WHERE maBaiViet=$maBaiViet AND comment.trangThai = 1";

                $result = mysqli_query($con, $sql);
                include("../connect/close.php");
                ?>
                <br>
                <br>
                <?PHP
                while ($binhluan = mysqli_fetch_array($result)) {

                ?>

                    <div class="hienthi-binhluan-moinguoi">
                        <div class="binhluan-trai">
                            <img src="anh.jpg" alt="" width="50" height="50">
                        </div>
                        <div class="binhluan-phai">
                            <div class="binhluan-phai1">
                                <h3><?PHP echo $binhluan["tenUser"] ?></h3>
                                <h5>Posted:<?PHP echo $binhluan["ngayDang"] ?></h5>
                            </div>

                            <h4><?PHP echo $binhluan["noiDung"] ?></h3>
                        </div>
                    </div>
                    <br>
                <?PHP

                }
                ?>
            </div>
        </div>

        <div class="right">
            <h1>PICTURE</h1>
            <hr class="right-a">
            <img src="<?PHP echo $baiVietNoiBat["anh"] ?>">
        </div>


        <!-- <?PHP
                include("footer.php");
                ?> -->
    </body>

    </html>
<?PHP
} else {
}
?>