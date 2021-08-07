<?PHP 
    if(isset($_GET["maAnh"]) && isset($_GET["ten-anh"])){
        $maAnh=$_GET["maAnh"];
        $tenAnh=$_GET["ten-anh"];
        include("../connect/open.php");
        $sql="UPDATE `anh` SET `tenAnh` = '$tenAnh' WHERE `anh`.`maAnh` = $maAnh";
        mysqli_query($con,$sql);
        include("../connect/close.php");
        header("Location: up-picture.php");
    }else{
        header("Location: up-picture.php");
    }
