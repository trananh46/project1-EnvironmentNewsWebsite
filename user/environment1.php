<?PHP
session_start();
if (isset($_SESSION["user"])) {
    $user1 = $_SESSION["user"];
?>
    <?PHP
    include("../connect/open.php");
    $sql = "SELECT * FROM `user` WHERE username='$user1'";
    $result = mysqli_query($con, $sql);
    $thongtin = mysqli_fetch_array($result);
    include("../connect/close.php");
    ?>
    <?PHP
    if ($thongtin["trangThai"] == 0) {
    ?>
        <?PHP
        if (isset($_GET["search"])) {
            header("danhmuc-baiviet.php");
        ?>

        <?PHP
        } else {
        ?>



            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>environment</title>
                <link rel="stylesheet" href="environment1.css">
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
            </head>

            <body>
                <?PHP
                include("header1.php");
                ?>

                <header id="head">

                </header>
                <br>

                <h1 class="title-tin-noibat">TIN NỔI BẬT</h1>
                <hr class="under-title-tin-noibat">
                <!---HIỂN THỊ BÀI VIẾT NỔI BẬT Ở ĐÂY --->

                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `baiviet` WHERE maDanhMuc=6 LIMIT 1";
                $result = mysqli_query($con, $sql);
                $baiVietNoiBat = mysqli_fetch_array($result);
                include("../connect/close.php");
                ?>
                <div class="phan-dau">
                    <div class="phan-dau-left">
                        <div>
                            <h1><?PHP echo $baiVietNoiBat["tenBaiViet"] ?></h1> <br>
                            <p><?PHP echo $baiVietNoiBat["mieuTa"] ?></p>
                            <a href="baiviet-noibat.php?maBaiViet=<?PHP echo $baiVietNoiBat["maBaiViet"] ?>">Learn more </a>
                        </div>

                    </div>
                    <div class="phan-dau-right">
                        <img src="<?PHP echo $baiVietNoiBat["anh"] ?>">
                    </div>

                </div>
                <br>
                <h1 class="title-newpost">Tin Mới Nhất</h1>
                <hr class="under-title-newpost">
                <!---BÀI VIẾT MỚI NHẤT---->
                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `baiviet` INNER JOIN admin ON baiviet.maADMIN=admin.maAdmin WHERE maDanhMuc=7 ORDER BY `baiviet`.`maBaiViet` DESC LIMIT 0,3 ";
                $result = mysqli_query($con, $sql);
                include("../connect/close.php");
                ?>
                <div class="tong-baiviet-moinhat">
                    <?PHP while ($baiVietMoiNhat = mysqli_fetch_array($result)) { ?>



                        <div class="t">

                            <img src="<?PHP echo $baiVietMoiNhat["anh"] ?>" width="418" height="300">
                            <br>

                            <p class="ngay-dang-bai-viet-moinhat">

                                Ngày Đăng:
                                <?PHP echo $baiVietMoiNhat["ngayDang"] ?>
                                <br>
                                By:
                                <?PHP echo $baiVietMoiNhat["tenAdmin"] ?>
                            </p>
                            <br>

                            <h1 class="ten-baiviet-moinhat">
                                <?PHP
                                echo $baiVietMoiNhat["tenBaiViet"]
                                ?>
                            </h1>

                            <p class="mieuta-baiviet-moinhat">
                                <?PHP
                                echo $baiVietMoiNhat["mieuTa"]
                                ?>
                            </p>
                            <br>

                            <a href="baiviet-noibat.php?maBaiViet=<?PHP echo $baiVietMoiNhat["maBaiViet"] ?>"><i class="fas fa-arrow-circle-right"></i></a>

                        </div>
                    <?PHP } ?>
                </div>

                <br>
                <br>

                <div class="button-baiviet-moinhat">
                    <a href="danhmuc-baiviet.php">ĐỌC THÊM</a>
                </div>
                <div class="anh-nen-footer">
                    <div class="chitet-anh-nen">
                        <?PHP
                        include("../connect/open.php");
                        $sql = "SELECT * FROM `anh` WHERE maAnh=72";
                        $resultAnh = mysqli_query($con, $sql);
                        $anhNen = mysqli_fetch_array($resultAnh);
                        include("../connect/close.php");
                        ?>
                        <img src="<?PHP echo $anhNen["Anh"] ?>" width="1300" height="750">
                    </div>
                </div>
                <br>
                <h1 class="title-anh">VIDEO</h1>
                <hr class="under-title-anh">
                <!---VIDEO ---->
                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `video` INNER JOIN admin ON Video.maADMIN = admin.maAdmin ORDER BY `maVideo` DESC LIMIT 1";
                $result = mysqli_query($con, $sql);
                $video = mysqli_fetch_array($result);
                include("../connect/close.php");
                ?>
                <div class="video-trangchinh">
                    <div class="video-trangchinh-left">
                        <video controls class="video">
                            <source src="<?PHP echo $video["Video"] ?>">
                        </video>
                    </div>
                    <div class="title-video">
                        <div class="title-video-thongtinVideo">
                            <p>Posted: <?PHP echo $video["ngayDang"] ?></p>
                            <p>By:<?PHP echo $video["tenAdmin"] ?></p>
                        </div>
                        <hr class="below-title-video">

                        <div class="title-video-thongtinVideo1">
                            <h1><?PHP echo $video["tenVideo"] ?></h1>
                        </div>
                        <hr class="below-title-video1">
                        <div class="title-video-thongtinVideo2">
                            <p>Cùng nhau,Khám phá các chủ đề video từ những ý tưởng mới trong việc khắc phục và bảo vệ môi trường từ
                                bộ sưu tập của Environment
                            </p>
                        </div>
                        <div class="titile-video-thongtinVideo3">
                            <a href="gallery-video.php">KHÁM PHÁ</a>
                        </div>
                    </div>
                </div>
                <br>

                <?PHP
                include("../connect/open.php");
                $sql = "SELECT * FROM `video` LIMIT 5";
                $result = mysqli_query($con, $sql);
                include("../connect/close.php");
                ?>
                <!---LIST VIDEO --->
                <h4 class="start-listvideo-trangchinh">LIST VIDEO</h4>
                <div class="list-video-trangchinh">
                    <?PHP while ($listVideo = mysqli_fetch_array($result)) { ?>
                        <div class="list-video-trangchinh-chitiet">
                            <a href="video-chitiet.php?ma-video=<?PHP echo $listVideo["maVideo"] ?>">
                                <video controls>
                                    <source src="<?PHP echo $listVideo["Video"] ?>">
                                </video>

                                <br>
                                <h4><?PHP echo $listVideo["tenVideo"] ?></h4>
                            </a>
                        </div>
                    <?PHP } ?>
                </div>
                <br>
                <br>
                <h1 class="title-anh">PICTURE</h1>
                <hr class="under-title-anh">
                <!----PICTURE---->
                <?PHP
                include("../connect/open.php");
                $sql = "    SELECT * FROM `anh` INNER JOIN admin on anh.maADMIN = admin.maAdmin ORDER BY `anh`.`maAnh` DESC LIMIT 1";
                $result = mysqli_query($con, $sql);
                $anh = mysqli_fetch_array($result);
                include("../connect/close.php");
                ?>
                <div class="hienthi-anh-trangchinh">
                    <div class="hienthi-anh-trangchinh-left">
                        <img src="<?PHP echo $anh["Anh"]  ?>">
                    </div>
                    <div class="hienthi-anh-trangchinh-right">
                        <div class="title-video-thongtinVideo">
                            <p>Posted: <?PHP echo $anh["ngayDang"] ?></p>
                            <p>By: <?PHP echo $anh["tenAdmin"] ?></p>
                        </div>
                        <hr class="below-title-video">
                        <div class="title-video-thongtinVideo1">
                            <h1><?PHP echo $anh["tenAnh"] ?></h1>
                        </div>
                        <hr class="below-title-video1">
                        <div class="title-video-thongtinVideo2">
                            <p>Cùng nhau,Khám phá các chủ đề ảnh từ những ý tưởng mới trong việc khắc phục và bảo vệ môi trường từ
                                bộ sưu tập của Environment
                            </p>
                        </div>
                        <div class="titile-video-thongtinVideo3">
                            <a href="gallery-anh.php">KHÁM PHÁ</a>
                        </div>
                    </div>
                </div>
                <br>

                <br>
                <!----CHỦ ĐỀ---->
                <h1 class="title-anh">CHỦ ĐỀ</h1>
                <hr class="under-title-anh">

                <div class="chu-de">
                    <div>
                        <a href="chude1.php"><img src="chude1.jpeg" alt=""></a>
                        <h1>RỪNG</h1>
                    </div>
                    <div>
                        <a href="chude2.php"><img src="chude2.jpeg" alt=""></a>
                        <h1>ĐẠI DƯƠNG</h1>
                    </div>
                    <div>
                        <a href=""><img src="chude3.jpeg" alt=""></a>
                        <h1>NĂNG LƯỢNG</h1>
                    </div>

                </div>
                <br>

                <div class="chu-de1">
                    <div>
                        <a href="chude4.php"><img src="chude4.jpeg" alt=""></a>
                        <h1>ĐỘNG VẬT</h1>
                    </div>
                    <div>
                        <a href="chude5.php"><img src="chude5.jpeg" alt=""></a>
                        <h1>KHÍ HẬU</h1>
                    </div>
                    <div>
                        <a href=""><img src="chude6.jpeg" alt=""></a>
                        <h1>THỰC PHẨM</h1>
                    </div>

                </div>
                <br>
                <div class="start-lienhe">
                    <h1 class="title-anh">TÌM HIỂU THÊM</h1>
                    <hr class="under-title-anh">
                </div>
                <br>
                <div class="lien-he">
                    <div>
                        <a href="https://www.facebook.com/WWF">
                            <i class="fab fa-facebook-square"></i>
                            <p>FACEBOOK</p>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/user/WWF">
                            <i class="fab fa-youtube"></i>
                            <p>YOUTUBE</p>
                        </a>
                    </div>
                    <div>
                        <a href="https://www.instagram.com/wwf/">
                            <i class="fab fa-instagram"></i>
                            <p>INSTAGRAM</p>
                        </a>
                    </div>
                </div>
                <br>

                <br>
                <div class="range-footer">
                    <?PHP
                    include("footer.php");
                    ?>
                </div>



            </body>

            </html>
        <?PHP
        }
        ?>
    <?PHP
    } else {
        header("Location: khoa-taikhoan.php");
    }
    ?>
<?PHP
} else {
    header("Location: loi-dangnhap.php");
}
?>