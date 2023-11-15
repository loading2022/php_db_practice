<?php
// 載入db.php來連結資料庫
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
<form action="select.php" method="GET">
    <div class="search">
        <input type="text" class="search-bar" name="searchTerm" placeholder="輸入店名...">
        <input type="submit" value="搜尋">
    </div>
</form>

<div id="search-result">
    <?php
        $searchTerm=array();

        // 獲取搜索條件
        $searchTerm = $_GET['searchTerm'];

        // 查詢資料
        $sql = "SELECT * FROM dessert_shop WHERE Shop_Name LIKE '%$searchTerm%'";
        $result = $conn->query($sql);

        // 顯示查詢結果
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Name</th><th>Email</th><th>Seat</th><th>Phone</th><th>Website</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["Shop_Name"] . "</td><td>" . $row["Shop_Email"] . "</td><td>" . $row["Shop_Seat"] . "</td><td>". $row["Shop_Phone"]."</td><td>" . $row["Shop_Website"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 筆結果";
        }
        
        // 關閉資料庫連接
        $conn->close();
    ?>
</div>
</body>
</html>