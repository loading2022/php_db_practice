<?php
// 載入 db.php 來連結資料庫
require_once 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>搜蒐甜點店</title>
    <style>
        .search-bar{
            width:70%;
            height:30px;
            border-radius:10px;
            background-color:lightgray;
        }
    </style>
</head>
<body>
<?php
// 獲取 Shop_ID 參數
$shopID = isset($_GET['shop_id']) ? $_GET['shop_id'] : '';

// 查詢資料
$sql = "SELECT * FROM dessert_shop WHERE Shop_ID = '$shopID'";
$result = $conn->query($sql);

// 顯示查詢結果
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>店家詳細資訊</h2>";
    echo "<p><strong>Name:</strong> " . $row["Shop_Name"] . "</p>";
    echo "<p><strong>Email:</strong> " . $row["Shop_Email"] . "</p>";
    echo "<p><strong>Seat:</strong> " . $row["Shop_Seat"] . "</p>";
    echo "<p><strong>Phone:</strong> " . $row["Shop_Phone"] . "</p>";
    echo "<p><strong>Website:</strong> " . $row["Shop_Website"] . "</p>";
} else {
    echo "未找到相應的店家資訊";
}

// 關閉資料庫連接
$conn->close();
?>
<h2>評論</h2>
<input type="submit">新增評論</input>
</body>
