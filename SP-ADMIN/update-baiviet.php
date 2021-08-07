<?PHP
if (isset($_GET["ma-baiviet"])) {
    $maBaiViet = $_GET["ma-baiviet"];
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
        $sql = "SELECT * FROM `baiviet` WHERE maBaiViet=$maBaiViet";
        $sqlDanhmuc = "SELECT * FROM `danhmuc` ";
        $result = mysqli_query($con, $sql);
        $resultDanhMuc = mysqli_query($con, $sqlDanhmuc);
        $baiViet = mysqli_fetch_array($result);

        include("../connect/close.php");
        ?>

        <form action="update-baiviet-process.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="ma-baiviet" value="<?PHP echo $baiViet["maBaiViet"] ?>">
                Tên Bài Viết: <br>
                <input type="text" name="ten-baiviet" value="<?PHP echo $baiViet["tenBaiViet"] ?>"> <br>
                <!--Nội Dung-->
                Miêu Tả: <br>
                <textarea id="mieu-ta" cols="30" rows="10" name="mieu-ta"> <?PHP echo $baiViet["mieuTa"] ?> </textarea>

                <script>
                    CKEDITOR.replace('mieu-ta', {
                        filebrowserBrowseUrl: '../assets/ckfinder/ckfinder.html',
                        filebrowserImageBrowseUrl: '../assets/ckfinder/ckfinder.html?type=Images',
                        filebrowserFlashBrowseUrl: '../assets/ckfinder/ckfinder.html?type=Flash',
                        filebrowserUploadUrl: '../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                        filebrowserImageUploadUrl: '../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                        filebrowserFlashUploadUrl: '../assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                    });
                </script>
                <br>

                Nội Dung: <br>
                <textarea id="noi-dung" cols="30" rows="10" name="noi-dung"><?PHP echo $baiViet["noiDung"] ?></textarea>

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
                    while ($danhmuc = mysqli_fetch_array($resultDanhMuc)) {
                    ?>

                        <option value="<?PHP echo $danhmuc["maDanhMuc"] ?>"><?PHP echo $danhmuc["tenDanhMuc"] ?></option>
                    <?PHP
                    }
                    ?>
                </select> <br>
                Ảnh Bài Viết: <br>
                <img src="<?PHP echo $baiViet["anh"] ?>" width="400" height="300">
            </div>
            <button>UPDATE</button>
        </form>
    </body>

    </html>
<?PHP
} else {
    header("Location: up-baiviet.php");
}
?>