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
        <link rel="stylesheet" href="user-up-baiviet.css">
        <script src="../assets/jquery-3.1.1.min.js"></script>
        <script src="../assets/ckeditor/ckeditor.js"></script>
        <script src="../assets/ckfinder/ckfinder.js"></script>
    </head>

    <body>
        <?PHP
        include("header1.php");
        ?>
        <div class="giao-dien-gallery-baiviet">
            <h1>UP BÀI VIẾT</h1>
            <?PHP
            include("../connect/open.php");
            $sql = "SELECT * FROM `anh` WHERE maAnh=76";
            $resultAnh = mysqli_query($con, $sql);
            $anhNen = mysqli_fetch_array($resultAnh);
            include("../connect/close.php");
            ?>
            <img src="<?PHP echo $anhNen["Anh"] ?>">
        </div>
        <div class="phanloai-baiviet">
            <a href="user-up-baiviet.php">Bài Viết</a>
            <a href="user-up-video.php">VIDEO</a>
            <a href="user-up-anh.php">ẢNH</a>
            <a href="">SỰ KIỆN DỰ KIẾN</a>
        </div>
        <h1>Bạn CÓ THỂ ĐĂNG BÀI VIẾT TẠI ĐÂY </h1>


        <!---start up bài viết--->
        <div>
            <form action="user-up-baiviet-process.php" method="post" enctype="multipart/form-data">
                <div>
                    Tên Bài Viết: <br>
                    <input type="text" name="ten-baiviet"> <br>
                    <!--Nội Dung-->
                    Miêu Tả: <br>
                    <textarea id="mieu-ta" cols="90" rows="15" name="mieu-ta"></textarea>

                    <br>

                    Nội Dung: <br>
                    <textarea id="noi-dung" cols="30" rows="10" name="noi-dung"></textarea>

                    <script>
                        CKEDITOR.replace('noi-dung', {
                            filebrowserBrowseUrl: '../assets/ckfinder/ckfinder.html',
                            filebrowserImageBrowseUrl: '../assets/ckfinder/ckfinder.html?type=Images',
                            filebrowserFlashBrowseUrl: '../assets/ckfinder/ckfinder.html?type=Flash',
                            filebrowserUploadUrl: '../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                            filebrowserImageUploadUrl: '../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                            filebrowserFlashUploadUrl: '../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                        });
                    </script>
                    <br>
                    Ảnh Bài Viết: <br>
                    <input type="file" name="image">
                    <input type="hidden" name="date" value="<?PHP echo date('Y-m-d') ?>">
                    <!---NGƯỜI ĐĂNG ---->
                    <?PHP
                    include("../connect/open.php");
                    $sql = "SELECT * FROM `user` WHERE username='$user'";
                    $result = mysqli_query($con, $sql);
                    $nguoiDang = mysqli_fetch_array($result);
                    include("../connect/close.php");
                    ?>
                    <input type="hidden" name="nguoi-dang" value="<?PHP echo $nguoiDang["maUser"] ?> ">
                </div>
                <br>
                <button>ADD Bài Viết</button>
            </form>
        </div>
        <br>
        <br>


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