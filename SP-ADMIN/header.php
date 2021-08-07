<?PHP
$admin = $_SESSION["admin"];
include("../connect/open.php");
$sql = "SELECT * FROM `admin` WHERE username='$admin'";
$result = mysqli_query($con, $sql);
$AD = mysqli_fetch_array($result);
include("../connect/close.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!------header bắt đầu từ đây ------->
    <header>
        <div class="left_area">
            <h3>Chào mừng <span><?PHP if ($AD["quyenKiemSoat"] == 0) {
                                    echo 'SUPER ADMIN';
                                } else {
                                    echo 'ADMIN';
                                } ?></span></h3>
        </div>
        <div class="right_area">
            <a href="../ADMIN/dangxuat.php" class="logout">Logout </a>
        </div>
    </header>
    <!------ kết thúc ở đây -------->
</body>

</html>