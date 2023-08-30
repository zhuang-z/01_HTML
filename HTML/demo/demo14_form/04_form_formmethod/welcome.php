<html>
<head>
    <meta charset="utf-8">
    <title>一个最简单的表单</title>
</head>
<body>
<?php
    // 定义变量并设置为空值
    $name = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $name = test_input($_GET["name"]);
        $password = test_input($_GET["password"]);
        echo "您当前使用的是 GET 方法提交表单：";
        if (strcmp($password, "IloveFishC.com") == 0) {
            echo "恭喜，登录成功！";
        } else {
            echo "抱歉，登录失败！";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $password = test_input($_POST["password"]);
        echo "您当前使用的是 POST 方法提交表单：";
        if (strcmp($password, "IloveFishC.com") == 0) {
            echo "恭喜，登录成功！";
        } else {
            echo "抱歉，登录失败！";
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
?>
</body>