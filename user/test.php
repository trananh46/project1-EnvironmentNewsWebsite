<?PHP
if (
    isset($_POST["id"]) && isset($_POST["ho-ten"]) && isset($_POST["user"])
    && isset($_POST["pass"]) && isset($_POST["mail"]) && isset($_POST["phone"])
) {
    $mauser = $_POST["id"];
    $hoten = $_POST["ho-ten"];
    $username = $_POST["user"];
    $pasword = $_POST["pass"];
    $email = $_POST["mail"];
    $sdt = $_POST["phone"];
    include("../connect/open.php");
    $sql = "UPDATE `user` SET `tenUser` = '$hoten', `username` = '$username', `password` = '$pasword', `email` = '$email', `sdt` = '$sdt' 
    WHERE `user`.`maUser` = $mauser AND `user`.`username` = '$username'";
    mysqli_query($con, $sql);
    include('../connect/close.php');
    header("Location: taikhoan-chitiet-user.php");
?>
<?PHP
} else {
    header("Location: taikhoan-chitiet-user.php");
}
?>