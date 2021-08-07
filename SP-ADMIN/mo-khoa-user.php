<?PHP
if (isset($_GET["ma-user"])) {
    $ma = $_GET["ma-user"];
    include("../connect/open.php");
    $sql = "UPDATE `user` SET `trangThai` = '0' WHERE `user`.`maUser` = $ma";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: members-list.php");
}
