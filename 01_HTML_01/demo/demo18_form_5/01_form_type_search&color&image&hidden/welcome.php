<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>input实现搜索框样式</title>
</head>
<body>
    <?php
    $search = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $search = test_input($_GET["search"]);
    }

    $url = "https://search.bilibili.com/all?keyword=小甲鱼".$search;
    Header("Location: $url");

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>
</body>
</html>
