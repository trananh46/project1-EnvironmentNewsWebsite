<?PHP
if (isset($_GET["ma-video"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="up-media.css">
    </head>

    <body>
        <?PHP
        $maVideo = $_GET["ma-video"];
        include("../connect/open.php");
        $sql = "SELECT * FROM `video` WHERE maVideo='$maVideo'";
        $result = mysqli_query($con, $sql);
        $Video = mysqli_fetch_array($result);
        include("../connect/close.php");
        ?>
        <div>
            <form action="update-video-process.php">
                <input type="hidden" name="maVD" value="<?PHP echo $Video["maVideo"]; ?>">
                TÊN VIDEO: <br>
                <input type="text" name="ten-video" value="<?PHP echo $Video["tenVideo"] ?>"> <br>
                VIDEO: <br>
                <video controls class="update-video">
                    <source src="<?PHP echo $Video["Video"] ?>">
                </video> <br>
                <button>UPDATE</button>
            </form>
        </div>
    </body>

    </html>
<?PHP
} else {
}
?>