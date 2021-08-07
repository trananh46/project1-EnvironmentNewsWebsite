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
    <link rel="stylesheet" href="sukien.css">
</head>

<body>
    <?PHP
    include("header1.php");
    ?>
    <div class="giao-dien-gallery-sukien">
        <h1>SỰ KIỆN</h1>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maAnh=82";
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
    <table border="2">
        <tr>
            <td>STT</td>
            <td>Tên Sự Kiện</td>
            <td>Ngày Tham Gia</td>
            <td>Số Lượng Người Đăng Ký</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Chủ Nhật Xanh</td>
            <td>04-06-2021</td>
            <td>30</td>
        </tr>
    </table>
</body>

</html>