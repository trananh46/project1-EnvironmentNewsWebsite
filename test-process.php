<?PHP
if (isset($_POST["fileUpload"]) && isset($_POST["up"])) {
    $tenAnh = $_POST["fileUpload"];
    $Anh = $_POST["up"];
    include("../connect/open.php");
    $sql = "INSERT INTO `anh` (`maAnh`, `tenAnh`, `Anh`) VALUES (NULL, '$tenAnh', '$Anh')";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: up-media.php");
?>
<?PHP
} else {
    header("Location: test.php");
}
?>