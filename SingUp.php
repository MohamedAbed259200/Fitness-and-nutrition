<?php
include "Conect.php"; // تأكد أن الملف يقوم بعمل الاتصال وقمت بتعريف المتغير $conn

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // استقبال بيانات المستخدم بعد التأكد من خلو الحقول من المسافات الفارغة
    $username = trim($_POST['username']);
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    // تشفير كلمة المرور
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    // إعداد استعلام الإدخال في قاعدة البيانات (افترضت اسم الجدول "users")
    $sql = "INSERT INTO users (user_username, email, user_password) VALUES (?, ?, ?)";
    
    // إعداد البيان المجهز لتفادي الهجمات مثل SQL Injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sss", $username, $email, $passwordHash);
        
        // تنفيذ البيان والتحقق من النجاح
        if ($stmt->execute()) {
            // إعادة التوجيه إلى صفحة تسجيل الدخول بعد نجاح التسجيل
            header("Location: Login.php");
            exit();
        } else {
            echo "حدث خطأ أثناء تسجيل المستخدم: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "خطأ في إعداد الاستعلام.";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="SingUp.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
</head>
<body>
    <div class="container">
        <!-- عند تقديم البيانات سيتم إرسالها لنفس الصفحة ليتم معالجتها من قبل الكود بالاعلى -->
        <form action="" method="POST">
            <h2>Sign Up</h2>
            <div class="input-group">
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <button type="submit">Register</button>
            <p>Already have an account? <a href="Login.php">Login</a></p>
        </form>
    </div>
</body>
</html>
