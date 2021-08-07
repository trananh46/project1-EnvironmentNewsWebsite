<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="chude1.css">
</head>

<body>
    <?PHP
    include("header1.php");
    ?>
    <div class="giao-dien-gallery-video">
        <h1>ĐẠI DƯƠNG</h1>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maAnh=86";
        $resultAnh = mysqli_query($con, $sql);
        $anhNen = mysqli_fetch_array($resultAnh);
        include("../connect/close.php");
        ?>
        <img src="<?PHP echo $anhNen["Anh"] ?>">
    </div>
    <div class="noidung-chude">
        <p>
            Với đường bờ biển trải dài hơn 3.000 km và vùng lãnh hải dài hơn 12 hải lý, Việt Nam nằm ở vị trí trung tâm đa dạng sinh học của các vùng biển nhiệt đới, sở hữu nguồn cá dồi dào và các hệ sinh thái biển đa dạng như các rừng ngập mặn, rặng san hô và thảm cỏ biển. Vậy mà hiện nay, tình trạng suy thoái tài nguyên và ô nhiễm đại dương nghiêm trọng đã và đang diễn ra, mặc dù Việt Nam mới chỉ khai thác một phần tiềm năng kinh tế biển.

            Được chính phủ và các đối tác tin tưởng trong việc giải quyết các vấn đề bảo tồn biển, WWF-Việt Nam đang tập trung vào hai lĩnh vực hoạt động nhằm bảo vệ hệ sinh thái biển và ven bờ, các loài nguy cấp và sức khỏe của con người thông qua: <br>
            Gia tăng số lượng nghề cá tham gia vào quá trình chuyển đổi hoặc cải tiến hoạt động để đạt được các mục tiêu đánh bắt bền vững, đặc biệt các nghề có hoạt động đánh bắt liên quan tới những hệ sinh thái biển quan trọng và có khả năng đánh bắt không chủ đích; <br>
            Ngăn chặn ô nhiễm đại dương, đặc biệt là ô nhiễm biển do rác thải nhựa. <br>
            Chúng tôi hiện đang triển khai Dự án Cải thiện Nghề cá (FIP), hợp tác với doanh nghiệp và Chính phủ Việt Nam giải quyết tình trạng đánh bắt quá mức và đảm bảo tính bền vững của loài cá ngừ vây vàng. Dự án FIP thực hiện các đánh giá về trữ lượng cá, lượng đánh bắt không chủ đích, mối hiểm hoạ đối với hệ sinh thái, v.v.; vận động tuân thủ quy định và thực thi pháp luật tốt hơn; và triển khai mô hình đồng quản lý cùng cộng đồng ngư dân địa phương. <br>
            Để giảm thiểu lượng rác nhựa thải ra đại dương, chúng tôi đang triển khai mô hình Đô thị Giảm Nhựa nhằm vận động các đối tác liên ngành với các mục tiêu: <br>
            Các thành phố cam kết loại bỏ rác thải nhựa, ban hành và thực thi các chính sách mới để hạn chế các sản phẩm nhựa sử dụng một lần; <br>
            Doanh nghiệp cắt giảm sử dụng sản phẩm nhựa trong bộ máy vận hành, thiết lập ra và duy trì một nền tảng chia sẻ kinh nghiệm hiệu quả giữa các doanh nghiệp; <br>
            Trường học triển khai các chương trình giảng dạy thay đổi hành vi cho học sinh; <br>
            Cộng đồng địa phương áp dụng các hệ thống thu gom và phân loại rác. <br>
        </p>
    </div>
    <div class="video-youtube">
        <iframe src="https://www.youtube.com/embed/HQTUWK7CM-Y" frameborder="0" allow="accelerometer; autoplay; clipboard-write;
         encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div>
        <?PHP
        include("footer.php");
        ?>
    </div>
</body>

</html>