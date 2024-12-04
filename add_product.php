<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

form {
    background: #fff;
    padding: 30px; 
    border-radius: 10px; /* Bo góc lớn hơn */
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    width: 500px; 
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 15px; 
    vertical-align: middle;
    font-size: 16px;
}

input[type="text"],
input[type="file"],
input[type="submit"] {
    width: 100%;
    padding: 12px;
    margin: 8px 0; 
    border: 1px solid #ccc;
    border-radius: 6px; 
    box-sizing: border-box;
    font-size: 16px; 
}

input[type="submit"] {
    background-color: #007BFF; 
    color: white;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3; 
}

input:focus {
    outline: none;
    border-color: #007BFF;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.alert {
    margin-top: 20px;
    padding: 15px;
    color: white;
    background-color: #f44336;
    border-radius: 4px;
    text-align: center;
    display: none;
}

.alert.success {
    background-color: #4CAF50;
}

.alert.error {
    background-color: #f44336;
}
</style>


</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
  <table>
 <tr>
 <td>Mã sản phẩm:</td>
<td><input type="text" name="product_id" required></td>
 </tr>
<tr>
<td>Tên sản phẩm:</td>
<td><input type="text" name="product_name" required></td>
 </tr>
 <tr>
 <td>Giá sản phẩm:</td>
 <td><input type="text" name="product_price" required></td>
 </tr>
 <tr>
 <td>Số lượng sản phẩm:</td>
 <td><input type="text" name="quantity" required></td>
 </tr>
<tr>
<td>Ảnh sản phẩm:</td>
<td><input type="file" name="product_img" required></td>
 </tr>
 <tr>
 <td>Mô tả sản phẩm:</td>
 <td><input type="text" name="product_description" required></td>
 </tr>
 <tr>
<td colspan="2"><input type="submit" name="add_product" value="Thêm mới"></td>
</tr>
</table> 
</form>
<?php
// B1: Kết nối và chọn CSDL
$connect = mysqli_connect('localhost', 'root', '', 'se06303_wdad');
if (!$connect) {
      die("Kết nối thất bại: " . mysqli_connect_error());
} 
else {
      echo "";
}

// B2: Viết câu truy vấn khi nhấn nút "Thêm mới"
if (isset($_POST['add_product'])) {
$product_id = mysqli_real_escape_string($connect, $_POST['product_id']);
$product_name = mysqli_real_escape_string($connect, $_POST['product_name']);
$product_price = mysqli_real_escape_string($connect, $_POST['product_price']);
$quantity = mysqli_real_escape_string($connect, $_POST['quantity']);
$product_description = mysqli_real_escape_string($connect, $_POST['product_description']);

$product_img = $_FILES['product_img']['name'];
$product_img_tmp = $_FILES['product_img']['tmp_name'];
$upload_dir = "Image/";

 if (!is_dir($upload_dir)) {
 mkdir($upload_dir, 0777, true);
 }

 if (move_uploaded_file($product_img_tmp, $upload_dir . $product_img)) {
 $sql = "INSERT INTO products (product_id, product_name, product_price, quantity, product_img, product_description)
 VALUES ('$product_id', '$product_name', '$product_price', '$quantity', '$product_img', '$product_description')";
 $result = mysqli_query($connect, $sql);

 if ($result) {
echo "<script>alert('Thêm sản phẩm thành công');</script>";
 } else {
 echo "<script>alert('Thêm sản phẩm thất bại');</script>";
}
} else {
 echo "<script>alert('Lỗi khi tải ảnh lên');</script>";
}
}
?>

</body>
</html>