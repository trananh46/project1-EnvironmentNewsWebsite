<?PHP
session_start();
if (isset($_SESSION["user"])) {
    header("Location: environment1.php");
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
        <form action="dangnhapUS-process.php" method="post">
            <div class="txt_field">
                <input type="text" name="user">

                <label>User Name</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass">

                <label>Password</label>
            </div>
            <button class="button">Login</button>

            <div class="signup_link">
                Not a member <a href="dangkyUS.php">Signup</a>
            </div>

            <?PHP
            if (isset($_GET["error"])) {
                echo "Sai mật khẩu hoặc tài khoản";
            }
            ?>
        </form>

    </div>
</body>

</html>