<?PHP
if (isset($_POST["user-admin"]) && isset($_POST["pass-admin"]) && isset($_POST["quyen"])) {
    $UserAdmin = $_POST["user-admin"];
    $PassAdmin = $_POST["pass-admin"];
    $quyen = $_POST["quyen"];
    //MỞ KẾT NỐI
    include("../connect/open.php");
    $sql = "INSERT INTO admin(username,password,quyenKiemSoat) VALUES('$UserAdmin','$PassAdmin','$quyen')";
    mysqli_query($con, $sql);
    //ĐÓNG KẾT NỐI
    include("../connect/close.php");
    header("Location: colleague.php");
} else {
    echo "Fill to add class";
}
