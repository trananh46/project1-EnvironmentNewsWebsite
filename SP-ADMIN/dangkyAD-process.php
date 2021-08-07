<?PHP
if (
    isset($_POST["ho-ten"]) && isset($_POST["user"]) && isset($_POST["pass"]) && isset($_POST["mail"]) && isset($_POST["birth-day"])
    && isset($_POST["phone"]) && isset($_POST["gioi-tinh"]) && isset($_POST["admin"])
) {
    $hoTen = $_POST["ho-ten"];
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $mail = $_POST["mail"];
    $birth = $_POST["birth-day"];
    $phone = $_POST["phone"];
    $gender = $_POST["gioi-tinh"];
    $admin = $_POST["admin"];
    include("../connect/open.php");
    $sql = "INSERT INTO `admin` (`maAdmin`, `tenAdmin`, `username`, `password`, `email`, `sdt`, `gioiTinh`, `namSinh`,`quyenKiemSoat`) 
    VALUES (NULL, '$hoTen', '$user', '$pass', '$mail', '$phone', '$gender', '$birth','$admin')";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: dangkyADsuccess.php");
} else {
    header("Location: dangkyAD.php");
}
