<?PHP
if (isset($_GET["admin"])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?PHP
        $admin = $_GET["admin"];
        include("../connect/open.php");
        $sql = "SELECT * FROM `admin` WHERE maAdmin=$admin";
        $result = mysqli_query($con, $sql);
        include("../connect/close.php");
        $update = mysqli_fetch_array($result);
        ?>
        <form action="update-admin-process.php" method="post">
            <input type="hidden" name="maADMIN" value="<?PHP echo $update["maAdmin"] ?>">
            Tên ADMIN: <br>
            <input type="text" name="name-admin" value="<?PHP echo $update["tenAdmin"] ?>"> <br>
            UserName: <br>
            <input type="text" name="username" value="<?PHP echo $update["username"] ?>"> <br>
            PassWord: <br>
            <input type="text" name="password" value="<?PHP echo $update["password"] ?>"> <br>
            Email: <br>
            <input type="text" name="email" value="<?PHP echo $update["email"] ?>"> <br>
            SĐT: <br>
            <input type="number" name="sdt" value="<?PHP echo $update["sdt"] ?>"> <br>
            giới tính: <br>
            <input type="radio" name="gioi-tinh" value="1" <?PHP if ($update["gioiTinh"] == 1) {
                                                                echo "checked";
                                                            } ?>>Nam
            <input type="radio" name="gioi-tinh" value="0" <?PHP if ($update["gioiTinh"] == 0) {
                                                                echo "checked";
                                                            } ?>>Nữ <br>
            Năm Sinh: <br>
            <input type="date" name="birth" value="<?PHP echo $update["namSinh"] ?>"> <br>
            Quyền Kiểm Soát: <br>
            <input type="radio" name="quyen" value="0" <?PHP if ($update["quyenKiemSoat"] == 0) {
                                                            echo "checked";
                                                        } ?>> Super ADMIN
            <input type="radio" name="quyen" value="1" <?PHP if ($update["quyenKiemSoat"] == 1) {
                                                            echo "checked";
                                                        } ?>> ADMIN <br>
            <button>UPDATE</button>
        </form>
    </body>

    </html>
<?PHP
}
?>