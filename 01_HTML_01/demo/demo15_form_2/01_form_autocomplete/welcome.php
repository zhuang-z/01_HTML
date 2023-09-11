<html>
<head>
    <meta charset="utf-8">
    <title>调查问卷</title>
</head>
<body>
    <?php
    // 定义变量并设置为空值
    $name = $gay = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $gay = test_input($_POST["gay"]);
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>
    <p><?php echo $name; ?>，你居然<?php echo $gay; ?>基佬！</p>
</body>
</html>