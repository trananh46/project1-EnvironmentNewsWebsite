<?PHP
session_start();
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    $user = $_POST["user"];
    $password = $_POST["pass"];
    include("../connect/open.php");
    $sql = "SELECT * FROM `user` WHERE username='$user' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $check = mysqli_num_rows($result);
    if ($check == 0) {
        header("Location: dangnhap.php?error=1");
    } else {
        $_SESSION["user"] = $user;
        header("Location: environment1.php");
    }
    include("../connect/close.php");
}
