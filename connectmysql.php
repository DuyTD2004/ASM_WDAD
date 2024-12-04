<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "se06303_wdad";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Kết nối thất bại: " . mysqli_connect_error());
}
else{
    echo "Kết nối thành công";
}

// $result = mysqli_query ($connect,$sql) -> Thực thi truy vấn.
// $mysqli_num_rows($result) : Trả về số lượng các  hàng trong kết quả truy vấn
// mysqli_fetch_assoc: Trả về kết quả mảng liên kết
// mysqli_fetch_array: trả  về  kết quả mảng chỉ mục


?>