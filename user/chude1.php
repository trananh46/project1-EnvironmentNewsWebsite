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
        <h1>RỪNG</h1>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maAnh=83";
        $resultAnh = mysqli_query($con, $sql);
        $anhNen = mysqli_fetch_array($resultAnh);
        include("../connect/close.php");
        ?>
        <img src="<?PHP echo $anhNen["Anh"] ?>">
    </div>
    <div class="noidung-chude">
        <p>Hàng năm vẫn có những loài mới được phát hiện trong những cánh rừng của Việt Nam, như cóc núi Elfin và thằn lằn cá sấu. Tuy nhiên, theo Giám sát Rừng Toàn cầu (Global Forest Watch – GFW), từ năm 2001 đến năm 2018, Việt Nam đã mất đi hơn 2.6 triệu héc-ta rừng, tương đương với giảm 16% diện tích rừng so với năm 2000. <br>
            <br>
            Những cánh rừng Việt Nam đang phải đối mặt với nhiều nguy cơ. Xuất khẩu gỗ của Việt Nam đang bùng nổ, tăng trưởng gấp đôi với kim ngạch đạt 9 tỉ đô-la Mỹ trong giai đoạn 2012-2018. Mặc dù tạo thêm được việc làm và cải thiện cuộc sống của hàng nghìn chủ hộ rừng lớn nhỏ cùng các cộng đồng địa phương, ngành công nghiệp chế biến gỗ ở Việt Nam đã ảnh hưởng rõ rệt đến việc quản lý và bảo vệ rừng không chỉ đối với Việt Nam, mà còn đối với các quốc gia láng giềng như Lào và Campuchia. Thêm vào đó, sự phát triển của nông nghiệp cũng đe dọa các khu rừng nguyên sinh bên trong và xung quanh các khu vực bảo tồn, phá hủy sinh cảnh quan trọng của các loài hoang dã và làm suy thoái giá trị các hệ sinh thái quý giá của chúng ta như nước ngọt và không khí sạch.
            <br>
            WWF đang nỗ lực tạo ra sự cân bằng hài hòa giữa bảo tồn và phục hồi các hệ sinh thái rừng và sự đa dạng sinh học của chúng, đồng thời vẫn đảm bảo sinh kế và phát triển kinh tế - xã hội một cách bền vững. <br> <br>

            Chiến lược của WWF-Việt Nam bao gồm: <br>

            Giảm tác động của ngành lâm nghiệp Việt Nam lên tới môi trường ở cả trong nước và trên toàn cầu; <br>
            Các khu bảo tồn tại Trung Trường Sơn được bảo vệ hoặc quản lý tốt hơn; <br>
            Mở rộng diện tích các khu bảo tồn và đảm bảo công tác bảo tồn được thực hiện hiệu quả; <br>
            Bảo tồn rừng phòng hộ đầu nguồn thông qua các kế hoạch quản lý rừng bền vững;<br>
            Gia tăng số lượng rừng được quản lý tốt bằng cách áp dụng các phương thức sản xuất và quản lý rừng theo chứng chỉ quốc tế;<br>
            Khuyến khích thêm nhiều cộng đồng tham gia vào quản lý và bảo vệ rừng bền vững để cải thiện sinh kế tại địa phương dựa trên các cơ chế tài chính bền vững;<br>
            Phục hồi các hành lang rừng quan trọng và các khu vực bị phân mảnh;<br>
            Duy trì tỷ lệ mất rừng tự nhiên dưới 0.3%;<br>
            Tiếp tục tìm kiếm những chiến lược can thiệp mang tính đột phá để tăng cường bảo vệ rừng và bảo tồn đa dạng sinh học.<br>
            Tìm hiểu thêm về diễn đàn Giải pháp Rừng tại <a href="http://forestsolutions.panda.org/">http://forestsolutions.panda.org</a>

        </p>
    </div>
    <div class="video-youtube">
        <iframe src="https://www.youtube.com/embed/ob0urh1P3Rg" frameborder="0" allow="accelerometer;
     autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div>
        <?PHP
        include("footer.php");
        ?>
    </div>

</body>

</html>