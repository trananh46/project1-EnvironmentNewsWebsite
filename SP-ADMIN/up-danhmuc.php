<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="danhmuc.css">
</head>

<body>
    <?PHP
    include("header.php");
    include("side-bar.php");
    ?>
    <?PHP
    include("../connect/open.php");
    $sql = "SELECT * FROM `danhmuc` ";
    $result = mysqli_query($con, $sql);
    include("../connect/close.php");
    ?>
    <div class="content">
        <!------ Thêm DANH MỤC ------>
        <div class="up-danhmuc">

            <h1>ADD Danh Mục</h1>
            <form action="up-danhmuc-process.php" method="post">
                <div>
                    Thể Loại: <br>
                    <input type="text" name="up-danhmuc">
                </div>
                <button>ADD Danh Mục</button>
            </form>

        </div>
        <div class="danh-muc">
            <h1>Tổng số Danh Mục</h1>
            <table border="2">
                <tr>
                    <td>STT</td>
                    <td>Tên Danh Mục</td>
                </tr>
                <tr>
                    <?PHP while ($danhmuc = mysqli_fetch_array($result)) { ?>
                        <td><?PHP echo $danhmuc["maDanhMuc"]; ?></td>
                        <td><?PHP echo $danhmuc["tenDanhMuc"]; ?></td>

                </tr>
            <?PHP } ?>
            </table>
        </div>
    </div>
</body>

</html>