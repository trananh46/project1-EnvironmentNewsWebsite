<?php
session_start();
if (isset($_SESSION["admin"])) {
?>
    <!DOCTYPE>
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
        include("header.php");
        ?>
        <?PHP
        include("side-bar.php");
        ?>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `user` ORDER BY `maUser` DESC";
        $result = mysqli_query($con, $sql);
        if (isset($_GET["search"])) {
            $search = $_GET["search"];
            $sql = "SELECT * FROM `user` WHERE username LIKE '%$search%'";
        } else {
            $sql = "SELECT * FROM `user` ORDER BY `maUser` DESC";
        }
        $result = mysqli_query($con, $sql);
        include("../connect/close.php");

        ?>



        <div class="content">
            <div class="tim-kiem">
                <h1>Tìm Kiếm</h1>
                <form>
                    <input type="text" name="search" value="<?php if (isset($_GET["search"])) {
                                                                echo $_GET["search"];
                                                            } ?>">
                    <button>Tìm Kiếm</button>
                </form>

            </div>
            <div>

                <?PHP
                include("../connect/open.php");
                if (isset($_GET["search"])) {
                    $search = $_GET["search"];
                    $sql = "SELECT * FROM `user` WHERE tenUser LIKE '%$search%'";
                } else {
                    $sql = "SELECT * FROM `user`";
                }
                $result = mysqli_query($con, $sql);
                include("../connect/close.php");

                ?>
                <h1>DANH SÁCH USER</h1>
                <table border="2" class="danh_sach">
                    <tr>
                        <td style="width:3%;">STT</td>
                        <td>Tên User</td>
                        <td>UserName</td>
                        <td>Password</td>
                        <td>email</td>
                        <td>SĐT</td>
                        <td>Gender</td>
                        <td>Birth</td>
                        <td colspan="2">FUNCTION</td>
                    </tr>
                    <tr>
                        <?PHP
                        while ($user = mysqli_fetch_array($result)) {
                        ?>
                            <td style="width:3%;"><?PHP echo $user["maUser"] ?></td>
                            <td><?PHP echo $user["tenUser"] ?></td>
                            <td><?PHP echo $user["username"] ?></td>
                            <td><?PHP echo $user["password"] ?></td>
                            <td><?PHP echo $user["email"] ?></td>
                            <td><?PHP echo $user["sdt"] ?></td>
                            <td><?PHP if ($user["gioiTinh"] == 0) {
                                    echo 'Nữ';
                                } else {
                                    echo 'Nam';
                                } ?></td>
                            <td><?PHP echo $user["namSinh"] ?></td>
                            <td><button>
                                    <?PHP
                                    if ($user["trangThai"] == 0) {

                                    ?>
                                        <a href="khoa-user.php?ma-user=<?PHP echo $user["maUser"] ?>">KHÓA</a>

                                    <?PHP
                                    } else {
                                    ?>
                                        <a href="mo-khoa-user.php?ma-user=<?PHP echo $user["maUser"] ?>">MỞ KHÓA</a>
                                    <?PHP
                                    }
                                    ?>








                                </button></td>
                            <td><button><a href="">DELETE </a></button></td>
                    </tr>
                <?PHP } ?>
                </table>
            </div>
        </div>
    </body>

    </html>
<?PHP
}
?>