<?PHP
if (
    isset($_POST["ten-baiviet"]) && isset($_POST["noi-dung"]) && isset($_POST["mieu-ta"])
    && isset($_FILES["image"]) && isset($_POST["date"]) && isset($_POST["nguoi-dang"])
) {
    $tenBaiViet = $_POST["ten-baiviet"];
    $noiDung = $_POST["noi-dung"];
    $mieuTa = $_POST["mieu-ta"];
    $image = $_FILES["image"];
    $date = $_POST["date"];
    $nguoiDang = $_POST["nguoi-dang"];
    $folder = "../upload/";
    $imageName = $image["name"];
    $direction = $folder . $imageName;
    move_uploaded_file($image["tmp_name"], $direction);
    include("../connect/open.php");
    $sql = "INSERT INTO `baiviet` (`maBaiViet`, `tenBaiViet`, `noiDung`, `mieuTa`, `anh`, `maDanhMuc`, `ngayDang`, `maADMIN`, `maUSER`, `trangThai`) 
    VALUES (NULL, '$tenBaiViet', '$noiDung', '$mieuTa', '$direction', '8', '$date', NULL, '$nguoiDang', '0')";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: user-up-baiviet.php");
?>
<?PHP
} else {
    header("Location: user-up-baiviet.php");
}
?>