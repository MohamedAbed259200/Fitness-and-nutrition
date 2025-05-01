<?php
session_start(); // بدء الجلسة
include "Conect.php"; // تأكد من أن ملف الاتصال يعيد المتغير $conn

// التحقق من نوع الطلب
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال بيانات المستخدم مع إزالة الفراغات
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    // إعداد استعلام لجلب بيانات المستخدم بناءً على البريد الإلكتروني
    $sql = "SELECT id, user_username, email, user_password FROM users WHERE email = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        // الحصول على نتيجة الاستعلام
        $result = $stmt->get_result();

        // التأكد من وجود حساب بهذا البريد الإلكتروني
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // التحقق من كلمة المرور
            if (password_verify($password, $row['user_password'])) {
                // كلمة المرور صحيحة، بدء جلسة المستخدم
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['username'] = $row['user_username'];
                $_SESSION['email'] = $row['email'];

                // إعادة التوجيه إلى الصفحة الرئيسية
                header("Location:index.php");
                exit();
            } else {
                $error = "كلمة المرور غير صحيحة.";
            }
        } else {
            $error = "لا يوجد حساب مرتبط بهذا البريد الإلكتروني.";
        }
        $stmt->close();
    } else {
        $error = "حدث خطأ أثناء الاستعلام.";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="SingUp.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
</head>
<body>
    <div class="container">
        <!-- عرض رسالة الخطأ إن وجدت -->
        <?php if(isset($error)): ?>
            <p style="color:red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <!-- يُرسل النموذج البيانات لنفس الصفحة ليتم معالجتها -->
        <form action="" method="POST">
            <h2>Login</h2>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
