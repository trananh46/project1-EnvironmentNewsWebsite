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
        <h1>ĐỘNG VẬT</h1>
        <?PHP
        include("../connect/open.php");
        $sql = "SELECT * FROM `anh` WHERE maAnh=87";
        $resultAnh = mysqli_query($con, $sql);
        $anhNen = mysqli_fetch_array($resultAnh);
        include("../connect/close.php");
        ?>
        <img src="<?PHP echo $anhNen["Anh"] ?>">
    </div>
    <div class="noidung-chude">
        <p>
            Một trong những phát hiện lớn nhất là loài Sao la vào năm 1992. Sao la được công nhận là loài thú lớn đầu tiên khoa học ghi nhận được trong hơn 50 năm qua và là một trong số những phát hiện về động vật kỳ diệu nhất của thế kỷ 20. Tuy nhiên, sự đa dạng sinh học quý báu này đang bị đe dọa do mất sinh cảnh, mất rừng và suy thoái rừng, cũng như bị săn bắt trái phép đang diễn ra phổ biến. <br>

            Đã từng là loài vô cùng phong phú, số lượng voi châu Á ở Việt Nam đã giảm nhanh chóng xuống chỉ còn khoảng trên dưới một trăm cá thể ngoài hoang dã. Đáng buồn là, Việt Nam vừa là nơi cung cấp, trung chuyển, vừa là điểm đến của nạn buôn bán động vật hoang dã. Thị trường buôn bán các loài hoang dã trái phép ở khu vực Đông Nam Á được ước tính có trị giá lên tới 8-10 tỷ đô-la Mỹ, gây ảnh hưởng nghiêm trọng tới các loài bản địa của khu vực cũng như các loài ở châu lục khác như tê giác và voi châu Phi. <br>
            Các nỗ lực bảo tồn của WWF-Việt Nam tập trung vào hai loài Voi và Sao la. Khi hai loài này được bảo tồn thành công, tình trạng của những loài có cùng môi trường sống và cùng chịu những mối đe doạ chung cũng sẽ được cải thiện. WWF-Việt Nam cũng đồng thời nỗ lực giải quyết các vấn đề về săn bắt, buôn bán và tiêu thụ trái phép các loài bản địa và trong khu vực. <br>

            Chiến lược hoạt động của WWF-Việt Nam dựa vào các cột trụ sau: <br>
            uản lý hiệu quả các Khu Bảo tồn: không còn nguy cơ săn trộm Sao la tại các vị trí trọng yếu, đảm bảo việc tìm kiếm ở ít nhất ba địa điểm; các tiêu chuẩn quản lý hiệu quả được áp dụng tại tất cả các Khu Bảo tồn; Chỉ số Theo dõi Hiệu quả Quản lý đạt >75% và chỉ số tuần tra vì Mục đích Bảo tồn đạt > 90%; <br>
            Giải quyết các vi phạm: tỷ lệ xử án thành công và bắt giữ tội phạm săn bắt, chặt phá rừng trái phép tăng 50% tại các cảnh quan ưu tiên; cầu tiêu thụ sừng tê giác tại Việt Nam giảm 50% vào năm 2020; <br>
            Hợp tác liên biên giới: các vấn đề bảo tồn liên biên giới được giải quyết thông qua việc hợp tác chặt chẽ giữa Việt Nam - Lào và Việt Nam – Campuchia; <br>
            Phục hồi sinh cảnh: bảo tồn sự nguyên vẹn của các hành lang đa dạng sinh học và các sinh cảnh quan trọng (bao gồm rừng, đất ngập nước), duy trì và phục hồi cảnh quan ưu tiên với mục tiêu không mất rừng, không thu hẹp và suy thoái sinh cảnh quan trọng; <br>
            Giải quyết nạn đói nghèo và tạo sinh kế: các mô hình bảo tồn dựa vào cộng đồng hiệu quả được lồng ghép vào các quy hoạch sử dụng đất, thể hiện kết quả rõ ràng trong quản lý tài nguyên thiên nhiên và phát triển sinh kế. <br>

        </p>
    </div>
    <div class="video-youtube">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/_dWJVHIE9S8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
        encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div>
        <?PHP
        include("footer.php");
        ?>
    </div>
</body>

</html>