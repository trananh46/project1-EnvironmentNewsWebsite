<?PHP
session_start();
$user = $_SESSION["user"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sua-thongtin-user.css">
</head>

<body>
    <?PHP
    include("../connect/open.php");
    $sql = "SELECT * FROM `user` WHERE username='$user'";
    $result = mysqli_query($con, $sql);
    $taiKhoan = mysqli_fetch_array($result);
    include("../connect/close.php");
    ?>
    <form action="test.php" method="post">
        <div class="tong">
            <table align="center">
                <input type="hidden" name="id" value="<?PHP echo $taiKhoan["maUser"] ?>">
                <tr>
                    <td height="520" colspan="2" valign="top">

                        <table align="center">
                            <Tr>
                                <td>Họ và Tên:</td>
                                <td><input type="text" name="ho-ten" size="40" value="<?PHP echo $taiKhoan["tenUser"] ?>"></td>
                            </Tr>
                            <tr>
                                <td>Tài Khoản:</td>
                                <td><input type="text" name="user" size="40" value="<?PHP echo $taiKhoan["username"] ?>"></td>

                            </tr>
                            <tr>
                                <td>Mật khẩu:</td>
                                <td><input type="text" name="pass" value="<?PHP echo $taiKhoan["password"] ?>"></td>

                            </tr>
                            <td>Email</td>
                            <td><input type="text" name="mail" size="40" value="<?PHP echo $taiKhoan["email"] ?>"></td>

                </tr>
                <tr>
                    <td>Số Điện Thoại</td>
                    <td><input type="number" name="phone" value="<?PHP echo $taiKhoan["sdt"] ?>"></td>
                </tr>
                <tr>
                    <td id="coin">
                        <button>Xác Nhận</button>
                    </td>
                </tr>
            </table>
        </div>

    </form>

</body>

</html>