<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email_or_phone']) && isset($_POST['password'])) {
        $email_or_phone = $_POST['email_or_phone'];
        if ($password === $correct_password) {
            echo "Đăng nhập thành công!";
        } else {
            echo "Sai email hoặc mật khẩu!";
        }
    } else {
        echo "Vui lòng điền đầy đủ thông tin!";
    }
}
?>
