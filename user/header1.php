<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="first">
        <div class="first-left">
            <a href="environment.php" id="first-logo-left"><img src="logo1.png" style="width: 80px;"></a>
            <p id="first-name-logo">E n v i r o n m e n t</p>
        </div>

        <div class="first-right">
            <ul>
                <li>DISCOVERY
                    <ul>
                        <li><a href="danhmuc-baiviet.php" class="dangnhap">TIN</a>
                            <!-- <ul>
                                <?PHP
                                include("../connect/open.php");
                                $sql = "SELECT * FROM `danhmuc`";
                                $result = mysqli_query($con, $sql);
                                include("../connect/open.php");
                                ?>
                                <?PHP while ($danhmuc = mysqli_fetch_array($result)) { ?>
                                    <li><?PHP echo $danhmuc["tenDanhMuc"] ?></li>
                                <?PHP } ?>
                            </ul> -->
                        </li>
                        <li>CHỦ ĐỀ
                            <ul>
                                <li><a href="chude2.php" class="dangnhap">ĐẠI DƯƠNG</a></li>
                                <li><a href="chude1.php" class="dangnhap">RỪNG</a>
                                </li>
                                <li><a href="chude4.php" class="dangnhap">ĐỘNG VẬT</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>WATCH
                    <ul>
                        <li><a href="gallery-video.php" class="dangnhap"> VIDEO</a></li>
                        <li><a href="gallery-anh.php" class="dangnhap">ẢNH</a></li>
                    </ul>
                </li>
                <li><a href="sukien.php" class="dangnhap">ATTEND</a></li>
                <?PHP
                if (isset($_SESSION["user"])) {
                ?>
                    <a href="taikhoan-chitiet-user.php"><img src="anh.jpg" class="anh-user"></a>
                <?PHP } else { ?>
                    <li><a href="dangnhap.php" class="dangnhap">SIGN IN</a></li>
                <?PHP } ?>
                <form>
                    <div class="search-box">
                        <input class="search-txt" type="text" placeholder="Tìm Kiếm" name="search" value="<?PHP
                                                                                                            if (isset($_GET["search"])) {
                                                                                                                echo $_GET["search"];
                                                                                                            }
                                                                                                            ?>">
                        <a href="" class="search-btn">
                            <i class="fas fa-search"></i>
                        </a>
                    </div>
                </form>



            </ul>
        </div>

    </div>
</body>

</html>