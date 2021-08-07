<?PHP 
    if(isset($_POST["ma-baiviet"]) && isset($_POST["ten-baiviet"]) && isset($_POST["mieu-ta"]) && isset($_POST["noi-dung"]) && isset($_POST["danh-muc"])){
       $maBaiViet=$_POST["ma-baiviet"];
        $tenBaiViet= $_POST["ten-baiviet"];
       $mieuTa=$_POST["mieu-ta"];
       $noiDung=$_POST["noi-dung"];
       $danhMuc=$_POST["danh-mục"];
       include("../connect/open.php");
       $sql="UPDATE `baiviet` SET `tenBaiViet` = '$tenBaiViet', `noiDung` = '$noiDung', `mieuTa` = '$mieuTa', `maDanhMuc` = '$danhMuc' WHERE `baiviet`.`maBaiViet` = $maBaiViet";
       mysqli_query($con,$sql);
       include("../connect/close.php");
       header("Location: up-baiviet.php");
    }else{
        header("Location: up-baiviet.php");
    }
