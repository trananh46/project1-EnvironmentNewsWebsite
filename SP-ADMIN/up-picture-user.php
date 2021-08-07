<?PHP
session_start();
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
    <link rel="stylesheet" href="up-picture.css">
</head>

<body>
    <?PHP
    include("header.php");
    include("side-bar.php");
    ?>
    <div class="content">
        <!--- UPLOAD ẢNH --->
        <div>
            <h1>Upload Ảnh</h1>
            <form action="up-picture-process.php" method="post" enctype="multipart/form-data">
                Tên Ảnh: <br>
                <input type="text" name="ten-anh"> <br> <br>
                <input type="file" name="image">
                <button>upload</button>
                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `admin` WHERE username='$admin'";
                $result = mysqli_query($con, $sql);
                $nguoidang = mysqli_fetch_array($result);
                include('../connect/close.php');
                ?>
                <input type="hidden" name="nguoi-dang" value="<?PHP echo $nguoidang["maAdmin"] ?>">

            </form>
        </div>

        <!---HIỂN THỊ ẢNH --->
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maUSER AND trangThai=1 ORDER BY `anh`.`maAnh` ASC";
        $result = mysqli_query($con, $sql);
        include("../connect/close.php");
        ?>
        <div class="phanloai-anh">
            <a href="up-picture.php">Tất Cả</a>
            <a href="up-picture-admin.php">WEBSITE</a>
            <a href="up-picture-user.php">NGƯỜI DÙNG</a>
            <a href="xacnhan-anh.php">CHỜ XÁC NHẬN</a>
        </div>
        <br>
        <div class="hien-thi-anh">
            <?PHP while ($anh = mysqli_fetch_array($result)) { ?>
                <div class="left">
                    <img src="<?PHP echo $anh["Anh"] ?>" alt="" class="anh">
                </div>
                <div class="right">
                    <div class="right-anh">
                        <h2>TÊN ẢNH:</h2>
                        <h3><?PHP echo $anh["tenAnh"] ?></h3>
                    </div>

                    <div class="button">
                        <ul>
                            <li><a href="update-picture.php?ma-anh=<?PHP echo $anh["maAnh"] ?>">UPDATE</a></li>
                            <li><a href="delete-picture-process.php?ma-anh= <?PHP echo $anh["maAnh"] ?>" onclick="return confirm('Do You Want to Delete PICTURE ?')">DELETE</a></li>
                        </ul>
                    </div>
                </div>

                <hr>
                <br>
            <?PHP } ?>
        </div>

    </div>
</body>

</html>