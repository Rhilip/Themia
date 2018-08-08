<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>404 Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            margin: 0;
            line-height: 1.5;
        }

        html {
            color: #888;
            text-align: center;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        }

        body {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -43px 0 0 -150px;
            width: 300px;
        }

        h1 {
            color: #555;
            font-weight: 400;
            font-size: 2em;
        }

        p {
            line-height: 1.2;
        }

        @media only screen and (max-width: 270px) {
            body {
                position: static;
                margin: 10px auto;
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
            }
        }
    </style>
</head>
<body>
<h1>404 Page Not Found</h1>
<p>页面不存在或被管理员删除， <span id="totalSecond">5</span>秒后自动返回首页</p>
</body>
<script language="javascript" type="text/javascript">
    let is_ie = navigator.appName.indexOf("Explorer") > -1;
    let second = document.getElementById('totalSecond').textContent;
    if (is_ie) {  //判断是IE浏览器还是Firefox浏览器，采用相应措施取得秒数
        second = document.getElementById('totalSecond').innerText;
    }
    setInterval("redirect()", 1000);  //每1秒钟调用redirect()方法一次
    function redirect() {
        if (second < 0) {
            location.href = '<?php $this->options->siteUrl(); ?>';
        } else {
            second -= 1;
            if (is_ie) {
                document.getElementById('totalSecond').innerText = second;
            } else {
                document.getElementById('totalSecond').textContent = second;
            }
        }
    }
</script>
</html>