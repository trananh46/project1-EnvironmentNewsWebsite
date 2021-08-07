<?PHP
session_start();
if (isset($_SESSION["admin"])) {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>trangchuAD</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <link rel="stylesheet" href="trangchu.css">
    </head>

    <body>

        <?PHP
        include("header.php");
        ?>
        <?PHP
        include("side-bar.php");
        ?>
        <div class="content">
            <?php
            echo date("Y-m-d");
            ?>
        </div>


    </body>

    </html>

<?PHP
} else {
    header("Location: ../ADMIN/dangnhap.php");
}
?>