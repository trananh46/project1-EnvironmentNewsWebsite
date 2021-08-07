<?PHP
session_start();
if (isset($_SESSION["user"])) {
    $nguoiDung = $_SESSION["user"];
    include("../connect/open.php");
    $sql = "SELECT * FROM `user` WHERE username= '$nguoiDung'";
    $result = mysqli_query($con, $sql);
    $taiKhoan = mysqli_fetch_array($result);
    include("../connect/close.php");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="taikhoan-chitiet-user.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    </head>

    <body>

        <div class="phandau-hosoUser">
            <div class="noidung-phandau-hosoUser">
                <div class="noidung-anh">
                    <img src="ava-user.jpg">
                </div>
                <div class="noidung-tenUser">
                    <h1><?PHP echo $taiKhoan["tenUser"] ?></h1>
                    <a href="sua-thongtin-user.php"> Sửa Thông Tin </a>
                    <a href="dangxuat.php">Đăng Xuất</a>

                </div>
            </div>

        </div>
        <div class="phanthan-hosoUser">
            <table border="2">
                <tr>
                    <td>Tên</td>
                    <td>Tài Khoản</td>
                    <td>Mật Khẩu</td>
                    <td>Email</td>
                    <td>SĐT</td>
                </tr>
                <tr>
                    <td><?PHP echo $taiKhoan["tenUser"] ?></td>
                    <td><?PHP echo $taiKhoan["username"] ?></td>
                    <td><?PHP echo '*******' ?></td>
                    <td><?PHP echo $taiKhoan["email"] ?></td>
                    <td><?PHP echo $taiKhoan["sdt"] ?></td>
                </tr>
            </table>
        </div>

        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `user` WHERE username='$nguoiDung'";
        $result = mysqli_query($con, $sql);
        $nguoidung = mysqli_fetch_array($result);
        include("../connect/close.php");
        $maNguoiDung = $nguoidung["maUser"];
        ?>



        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `video` WHERE maUSER=$maNguoiDung AND trangThai=1 ORDER BY `video`.`maVideo` DESC";
        $result = mysqli_query($con, $sql);
        include("../connect/close.php");
        $i = 3;
        ?>
        <div class="phan-video">
            <h1>VIDEO Bạn Đã Đăng</h1>
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

        <div class="phan-video">
            <h1>Ảnh Bạn Đã Đăng</h1>
        </div>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maUSER=$maNguoiDung AND trangThai=1 ORDER BY `anh`.`maAnh` DESC";

        $result = mysqli_query($con, $sql);
        include("../connect/close.php");
        $j = 3;
        ?>



        <div>

            <?PHP
            while ($anh = mysqli_fetch_array($result)) {
                if ($j % 3 == 0) {
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
                $j++;
            }
    ?>
        </div>




        <div class="phan-video">
            <h1>Bài Viết Bạn Đã Đăng</h1>
        </div>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `baiviet` WHERE maUSER=$maNguoiDung AND trangThai=1";

        $result = mysqli_query($con, $sql);
        include("../connect/close.php");
        $k = 3;
        ?>
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
                $k++;
            }
    ?>
        </div>

    </body>

    </html>
<?PHP
} else {
    header("Location: loi-dangnhap.php");
}
?>