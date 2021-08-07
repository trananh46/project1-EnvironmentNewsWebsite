<?PHP
if (isset($_GET["ma-baiviet"])) {
    $maBaiViet = $_GET["ma-baiviet"];
    include("../connect/open.php");
    $sql = "SELECT * FROM `baiviet` WHERE maBaiViet=$maBaiViet";
    $result = mysqli_query($con, $sql);
    $baiViet = mysqli_fetch_array($result);
    include("../connect/close.php");
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="hien-thi-baiviet.css">
    </head>

    <body>
        <h1><?PHP echo $baiViet["tenBaiViet"] ?></h1>

        <div class="left">
            <div class="mieu-ta">
                <p>
                    <?PHP
                    echo $baiViet["mieuTa"]
                    ?>
                </p>
            </div>

            <div class="content">

                <p>
                    <?PHP echo $baiViet["noiDung"] ?>
                </p>
            </div>

        </div>

        <div class="right">
            <h1>PICTURE</h1>
            <hr class="right-a">
            <img src="<?PHP echo $baiViet["anh"] ?>">
        </div>


    </body>

    </html>
<?PHP
}
?>