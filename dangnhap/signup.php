<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if ($password === $confirm_password) {
            echo "Đăng ký thành công!";
        } else {
            echo "Mật khẩu và xác nhận mật khẩu không khớp!";
        }
    } else {
        echo "Vui lòng điền đầy đủ thông tin!";
    }
}
?>
