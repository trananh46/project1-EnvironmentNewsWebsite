<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="test.css">
</head>

<body>
    <?PHP
    include("../connect/open.php");
    $sql = "SELECT * FROM `admin`";
    $result = mysqli_query($con, $sql);
    include("../connect/close.php");
    ?>

    <div class="wrap">
        <table class="head">

            <tr>
                <td style="width:6%;">STT</td>
                <td style="width:13%;">Tên ADMIN</td>
                <td style="width:13%;">UserName</td>
                <td>Password</td>
                <td>email</td>
                <td>SĐT</td>
                <td>Gender</td>
                <td>Birth</td>
                <td>Quyền</td>
                <td colspan="2">FUNCTION</td>
            </tr>
        </table>
        <div class="scroll-table">
            <table>

                <tr>
                    <?PHP
                    while ($admin = mysqli_fetch_array($result)) {
                    ?>
                        <td style="width:6%;"><?PHP echo $admin["maAdmin"] ?></td>
                        <td style="width:13%;"><?PHP echo $admin["tenAdmin"] ?></td>
                        <td style="width:13%;"><?PHP echo $admin["username"] ?></td>
                        <td style="width:15%;"><?PHP echo $admin["password"] ?></td>
                        <td><?PHP echo $admin["email"] ?></td>
                        <td><?PHP echo $admin["sdt"] ?></td>
                        <td><?PHP echo $admin["gioiTinh"] ?></td>
                        <td><?PHP echo $admin["namSinh"] ?></td>
                        <td><?PHP echo $admin["quyenKiemSoat"] ?></td>
                        <td><button>UPDATE</button></td>
                        <td><button>DELETE</button></td>
                </tr>
            <?PHP } ?>
            </table>
        </div>
    </div>
</body>

</html>