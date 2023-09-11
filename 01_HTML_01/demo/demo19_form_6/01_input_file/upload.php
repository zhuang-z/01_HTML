<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>input实现文件上传</title>
</head>
<body>
    <?php 
    // 取得上传文件信息
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileError = $_FILES['file']['error'];
    $fileSize = $_FILES['file']['size'];
    $tempName = $_FILES['file']['tmp_name'];
    
    // 定义上传文件类型
    $typeList = array("image/jpeg", "image/jpg", "image/png", "image/gif");  //定义允许的类型

    if ($fileError > 0) {
            // 上传文件错误编号判断
            switch ($fileError) {
                case 1:
                    $message = "上传的文件超过了php.ini 中 upload_max_filesize 选项限制的值。"; 
                    break;
                case 2:
                    $message = "上传文件的大小超过了 HTML 表单中 MAX_FILE_SIZE 选项指定的值。"; 
                    break;
                case 3:
                    $message = "文件只有部分被上传。"; 
                    break;
                case 4:
                    $message = "没有文件被上传。";
                    break;
                case 6:
                    $message = "找不到临时文件夹。"; 
                    break;
                case 7:
                    $message = "文件写入失败"; 
                    break;
                case 8:
                    $message = "由于PHP的扩展程序中断了文件上传";
                    break;
            }
            exit("文件上传失败：".$message);
    }
    if (!is_uploaded_file($tempName)) {
        exit("不是通过HTTP POST方式上传上来的");
    }
    if (!in_array($fileType, $typeList)) {
        exit("上传的文件不是指定类型");
    } else {
        if(!getimagesize($tempName)) {
            exit("上传的文件不是图片");                              // 避免用户上传恶意文件,如把病毒文件扩展名改为图片格式
        }
    }
    if ($fileSize > 102400) {
        exit("上传文件超出限制大小");                                 // 对特定表单的上传文件限制大小
    } else {
        echo "上传文件成功！";
    }
    ?>
</body>
</html>