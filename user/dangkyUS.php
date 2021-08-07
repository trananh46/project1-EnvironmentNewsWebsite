<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangkyUS.css">
</head>

<body>
    <form action="dangkyUS-process.php" method="post">
        <div class="tong">
            <table align="center">
                <tr>
                    <td height="520" colspan="2" valign="top">
                        <h2 align="center">Đăng Ký tài khoản</h2>
                        <table align="center">
                            <Tr>
                                <td>Họ và Tên:</td>
                                <td><input type="text" name="ho-ten" id="hoten" size="40"></td>
                                <td><span class="error" id="errhoten"></span></td>
                            </Tr>
                            <tr>
                                <td>Tài Khoản:</td>
                                <td><input type="text" name="user" id="user" size="40"></td>
                                <td><span class="error" id="erruser"></span></td>
                            </tr>
                            <tr>
                                <td>Mật khẩu:</td>
                                <td><input type="password" name="pass" id="pass"></td>
                                <td><span class="error" id="errpass"></span></td>
                            </tr>
                            <tr>
                                <td>Nhập lại mật Khẩu:</td>
                                <td><input type="password" name="repass" id="repass"></td>
                                <td><span class="error" id="errRepass"></span></td>
                            </tr>
                            <td>Email</td>
                            <td><input type="text" name="mail" id="mail" size="40"></td>
                            <td><span class="error" id="errmail"></span></td>
                </tr>
                <tr>
                    <td>Ngày Sinh:</td>
                    <td><input type="date" name="birth-day" id="ns"></td>
                </tr>
                <Tr>
                    <td>Giới Tính:</td>
                    <td>
                        <input type="radio" name="gioi-tinh" value="1">Nam
                        <input type="radio" name="gioi-tinh" value="0">Nữ
                    </td>
                    <td><span class="error" id="errgioitinh"></span></td>
                </Tr>
                <tr>
                    <td>Số Điện Thoại</td>
                    <td><input type="number" name="phone" id="sdt"></td>
                    <td><span class="error" id="errsdt"></span></td>
                </tr>
                <tr>
                    <td id="coin">
                        <button onclick=" return kt()">đăng ký</button>
                    </td>
                </tr>
            </table>
        </div>

    </form>
    <script src="dangkyUS.js"></script>
</body>

</html>