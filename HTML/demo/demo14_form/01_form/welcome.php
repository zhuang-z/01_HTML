<html>
<head>
    <meta charset="utf-8">
    <title>一个最简单的表单</title>
</head>
<body>
    <?php
    // 定义变量并设置为空值
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>
    <p>欢迎鱼油：<?php echo $name; ?>，您的表单已提交成功哦～</p>
    <p>更多信息会发到您的邮箱：<?php echo $email; ?></p>
</body>
</html>
