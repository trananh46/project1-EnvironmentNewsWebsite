<?PHP
if (isset($_POST["up-danhmuc"])) {
    $danhmuc = $_POST["up-danhmuc"];
    include("../connect/open.php");
    $sql = "INSERT INTO `danhmuc` (`maDanhMuc`, `tenDanhMuc`) VALUES (NULL, '$danhmuc')";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: up-danhmuc.php");
?>
<?PHP
} else {
    header("Location: up-danhmuc.php");
}
?>