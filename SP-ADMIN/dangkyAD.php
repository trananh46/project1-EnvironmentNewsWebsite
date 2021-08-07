<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dangkyAD.css">

</head>

<body>
    <form action="dangkyAD-process.php" method="post">
        <header>
            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" HEIGHT="600">
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
                    <td>Quyền</td>
                    <td>
                        <input type="radio" name="admin" value="1">admin
                        <input type="radio" name="admin" value="0">super admin
                    </td>
                    <td><span class="error" id="erradmin"></span></td>
                </tr>
                <tr>
                    <td id="coin">
                        <button>đăng ký</button>
                    </td>
                </tr>
            </table>
            </td>
            </tr>
            </table>
        </header>
    </form>
    <script src="dangkyAD.js">
    </script>
</body>

</html>