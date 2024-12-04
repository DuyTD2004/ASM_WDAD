<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Người Dùng</title>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .profile-container {
            max-width: 500px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .profile-header img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid #fcbe32;
        }

        .profile-header h2 {
            margin: 10px 0;
            color: #333;
        }

        .profile-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        .profile-form input[type="text"], 
        .profile-form input[type="email"], 
        .profile-form input[type="tel"], 
        .profile-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .profile-form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #fcbe32;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .profile-form input[type="submit"]:hover {
            background-color: #dca731;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <img src="Image/user-avatar.png" alt="Ảnh">
            <h2>Hồ Sơ Người Dùng</h2>
        </div>
        <form class="profile-form">
            <label for="username">Tên người dùng:</label>
            <input type="text" id="username" name="username" value="" readonly>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="" readonly>

            <label for="phone">Số điện thoại:</label>
            <input type="tel" id="phone" name="phone" value="" readonly>

            <label for="address">Địa chỉ:</label>
            <textarea id="address" name="address" rows="3" readonly></textarea>

            <input type="submit" value="Chỉnh sửa hồ sơ">
        </form>
    </div>
</body>
</html>
