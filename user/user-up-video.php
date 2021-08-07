<?PHP
session_start();
if (isset($_SESSION["user"])) {
    $user = $_SESSION["user"];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="user-up-video.css">
    </head>

    <body>
        <?PHP
        include("header1.php");
        ?>
        <div class="giao-dien-gallery-sukien">
            <h1>UP VIDEO</h1>
            <?PHP
            include("../connect/open.php");
            $sql = "SELECT * FROM `anh` WHERE maAnh=77";
            $resultAnh = mysqli_query($con, $sql);
            $anhNen = mysqli_fetch_array($resultAnh);
            include("../connect/close.php");
            ?>
            <img src="<?PHP echo $anhNen["Anh"] ?>">
        </div>
        <div class="phanloai-sukien">
            <a href="user-up-baiviet.php">Bài Viết</a>
            <a href="user-up-video.php">VIDEO</a>
            <a href="user-up-anh.php">ẢNH</a>
            <a href="">SỰ KIỆN DỰ KIẾN</a>
        </div>
        <h1>BẠN CÓ THỂ ĐĂNG VIDEO TẠI ĐÂY:</h1>
        <div class="up-video">

            <!-- sử dụng enctype -->
            <form action="user-up-video-process.php" method="post" enctype="multipart/form-data">
                Tên VIDEO: <br>
                <input type="text" name="ten-video" class="tenvideo"> <br> <br>
                <input type="file" name="video">
                <button>upload</button>
                <!----hiển thị người đăng---->
                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `user` WHERE username='$user'";
                $result = mysqli_query($con, $sql);
                $nguoidang = mysqli_fetch_array($result);
                include('../connect/close.php');
                ?>
                <input type="hidden" name="nguoi-dang" value="<?PHP echo $nguoidang["maUser"] ?>">
            </form>
        </div>


        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `user` WHERE username='$user'";
        $result = mysqli_query($con, $sql);
        $nguoidung = mysqli_fetch_array($result);
        include("../connect/close.php");
        $maNguoiDung = $nguoidung["maUser"];
        ?>
    </body>

    </html>
<?PHP
} else {
    header("Location: loi-dangnhap.php");
}
?>