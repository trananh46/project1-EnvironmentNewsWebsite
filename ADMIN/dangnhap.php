<?PHP
session_start();
if (isset($_SESSION["admin"])) {
    header("Location:../SP-ADMIN/trangchuSP-ADMIN.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangnhap.css">
</head>

<body>
    <div class="center">
        <h1>Login</h1>
        <form action="dangnhap-process.php" method="post">
            <div class="txt_field">
                <input type="text" name="user-admin">
                <label>User Name</label>
            </div>

            <div class="txt_field">
                <input type="password" name="pass">
                <label>Password</label>
            </div>

            <button class="button">Login</button>
            <div class="pass">
                Forgot Password?
            </div>

            <?PHP
            if (isset($_GET["error"])) {
                echo "Sai mật khẩu hoặc tài khoản hoặc quyền";
            }
            ?>
        </form>

    </div>
</body>

</html>