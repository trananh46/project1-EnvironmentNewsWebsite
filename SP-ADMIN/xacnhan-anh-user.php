<?PHP
if (isset($_GET["ma-anh"])) {
    $maAnh = $_GET["ma-anh"];
    include("../connect/open.php");
    $sql = "UPDATE `anh` SET `trangThai` = '1' WHERE `anh`.`maAnh` = $maAnh";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: up-picture.php");
} else {
    header("Location: up-picture.php");
}
