<?PHP
session_start();
if (isset($_GET["ma-video"])) {
    $maVideo = $_GET["ma-video"];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="video-chitiet.css">
    </head>

    <body>
        <div>
            <?PHP
            include("header1.php");
            ?>
        </div>
        <br> <br> <br>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `video`  WHERE maVideo=$maVideo";
        $result = mysqli_query($con, $sql);
        $video = mysqli_fetch_array($result);
        include("../connect/close.php");
        ?>
        <div class="tong">


            <div class="video-trai">
                <video controls>
                    <source src="<?PHP echo $video["Video"] ?>">
                </video>
                <h1><?PHP echo $video["tenVideo"] ?> </h1>
                <?PHP ?>


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