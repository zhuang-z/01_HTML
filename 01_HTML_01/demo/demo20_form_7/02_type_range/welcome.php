<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>input实现数值滚动条</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0
        }

        body {
            background-color: red;
            display: table;
        }

        .myP {
            color: white;
            font-size: 333px;
            text-align: center;
            padding: 0;
            margin: 0;
            display: table-cell;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <?php
    // 定义变量并设置为空值
    $love = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $love = intval(test_input($_POST["love"]));
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES);
        return $data;
    }

    echo "<p class='myP'>".$love."</p>";
    ?>

<!-- <script>
    var pEle = document.createElement("p");
    pEle.className = "myP";
    var textEle = document.createTextNode("88");
    pEle.appendChild(textEle);
    document.body.appendChild(pEle);
</script> -->
</body>
</html>
