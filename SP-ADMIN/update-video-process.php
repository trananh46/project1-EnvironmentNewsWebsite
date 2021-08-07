<?PHP 
    if(isset($_GET["maVD"]) && isset($_GET["ten-video"])){
        $maVD=$_GET["maVD"];
        $tenVIDEO=$_GET["ten-video"];
        include("../connect/open.php");
        $sql="UPDATE `video` SET `tenVideo` = '$tenVIDEO' WHERE `video`.`maVideo` = $maVD";
        mysqli_query($con,$sql);
        include("../connect/close.php");
        header("Location: up-video.php");
    }else{
        header("Location: up-video.php");
    }
