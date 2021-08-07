<?PHP
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

    <link rel="stylesheet" href="up-baiviet.css">
</head>

<body>
    <?PHP
    include("header.php");
    include("side-bar.php");
    ?>
    <div class="content">
        <!------ Thêm Bài Viết------>
        <div class="up-baiviet">

            <h1>ADD Bài Viết</h1>
            <a href="up-baiviet-form.php">HERE</a>
        </div>
        <div class="phanloai-baiviet">
            <a href="up-baiviet.php">Tất Cả</a>
            <a href="up-baiviet-admin.php">WEBSITE</a>
            <a href="up-baiviet-user.php">NGƯỜI DÙNG</a>
            <a href="xacnhan-baiviet.php">CHỜ XÁC NHẬN</a>
        </div>
        <!----HIỂN THỊ BÀI VIẾT--->
        <?PHP
        include("../connect/open.php");
        //Tìm tổng số trang
        //- set sẵn limit
        $limit = 2;
        $start = 0;
        //đếm tổng số bài viết của trang
        $sqlDemBaiViet = "SELECT COUNT(*) as tongBaiViet FROM `baiviet`";
        $resultDemBaiViet = mysqli_query($con, $sqlDemBaiViet);
        $demBaiViet = mysqli_fetch_array($resultDemBaiViet);
        $tongSoBaiViet = $demBaiViet["tongBaiViet"];
        //Tính số trang
        $tongSoTrang = ceil($tongSoBaiViet / $limit);
        //Hiển thị danh sách trang
        //Chúng ta lấy số trang hiện tại
        if (isset($_GET["trang"])) {
            $trang = $_GET["trang"];
            $start = ($trang - 1) * $limit;
        }
        $sql = "SELECT * FROM `baiviet` INNER JOIN danhmuc on baiviet.maDanhMuc = danhmuc.maDanhMuc ORDER BY `maBaiViet` DESC LIMIT $start,$limit";
        $result = mysqli_query($con, $sql);

        include("../connect/close.php");

        ?>
        <br>
        <!--- TÌM KIẾM --->
        <?php
        include("../connect/open.php");
        if (isset($_GET["search"])) {
            $search = $_GET["search"];
            $sql = " SELECT * FROM `baiviet` INNER JOIN danhmuc on baiviet.maDanhMuc = danhmuc.maDanhMuc WHERE tenBaiViet LIKE '%$search%'";
        } else {
            $sql = "SELECT * FROM `baiviet` INNER JOIN danhmuc on baiviet.maDanhMuc = danhmuc.maDanhMuc WHERE trangthai=1 ORDER BY `maBaiViet` DESC LIMIT $start,$limit";
        }
        $resultTimKiem = mysqli_query($con, $sql);
        include("../connect/close.php");
        ?>


        <form>
            <input type="text" name="search" value="<?php if (isset($_GET["search"])) {
                                                        echo $_GET["search"];
                                                    } ?>">
            <button>Tìm Kiếm</button>
        </form>


        <h1>HIỂN THỊ BÀI VIẾT</h1>
        <div class="xem-baiviet">
            <?PHP while ($baiViet = mysqli_fetch_array($resultTimKiem)) { ?>

                <div class="bai-viet">

                    <div class="left">
                        <h1>Tên Bài Viết:</h1>
                        <h2><?PHP echo $baiViet["tenBaiViet"] ?></h2>
                        <h1>MIÊU TẢ:</h1>
                        <p><?PHP echo $baiViet["mieuTa"] ?></p>
                        <h1>Danh Mục:</h1>
                        <p><?PHP echo $baiViet["tenDanhMuc"] ?></p>

                    </div>
                    <div class="right">
                        <div class="button">
                            <ul>
                                <li><a href="update-baiviet.php?ma-baiviet=<?PHP echo $baiViet["maBaiViet"] ?>">UPDATE</a></li>
                                <li><a href="delete-baiviet.php?ma-baiviet=<?PHP echo $baiViet["maBaiViet"] ?>" onclick="return confirm('Do You Want to Delete VIDEO ?')">DELETE</a></li>
                                <li><a href="chi-tiet-baiViet.php?ma-baiviet=<?PHP echo $baiViet["maBaiViet"] ?>">DETAILS</a></li>
                            </ul>
                        </div>

                    </div>

                </div>
                <hr>
                <br>
            <?PHP
            }
            ?>
        </div>
        <?PHP
        for ($soTrang = 1; $soTrang <= $tongSoTrang; $soTrang++) {
        ?>
            <a href="?trang=<?PHP echo $soTrang ?>"><?PHP echo $soTrang ?></a>
        <?PHP
        }
        ?>
    </div>
</body>

</html>