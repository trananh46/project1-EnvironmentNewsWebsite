<?PHP
if (isset($_GET["ma-comment"])) {
    $maBinhLuan = $_GET["ma-comment"];
    include("../connect/open.php");
    $sql = "DELETE FROM `comment` WHERE `comment`.`maBinhLuan` = $maBinhLuan";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: xuly-comment.php");
?>
<?PHP
} else {
    header("Location: xuly-comment.php");
}
?>