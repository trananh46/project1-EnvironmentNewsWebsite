<?PHP
if (
    isset($_POST["maADMIN"]) && isset($_POST["name-admin"]) && isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["email"])
    && isset($_POST["sdt"]) && isset($_POST["gioi-tinh"]) && isset($_POST["birth"]) && isset($_POST["quyen"])
) {
    $id = $_POST["maADMIN"];
    $nameAdmin = $_POST["name-admin"];
    $userName = $_POST["username"];
    $password = $_POST["password"];
    $Email = $_POST["email"];
    $Sdt = $_POST["sdt"];
    $gioiTinh = $_POST["gioi-tinh"];
    $namSinh = $_POST["birth"];
    $quyenAD = $_POST["quyen"];
    include("../connect/open.php");
    $sql = "UPDATE `admin` SET `tenAdmin` = '$nameAdmin', `username` = '$userName', `password` = '$password',`email` = '$Email', `sdt` = '$Sdt', `gioiTinh` = '$gioiTinh', `namSinh` = '$namSinh', `quyenKiemSoat` = '$quyenAD' WHERE `admin`.`maAdmin` = $id";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: colleague.php");

} else {
    header("Location: colleague.php");
}
