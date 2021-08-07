<?PHP
if (isset($_GET["ma-baiviet"])) {
    $maBaiViet = $_GET["ma-baiviet"];
    include("../connect/open.php");
    $sql = "DELETE FROM `baiviet` WHERE `baiviet`.`maBaiViet` = $maBaiViet";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: up-baiviet.php");
} else {
    header("Location: up-baiviet.php");
}
