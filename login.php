<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        function validateLoginForm() {
            let username = document.getElementsByName("username")[0].value.trim();
            let password = document.getElementsByName("password")[0].value.trim();

            if (username === "") {
                alert("Username is required.");
                return false;
            }
            if (password === "") {
                alert("Password is required.");
                return false;
            }
            return true; // Nếu tất cả hợp lệ, cho phép gửi form
        }
    </script>
    <style>
       /* General body styling */
body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f0f0f0;
    background-image: url('https://plus.unsplash.com/premium_photo-1661645473770-90d750452fa0?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8amV3ZWxyeXxlbnwwfHwwfHx8MA%3D%3D');
    background-size: cover;
    background-position: center;
}

/* Form container styling */
form {
    background: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    padding: 20px 30px;
    max-width: 400px;
    width: 100%;
}

/* Form input and labels */
form input[type="text"],
form input[type="password"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
}

form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    width: 100%;
    margin-top: 15px;
}

form input[type="submit"]:hover {
    background-color: #45a049;
}

/* Add focus to inputs */
form input[type="text"]:focus,
form input[type="password"]:focus {
    border-color: #4CAF50;
    outline: none;
    box-shadow: 0 0 5px rgba(76, 175, 80, 0.5);
}

/* Form headings */
form h2 {
    text-align: center;
    color: #333;
    margin-bottom: 20px;
}

/* Styling for alert messages */
.alert {
    color: red;
    text-align: center;
    margin-top: 10px;
}

/* Mobile responsiveness */
@media (max-width: 600px) {
    form {
        padding: 15px 20px;
    }

    form input[type="text"],
    form input[type="password"] {
        width: calc(100% - 10px);
    }
}
    </style>
</head>
<body>
<form method="post" onsubmit="return validateLoginForm()">
   UserName: <input type="text" name="username" value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"> <br>
   Password: <input type="password" name="password"> <br>
   <input type="submit" name="login" value="Login">
</form>
<?php  
  $connect = mysqli_connect('localhost', 'root', '', 'se06303_wdad');
  if (!$connect) {
      echo "Kết nối thất bại";
      exit();
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = trim($_POST["username"]);
      $password = trim($_POST["password"]);
      
      // Kiểm tra đầu vào từ phía PHP
      if (empty($username) || empty($password)) {
          echo "<script>alert('All fields are required.');</script>";
          exit();
      }

      // Lựa từ bảng user cột username và password
      $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($connect, $sql);
      $check_login = mysqli_num_rows($result);

      if ($check_login == 0) {
        echo "<script>alert('Password or username is incorrect, please try again!');</script>";
    } else {
        echo "<script>alert('You have logged in successfully!');</script>";
        
        // Chuyển hướng đến home.html
        header("Location: home.php");
        exit(); // Đảm bảo không thực thi mã sau khi chuyển hướng
    }
    
  }
?>

</body>
</html>
