<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查詢網頁</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

    <h2>資料庫查詢結果</h2>

    <?php
        // 資料庫連接資訊
        $servername = 'localhost';
        $username = 'root';
        $password = 'aa0421626';
        $dbname = 'search_collect';

        // 建立資料庫連接
        $conn = new mysqli($servername, $username, $password, $dbname);

        // 檢查連接是否成功
        if ($conn->connect_error) {
            die("連接失敗: " . $conn->connect_error);
        }

        // 查詢資料
        $sql = "SELECT * FROM dessert_shop";
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

</body>
</html>
