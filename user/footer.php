<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="footer.css">
</head>

<body>
    <div>
        <header>
            <img src="logo1.png" class="image">
            <p id="logo">E n v i r o n m e n t</p>
        </header>
        <div class="midder">
            <p class="text-center"> Môi trường là một tổ hợp các yếu tố tự nhiên và xã hội bao quanh bên ngoài của một hệ thống hoặc một cá thể, <br>
                sự vật nào đó có tác động, ảnh hưởng trực tiếp hoặc gián tiếp đến sức khỏe, đời sống của con người. </p>
        </div>

        <br>
        <div class="detail-informations">
            <div class="detail-informations1">
                <p>Về Chúng Tôi</p>
            </div>
            <?PHP
            include("../connect/open.php");
            $sql = "SELECT * FROM `danhmuc` ";
            $resulut = mysqli_query($con, $sql);
            include("../connect/close.php");
            ?>
            <div class="detail-informations2">
                <p>Tin Tức</p>
                <?PHP while ($chude = mysqli_fetch_array($resulut)) { ?>
                    <a href=""><?PHP echo $chude["tenDanhMuc"]; ?> </a> <br>
                <?PHP } ?>

            </div>

            <div class="detail-informations3">
                <p>Chủ Đề</p>
                <a href="chude1.php">Chủ đề 1</a> <br>
                <a href="chude2.php">Chủ đề 2</a> <br>
                <a href="">Chủ đề 3</a> <br>
                <a href="chude4.php">Chủ đề 4</a> <br>
                <a href="">Chủ đề 5</a> <br>
            </div>
            <div class="detail-informations4">
                <p><a href="gallery-video.php">VIDEO</a> </p>
            </div>
            <div class="detail-informations5">
                <p><a href="gallery-anh.php">Ảnh</a> </p>
            </div>
        </div>
        <div class="footer">
            <p class="text-footer"> Established © 2021 by 'Tuan Anh' and 'Hoang Bao' </p>
        </div>


    </div>

</body>

</html>