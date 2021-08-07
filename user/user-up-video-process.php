<?php
if (isset($_POST["ten-video"]) && isset($_FILES["video"]) && isset($_POST["nguoi-dang"])) {
    //B1: Lấy ảnh về
    $video = $_FILES["video"];
    $tenVideo = $_POST["ten-video"];
    $date = date("Y-m-d");
    $nguoiDang = $_POST["nguoi-dang"];
    //B2: Tạo folder và lấy đường dẫn về
    $folder = "../upload-VIDEO/";
    //B3: Lấy tên về
    $videoName = $video["name"];
    //B4: Tạo đường dẫn
    $direction = $folder . $videoName;
    //B5: Di chuyển từ tmp_file đến file upload
    move_uploaded_file($video["tmp_name"], $direction);
    //B6: Lưu trữ vào DB
    include("../connect/open.php");
    $sql = "INSERT INTO `video` (`maVideo`, `tenVideo`, `Video`, `ngayDang`, `maADMIN`, `maUSER`, `trangThai`) VALUES (NULL, '$tenVideo', '$direction', '$date', NULL, '$nguoiDang', '0')";
    mysqli_query($con, $sql);
    include("../connect/close.php");
    header("Location: user-up-video.php");
}
