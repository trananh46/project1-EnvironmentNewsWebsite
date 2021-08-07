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
        <script src="../assets/jquery-3.1.1.min.js"></script>
        <script src="../assets/ckeditor/ckeditor.js"></script>
        <script src="../assets/ckfinder/ckfinder.js"></script>
    </head>

    <body>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `danhmuc`";
        $result = mysqli_query($con, $sql);
        include("../connect/close.php");
        ?>
        <form action="up-baiviet-process.php" method="post" enctype="multipart/form-data">
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
                <!-- Thể Loại-->

                Danh Mục:
                <select name="danh-muc">
                    <?PHP
                    while ($danhmuc = mysqli_fetch_array($result)) {
                    ?>

                        <option value="<?PHP echo $danhmuc["maDanhMuc"] ?>"><?PHP echo $danhmuc["tenDanhMuc"] ?></option>
                    <?PHP
                    }
                    ?>
                </select> <br>
                Ảnh Bài Viết: <br>
                <input type="file" name="image">
                <input type="hidden" name="date" value="<?PHP echo date('Y-m-d') ?>">
                <!---NGƯỜI ĐĂNG ---->
                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `admin` WHERE username='$admin'";
                $result = mysqli_query($con, $sql);
                $admin = mysqli_fetch_array($result);
                include("../connect/close.php");
                ?>
                <input type="hidden" name="nguoi-dang" value="<?PHP echo $admin["maAdmin"] ?> ">
            </div>
            <br>
            <button>ADD Bài Viết</button>
        </form>
    </body>

    </html>
<?PHP
} else {
}
?>