<?PHP
session_start();
if (isset($_POST["user-admin"]) && isset($_POST["pass"])) {
    $user = $_POST["user-admin"];
    $password = $_POST["pass"];
    include("../connect/open.php");
    $sql = "SELECT * FROM `admin` WHERE username='$user' AND password='$password'";
    $result = mysqli_query($con, $sql);
    $check = mysqli_num_rows($result);
    if ($check == 0) {
        header("Location: dangnhap.php?error=1");
    } else {
        $_SESSION["admin"] = $user;
        header("Location: ../SP-ADMIN/trangchuSP-ADMIN.php");
    }
    include("../connect/close.php");
}
