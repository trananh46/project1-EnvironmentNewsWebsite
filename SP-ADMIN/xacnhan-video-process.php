<?PHP
if (isset($_GET["ma-video"])) {
    $mavideo = $_GET["ma-video"];
    include("../connect/open.php");
    $sql = "UPDATE `video` SET `trangThai` = '1' WHERE `video`.`maVideo` = $mavideo";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: xacnhan-video.php");
?>
<?PHP
} else {
    header("Location: xacnhan-video.php");
}
?>