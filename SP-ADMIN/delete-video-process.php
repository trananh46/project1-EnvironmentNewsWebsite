<?PHP
if (isset($_GET["ma-video"])) {
    $maVideo = $_GET["ma-video"];
    include("../connect/open.php");
    $sql = "DELETE FROM `video` WHERE `video`.`maVideo` = $maVideo";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: up-video.php");
} else {
    header("Location:up-video.php");
}
