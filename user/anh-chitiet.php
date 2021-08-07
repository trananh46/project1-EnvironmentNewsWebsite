<?PHP
session_start();
if (isset($_GET["ma-anh"])) {
    $maAnh = $_GET["ma-anh"];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="anh-chitiet.css">
    </head>

    <body>
        <?PHP
        include("header1.php");
        ?>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maAnh=$maAnh";
        $result = mysqli_query($con, $sql);
        $anhChiTiet = mysqli_fetch_array($result);
        include("../connect/close.php");
        ?>
        <div class="tong">


            <div class="video-trai">
                <img src="<?PHP echo $anhChiTiet["Anh"] ?>">
                <h1><?PHP echo $anhChiTiet["tenAnh"] ?> </h1>
                Posted: <br>
                <h3><?PHP echo $anhChiTiet["ngayDang"] ?></h3>

            </div>


        </div>
        <br>
        <br>
        <div class="cuoi">
            <?PHP
            include("footer.php");
            ?>
        </div>

    </body>

    </html>
<?PHP
} else {
    header("Location: environment1.php");
}
?>