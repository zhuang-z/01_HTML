<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>input限制数字输入范围</title>
</head>
<body>
    <?php
    // 定义变量并设置为空值
    $age = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $age = intval(test_input($_POST["age"]));
    }

    if ($age < 18)
    {
        echo "老夫恰有一子……";
    }
    elseif ($age >= 18 && $age < 26)
    {
        echo "菇凉，这是老夫的生辰八字……";
    }
    else
    {
        echo "再见！！";
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }
    ?>
</body>
</html>
