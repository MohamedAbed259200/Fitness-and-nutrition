<!-- <?php


?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحة الاشتراك</title>
    <link rel="stylesheet" href="SingUp.css">
</head>
<body>
    <center>
    <div class="container">
        <h2>إنشاء حساب جديد</h2><br><br><br><br><br>
        <form id="signupForm" action="signup.php" method="POST">
            <input type="text" id="username" placeholder="                 اسم المستخدم" required>
            <input type="email" id="email" placeholder="               البريد الإلكتروني" required>
            <input type="password" id="password" placeholder="                 كلمة المرور" required><br><br><br><br>
            <button type="submit">اشترك</button>
        </form>
        <p id="message"></p>
    </div>
</center>
    
    <script>
        document.getElementById("signupForm").addEventListener("submit", function(event) {
            event.preventDefault();
            
            let username = document.getElementById("username").value;
            let email = document.getElementById("email").value;
            let password = document.getElementById("password").value;
            
            let formData = new FormData();
            formData.append("username", username);
            formData.append("email", email);
            formData.append("password", password);
            
            fetch("signup.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById("message").textContent = data;
            })
            .catch(error => console.error("Error:", error));
        });
    </script>
</body>
</html> -->


<?php
$db = new SQLite3('users.db');

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = htmlspecialchars($_POST["username"]);
    $email = htmlspecialchars($_POST["email"]);
    $pass = password_hash($_POST["password"], PASSWORD_BCRYPT);

    // Check if email already exists
    $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindValue(':email', $email, SQLITE3_TEXT);
    $result = $stmt->execute();

    if ($result->fetchArray()) {
        echo "<h3>Email already registered. Try another one!</h3>";
    } else {
        // Insert user data
        $stmt = $db->prepare("INSERT INTO users (username, email, password) VALUES (:username, :email, :password)");
        $stmt->bindValue(':username', $user, SQLITE3_TEXT);
        $stmt->bindValue(':email', $email, SQLITE3_TEXT);
        $stmt->bindValue(':password', $pass, SQLITE3_TEXT);

        if ($stmt->execute()) {
            echo "<h2>Registration Successful! 🎉</h2>";
        } else {
            echo "<h3>Error: Could not register user.</h3>";
        }
    }
}
?>
