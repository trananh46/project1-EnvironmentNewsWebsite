<?PHP
if (isset($_GET["ma-comment"])) {
    $maBinhLuan = $_GET["ma-comment"];
    include("../connect/open.php");
    $sql = "UPDATE `comment` SET `trangThai` = '1' WHERE `comment`.`maBinhLuan` = $maBinhLuan";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location:xuly-comment.php");
?>
<?PHP
} else {
    header("xuly-comment.php");
}
?>