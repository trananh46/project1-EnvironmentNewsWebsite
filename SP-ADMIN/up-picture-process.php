
<?php
if (isset($_POST["ten-anh"]) && isset($_FILES["image"]) && isset($_POST["nguoi-dang"])) {
    //B1: Lấy ảnh về
    $image = $_FILES["image"];
    $tenAnh = $_POST["ten-anh"];
    $date = date("Y-m-da");
    $nguoiDang = $_POST["nguoi-dang"];
    //B2: Tạo folder và lấy đường dẫn về
    $folder = "../upload/";
    //B3: Lấy tên về
    $imageName = $image["name"];
    //B4: Tạo đường dẫn
    $direction = $folder . $imageName;
    //B5: Di chuyển từ tmp_file đến file upload
    move_uploaded_file($image["tmp_name"], $direction);
    //B6: Lưu trữ vào DB
    include("../connect/open.php");
    $sql = "INSERT INTO `anh` (`maAnh`, `tenAnh`, `Anh`, `ngayDang`, `maADMIN`, `maUSER`, `trangThai`) VALUES (NULL, '$tenAnh', '$direction', '$date', '$nguoiDang', NULL, '1')";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: up-picture.php");
}
?>