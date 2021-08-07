<?PHP
if (
    isset($_POST["ho-ten"]) && isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["mail"]) && isset($_POST["birth-day"])
    && isset($_POST["phone"]) && isset($_POST["gioi-tinh"])
) {
    $hoTen = $_POST["ho-ten"];
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $mail = $_POST["mail"];
    $birth = $_POST["birth-day"];
    $phone = $_POST["phone"];
    $gender = $_POST["gioi-tinh"];
    include("../connect/open.php");
    $sql = "INSERT INTO `user` (`maUser`, `tenUser`, `username`, `password`, `email`, `sdt`, `namSinh`, `gioiTinh`)
     VALUES (NULL, '$hoTen', '$user', '$pass', '$mail', '$phone', '$birth', '$gender')";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: dangkyUSsuccess.php");
} else {
    header("Location: dangkyUS.php");
}
