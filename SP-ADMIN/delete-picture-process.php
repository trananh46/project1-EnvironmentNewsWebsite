<?PHP 
    if(isset($_GET["ma-anh"])){
        $maAnh=$_GET["ma-anh"];
        include("../connect/open.php");
        $sql="DELETE FROM `anh` WHERE `anh`.`maAnh` = $maAnh";
        mysqli_query($con,$sql);
        include("../connect/close.php");
        header("Location: up-picture.php");
    }
