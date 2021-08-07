<?PHP
if (isset($_GET["admin"])) {
    $admin = $_GET["admin"];
    include("../connect/open.php");
    $sql = "DELETE FROM `admin` WHERE `admin`.`maAdmin` = $admin";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: colleague.php");
?>
<?PHP
} else {
    header("Location: colleague.php");
}
?>