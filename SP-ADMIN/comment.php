<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="trangchu.css">
    <link rel="stylesheet" href="comment.css">
</head>

<body>
    <?PHP
    include("header.php");
    ?>

    <?PHP
    include("side-bar.php");
    ?>
    <div class="content">
        <?PHP
        include("trangthai-comment.php");
        ?>
        <div class="danhsach-tatca-comment">
            <h2>Tất Cả Comment Của Người Dùng</h2>
            <?PHP
            include("../connect/open.php");
            $sql = "SELECT * FROM `comment` INNER JOIN user ON comment.maUser=user.maUser  
            ORDER BY `comment`.`maBinhLuan` DESC ";
            $result = mysqli_query($con, $sql);
            include("../connect/close.php");
            ?>
            <?PHP
            while ($binhluan = mysqli_fetch_array($result)) {
            ?>
                <div class="hienthi-binhluan-moinguoi">
                    <div class="binhluan-trai">
                        <img src="anh.jpg" alt="" width="50" height="50">
                    </div>
                    <div class="binhluan-phai">
                        <div class="binhluan-phai1">
                            <h3><?PHP echo $binhluan["tenUser"] ?></h3>
                            <h5>Posted:<?PHP echo $binhluan["ngayDang"] ?></h5>
                        </div>

                        <h4><?PHP echo $binhluan["noiDung"] ?></h3>
                    </div>
                    <a href="chi-tiet-baiViet.php?ma-baiviet=<?PHP echo $binhluan["maBaiViet"] ?>" class="xem-baiviet">Xem</a>
                    <div class="trangthai-comment">
                        <?PHP
                        if ($binhluan["trangThai"] == 0) {
                            echo "Chưa Xử Lý";
                        ?>
                        <?PHP
                        } else {
                            echo "Đã Xử Lý";
                        }
                        ?>
                    </div>
                </div>

            <?PHP
            }
            ?>
        </div>

    </div>
</body>

</html>