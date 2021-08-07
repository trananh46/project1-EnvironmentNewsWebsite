<?PHP
if (isset($_GET["ma-anh"])) {
    $maAnh = $_GET["ma-anh"];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE `maAnh`=$maAnh";
        $result = mysqli_query($con, $sql);
        $anh = mysqli_fetch_array($result);
        include("../connect/close.php");
        ?>
        <div>
            <form action="update-picture-process.php">
                <input type="hidden" name="maAnh" value="<?PHP echo $anh["maAnh"] ?>">
                TÊN PICTURE: <br>
                <input type="text" name="ten-anh" value="<?PHP echo $anh["tenAnh"] ?>"> <br>
                <button>UPDATE</button>
            </form>
        </div>
    </body>

    </html>
<?PHP
} else {
}
?>