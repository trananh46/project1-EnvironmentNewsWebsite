function kt() {
    var dem = 0;
    var hoten = /^([A-Z][a-z]+[ ]?)+$/;
    var hoten = document.getElementById("hoten").value;
    var errhoten = document.getElementById("errhoten");
    if (hoten === "") {
        errhoten.innerHTML = "Vui Lòng nhập họ tên";
    } else {
        errhoten.innerHTML = "";
        dem++
    }
    var user = /^([A-Za-z0-9\_\.]+){8,16}$/;
    var user = document.getElementById("user").value;
    var erruser = document.getElementById("erruser");
    if (user === "") {
        erruser.innerHTML = "vui lòng nhập tên tài khoản";
    } else {
        erruser.innerHTML = "";
        dem++;
    }
    var pass = document.getElementById("pass").value;
    var repass = document.getElementById("repass").value;
    var errpass = document.getElementById("errpass");
    var errRepass = document.getElementById("errRepass");
    if (pass === "") {
        errpass.innerHTML = "phải nhập mật khẩu";
    } else {
        errpass.innerHTML = "";
        dem++;
    }
    if (repass === "") {
        errRepass.innerHTML = "nhập lại mật khẩu";
    } else if (pass !== repass) {
        errRepass.innerHTML = "mật khẩu không khớp";
    } else {
        errRepass.innerHTML = "";
        dem++;
    }
    var regexmail = /^[A-Za-z0-9\.\_]+@[A-Za-z0-9\.]+$/;
    var mail = document.getElementById("mail").value;
    var errmail = document.getElementById("errmail");
    var checkmail = regexmail.test(mail);
    if (checkmail) {
        errmail.innerHTML = "";
        dem++;
    } else {
        errmail.innerHTML = "lỗi định dạng";

    }
    var demGioiTinh = 0;
    var gioitinh = document.getElementsByName('gioi-tinh');
    var errgioitinh = document.getElementById("errgioitinh");
    for (var i = 0; i < gioitinh.length; i++) {
        if (gioitinh[i].checked) {
            demGioiTinh++;
        }
    }
    if (demGioiTinh === 1) {
        errgioitinh.innerHTML = "";
        dem++;
    } else {
        errgioitinh.innerHTML = "Phải chọn giới tính";

    }
    var sdt = document.getElementById("sdt").value;
    var errsdt = document.getElementById("errsdt");
    var regexsdt = /^(\+84|0)[0-9]{9}$/;
    var check = regexsdt.test(sdt);
    if (check) {
        errsdt.innerHTML = "";
        dem++;
    }
    else {
        errsdt.innerHTML = "nhập số điện thoại";
    }
    if (dem == 7) {
        return true;
    }
    return false;
}