<?PHP
session_start();
if (isset($_GET["ma-baiviet"]) && isset($_GET["ma-nguoidung"]) && isset($_GET["binh-luan"])) {
    $maBaiViet = $_GET["ma-baiviet"];
    $maNguoiDung = $_GET["ma-nguoidung"];
    $binhLuan = $_GET["binh-luan"];
    $date = date("Y-m-d");
    include("../connect/open.php");
    $sql = "INSERT INTO `comment` (`maBaiViet`, `maUser`, `noiDung`, `ngayDang`, `trangThai`) 
VALUES ('$maBaiViet', '$maNguoiDung', '$binhLuan', '$date', '0')";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: environment1.php");
?>
<?PHP
} else {
    header("Location: environment1.php");
}
?>