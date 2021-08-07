<?PHP
session_start();
if (isset($_SESSION["admin"])) {
    $admin = $_SESSION["admin"];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="trangchu.css">
        <link rel="stylesheet" href="xacnhan-video.css">
    </head>


    <body>
        <?PHP
        include("header.php");
        include("side-bar.php");
        ?>
        <div class="content">
            <!------ Thêm VIDEO------>
            <div class="up-video">
                <h1>Upload VIDEO</h1>
                <!-- sử dụng enctype -->
                <form action="up-video-process.php" method="post" enctype="multipart/form-data">
                    Tên VIDEO: <br>
                    <input type="text" name="ten-video"> <br> <br>
                    <input type="file" name="video">
                    <button>upload</button>
                    <!----hiển thị người đăng---->
                    <?PHP
                    include("../connect/open.php");
                    $sql = "SELECT * FROM `admin` WHERE username='$admin'";
                    $result = mysqli_query($con, $sql);
                    $nguoidang = mysqli_fetch_array($result);
                    include('../connect/close.php');
                    ?>
                    <input type="hidden" name="nguoi-dang" value="<?PHP echo $nguoi["maAdmin"] ?>">
                </form>
            </div>
            <!--HIỂN THỊ DANH SÁCH VIDEO -->
            <?PHP
            include("../connect/open.php");
            $sql = "SELECT * FROM `video` WHERE trangThai=0 AND maUSER ORDER BY `video`.`maVideo` DESC ";
            $result = mysqli_query($con, $sql);
            include("../connect/close.php");
            ?>
            <div class="phanloai-video">
                <a href="up-video.php">Tất Cả</a>
                <a href="up-video-admin.php">WEBSITE</a>
                <a href="up-video-user.php">NGƯỜI DÙNG</a>
                <a href="xacnhan-video.php">CHỜ XÁC NHẬN</a>
            </div>
            <div class="hien-thi-video">
                <?PHP while ($video = mysqli_fetch_array($result)) { ?>
                    <div class="left">
                        <video controls class="video">
                            <source src="<?PHP echo $video["Video"] ?>">
                        </video>
                    </div>

                    <div class="right">
                        <h2>TÊN VIDEO:</h2>
                        <h3><?PHP echo $video["tenVideo"] ?></h3>
                        <div class="button">
                            <ul>
                                <li><a href="xacnhan-video-process.php?ma-video=<?PHP echo $video["maVideo"] ?>">CONFIRM</a></li>
                            </ul>
                        </div>

                    </div>


                    <hr>
                <?PHP } ?>
            </div>
        </div>
    </body>

    </html>
<?PHP
}
?>