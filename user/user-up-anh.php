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
        <link rel="stylesheet" href="user-up-anh.css">
    </head>

    <body>
        <?PHP
        include("header1.php");
        ?>
        <div class="giao-dien-gallery-anh">
            <h1>UP ẢNH</h1>
            <?PHP
            include("../connect/open.php");
            $sql = "SELECT * FROM `anh` WHERE maAnh=78";
            $resultAnh = mysqli_query($con, $sql);
            $anhNen = mysqli_fetch_array($resultAnh);
            include("../connect/close.php");
            ?>
            <img src="<?PHP echo $anhNen["Anh"] ?>">
        </div>
        <div class="phanloai-anh">
            <a href="user-up-baiviet.php">Bài Viết</a>
            <a href="user-up-video.php">VIDEO</a>
            <a href="user-up-anh.php">ẢNH</a>
            <a href="">SỰ KIỆN DỰ KIẾN</a>
        </div>
        <div>
            <h1>Upload Ảnh</h1>

            <form action="user-up-picture-process.php" method="post" enctype="multipart/form-data">
                Tên Ảnh: <br>
                <input type="text" name="ten-anh"> <br> <br>
                <input type="file" name="image">
                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `user` WHERE username='$user'";
                $result = mysqli_query($con, $sql);
                $nguoidang = mysqli_fetch_array($result);
                include('../connect/close.php');
                ?>
                <input type="hidden" name="nguoi-dang" value="<?PHP echo $nguoidang["maUser"] ?>">
                <button>upload</button>
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