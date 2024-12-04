<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function validateForm() {
            let id = document.getElementsByName("id")[0].value.trim();
            let username = document.getElementsByName("username")[0].value.trim();
            let password = document.getElementsByName("password")[0].value.trim();
            let email = document.getElementsByName("email")[0].value.trim();
            let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Kiểm tra định dạng email

            if (id === "") {
                alert("ID must be filled out.");
                return false;
            }
            if (username === "") {
                alert("Username must be filled out.");
                return false;
            }
            if (password.length < 6) {
                alert("Password must be at least 6 characters.");
                return false;
            }
            if (!emailPattern.test(email)) {
                alert("Invalid email format.");
                return false;
            }
            return true; // Nếu tất cả hợp lệ
        }
    </script>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image: url('https://plus.unsplash.com/premium_photo-1661645473770-90d750452fa0?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8amV3ZWxyeXxlbnwwfHwwfHx8MA%3D%3D');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

/* Form Container */
form {
    background-color: #ffffff;
    padding: 20px 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    box-sizing: border-box;
}

/* Form Title */
form h1 {
    margin: 0 0 20px;
    font-size: 24px;
    color: #333;
    text-align: center;
}

/* Input Fields */
form input[type="text"],
form input[type="password"],
form input[type="email"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 14px;
    background-color: #f9f9f9;
    transition: border-color 0.3s;
}

form input[type="text"]:focus,
form input[type="password"]:focus,
form input[type="email"]:focus {
    border-color: #007BFF;
    outline: none;
}

/* Submit Button */
form input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Responsive Design */
@media (max-width: 600px) {
    form {
        padding: 15px 20px;
    }
    form h1 {
        font-size: 20px;
    }
}
    </style>
</head>
<body>
    <form action="" method="POST" onsubmit="return validateForm()">
        ID: <input type="text" name="id" value="<?php echo isset($_POST['id']) ? htmlspecialchars($_POST['id']) : ''; ?>"> <br>
        UserName: <input type="text" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"> <br>
        Password: <input type="password" name="password" value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : ''; ?>"> <br>
        Email: <input type="text" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"> <br>
        <input type="submit" name="submit" value="Register">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "se06303_wdad";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Kết nối thất bại: " . mysqli_connect_error());
        }

        $id = trim($_POST["id"]);
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $email = trim($_POST["email"]);

        if (empty($id) || empty($username) || empty($password) || empty($email)) {
            echo "<script>alert('All fields are required.');</script>";
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format.');</script>";
            exit;
        }
        if (strlen($password) < 6) {
            echo "<script>alert('Password must be at least 6 characters.');</script>";
            exit;
        }

        $checkIdQuery = "SELECT * FROM users WHERE id = '$id'";
        $checkIdResult = mysqli_query($conn, $checkIdQuery);

        if (mysqli_num_rows($checkIdResult) > 0) {
            echo "<script>alert('ID đã tồn tại trong hệ thống.');</script>";
            exit;
        }

        $checkUsernameQuery = "SELECT * FROM users WHERE username = '$username'";
        $checkUsernameResult = mysqli_query($conn, $checkUsernameQuery);

        if (mysqli_num_rows($checkUsernameResult) > 0) {
            echo "<script>alert('Username đã tồn tại trong hệ thống.');</script>";
            exit;
        }

        $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
        $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

        if (mysqli_num_rows($checkEmailResult) > 0) {
            echo "<script>alert('Email đã tồn tại trong hệ thống.');</script>";
            exit;
        }

        $sql = "INSERT INTO users (id, username, password, email) VALUES ('$id', '$username', '$password', '$email')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Thêm thành công.');</script>";
            header("Location: login.php");
             exit();
        } else {
            $errorMessage = mysqli_error($conn);
            echo "<script>alert('Thêm thất bại: $errorMessage');</script>";
        }
    }
    ?>
</body>
</html>
 