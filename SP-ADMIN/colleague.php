<?PHP
session_start();
if (isset($_SESSION["admin"])) {

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>trangchuAD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="trangchu.css">
    </head>

    <body>


        <?PHP
        include("header.php")
        ?>

        <?PHP
        include("side-bar.php");
        ?>


        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `admin` ORDER BY `admin`.`maAdmin` DESC";
        $result = mysqli_query($con, $sql);
        include("../connect/close.php");
        ?>

        <div class="content">
            <h1>ADD ADMIN</h1>
            <div class="add_admin">
                <form action="colleague-process.php" method="post">
                    <div>
                        User:<br>
                        <input type="text" name="user-admin" required>
                    </div>
                    <div>
                        Password: <br>
                        <input type="password" name="pass-admin" required>
                    </div>
                    <div>
                        <input type="radio" name="quyen" value="0">SUPER ADMIN
                        <input type="radio" name="quyen" value="1">ADMIN
                    </div>

                    <button>ADD ADMIN</button>
                </form>
            </div>




            <h1>DANH SÁCH ADMIN</h1>
            <table border="2" class="danh_sach">
                <tr>
                    <td style="width:3%;">STT</td>
                    <td>Tên ADMIN</td>
                    <td>UserName</td>
                    <td>Password</td>
                    <td>email</td>
                    <td>SĐT</td>
                    <td>Gender</td>
                    <td>Birth</td>
                    <td>Quyền</td>
                    <td colspan="2">FUNCTION</td>
                </tr>
                <tr>
                    <?PHP
                    while ($admin = mysqli_fetch_array($result)) {
                    ?>
                        <td style="width:3%;"><?PHP echo $admin["maAdmin"] ?></td>
                        <td><?PHP echo $admin["tenAdmin"] ?></td>
                        <td><?PHP echo $admin["username"] ?></td>
                        <td><?PHP echo $admin["password"] ?></td>
                        <td><?PHP echo $admin["email"] ?></td>
                        <td><?PHP echo $admin["sdt"] ?></td>
                        <td><?PHP if ($admin["gioiTinh"] == 0) {
                                echo 'Nữ';
                            } else {
                                echo 'Nam';
                            } ?></td>
                        <td><?PHP echo $admin["namSinh"] ?></td>
                        <td><?PHP if ($admin["quyenKiemSoat"] == 0) {
                                echo 'Super ADMIN';
                            } else {
                                echo 'ADMIN';
                            } ?></td>
                        <td><button><a href="update-admin.php?admin= <?PHP echo $admin["maAdmin"] ?> "> UPDATE </a></button></td>
                        <td><button><a href="delete-admin-process.php?admin= <?PHP echo $admin["maAdmin"] ?>" onclick="return confirm('Bạn có muốn xóa ADMIN không?')"> DELETE </a></button></td>
                </tr>
            <?PHP } ?>
            </table>
        </div>


    </body>

    </html>

<?PHP
} else {
    echo 'Bạn ko có quyền truy cập trang';
}
?>